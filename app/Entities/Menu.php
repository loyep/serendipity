<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Menu.
 *
 * @package namespace App\Entities;
 */
class Menu extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'parent_id', 'order', 'title', 'icon', 'target', 'route', 'url', 'parameters', 'group'];

    public static function menus()
    {
        $menus = Menu::has('parent', '=', 0)->withCount('children')->with('children')->get();
        return $menus;
    }

    /**
     * @return BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    /**
     * @return HasMany
     */
    public function children(): HasMany
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function getPermalinkAttribute()
    {
        if ( !empty($this->route) ) {

            $parameters = json_decode($this->parameters, true);
            
            if ( !is_array($parameters) ) {
                $parameters = array();
            }
            
            $route = route($this->route, $parameters);

            return $route;
        }

        if ( !empty($this->url) ) {
            return url($this->url);
        }
        return 'javascript:void(0)';
    }

}
