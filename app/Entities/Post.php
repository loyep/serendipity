<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Post.
 *
 * @package namespace App\Entities;
 */
class Post extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'user_id',
        'content', 'title', 'excerpt', 'slug',
        'status', 'allow_comment', 'allow_feed',
        'allow_ping', 'template', 'password', 'pinged', 'to_ping',
        'parent', 'url', 'menu_order', 'type',
        'mime', 'comments_count'];

    /**
     * The author of this post.
     *
     * @return BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * The comments belongs to this post.
     *
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'comment_post_id', 'post_id');
    }

    /**
     * The metas of this post.
     *
     * @return HasMany
     */
    public function metas(): HasMany
    {
        return $this->hasMany(PostMeta::class, 'comment_id');
    }

    /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class,
            'term_posts', 'post_id', 'term_id')->where('type', 'tag');
    }

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class,
            'term_posts', 'post_id', 'term_id')->where('type', 'category');
    }

}
