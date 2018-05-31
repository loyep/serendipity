<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Tag.
 *
 * @package namespace App\Entities;
 */
class Tag extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'slug', 'description', 'count', 'parent', 'order', 'type'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'terms';

    /**
     *
     * The metas of this tag.
     *
     * @return HasMany
     */
    public function metas(): HasMany
    {
        return $this->hasMany(TermMeta::class, 'term_id');
    }

    /**
     * The posts of this tag.
     *
     * @return BelongsToMany
     */
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'term_posts', 'term_id', 'post_id');
    }

}
