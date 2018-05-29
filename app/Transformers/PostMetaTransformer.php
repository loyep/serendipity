<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\PostMeta;

/**
 * Class PostMetaTransformer.
 *
 * @package namespace App\Transformers;
 */
class PostMetaTransformer extends TransformerAbstract
{
    /**
     * Transform the PostMeta entity.
     *
     * @param \App\Entities\PostMeta $model
     *
     * @return array
     */
    public function transform(PostMeta $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
