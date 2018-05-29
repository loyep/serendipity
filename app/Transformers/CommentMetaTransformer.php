<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\CommentMeta;

/**
 * Class CommentMetaTransformer.
 *
 * @package namespace App\Transformers;
 */
class CommentMetaTransformer extends TransformerAbstract
{
    /**
     * Transform the CommentMeta entity.
     *
     * @param \App\Entities\CommentMeta $model
     *
     * @return array
     */
    public function transform(CommentMeta $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
