<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class TermMeta.
 *
 * @package namespace App\Entities;
 */
class TermMeta extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'term_id', 'name', 'key', 'value', 'type', 'details',];

    /**
     * @return BelongsTo
     */
    public function term(): BelongsTo
    {
        return $this->belongsTo(Tag::class, 'term_id');
    }
}
