<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class MenuGroup.
 *
 * @package namespace App\Entities;
 */
class MenuGroup extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name'];

    public function items()
    {
        return $this->hasMany(Menu::class, 'group_id', 'id');
    }

    public function parent_items()
    {
        return $this->hasMany(Menu::class, 'group_id', 'id')->whereNull('parent_id');
    }

    public static function display($menuName, $type = null, array $options = [])
    {
        $group = static::where('name', '=', $menuName)
            ->with([
                'parent_items.children' => function ($query) {
                    $query->orderBy('order');
                }
            ])
            ->first();

        if ( is_null($group)) {
            $group = new MenuGroup();
        }
        return $group;
    }
}
