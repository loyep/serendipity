<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Route;
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
    protected $fillable = [
        'id',
        'parent_id',
        'order',
        'title',
        'icon',
        'target',
        'route',
        'url',
        'parameters',
        'group_id'
    ];

    public static function menus()
    {
        $menus = Menu::has('parent', '=', 0)->withCount('children')->with('children')->orderBy('order')->get();
        return $menus;
    }

    /**
     * @return BelongsTo
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(MenuGroup::class, 'group_id');
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
        return $this->hasMany(Menu::class, 'parent_id')->with('children');
    }

    public function permalink($absolute = false)
    {
        return $this->prepareLink($absolute, $this->route, $this->parameters, $this->url);
    }

    protected function prepareLink($absolute, $route, $parameters, $url)
    {
        if ( is_null($parameters) ) {
            $parameters = [];
        }

        if ( is_string($parameters) ) {
            $parameters = json_decode($parameters, true);
        } elseif ( is_array($parameters) ) {
//            $parameters = $parameters;
        } elseif ( is_object($parameters) ) {
            $parameters = json_decode(json_encode($parameters), true);
        }

        if ( !is_null($route) ) {
            if ( !Route::has($route) ) {
                return 'javascript:void(0)';
            }

            return route($route, $parameters, $absolute);
        }

        if ( $absolute ) {
            return url($url);
        }

        return $url;
    }

    public function setUrlAttribute($value)
    {
        if ( is_null($value) ) {
            $value = '';
        }
        $this->attributes['url'] = $value;
    }


    public function getParametersAttribute()
    {
        return json_decode($this->attributes['parameters']);
    }


    public function setParametersAttribute($value)
    {
        if ( is_array($value) ) {
            $value = json_encode($value);
        }

        $this->attributes['parameters'] = $value;
    }

    /**
     * Return the Highest Order Menu Item.
     *
     * @param number $parent (Optional) Parent id. Default null
     *
     * @return number Order number
     */
    public function highestOrderMenuItem($parent = null)
    {
        $order = 1;

        $item = $this->where('parent_id', '=', $parent)
            ->orderBy('order', 'DESC')
            ->first();

        if ( !is_null($item) ) {
            $order = intval($item->order) + 1;
        }

        return $order;
    }
}
