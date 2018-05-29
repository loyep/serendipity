<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\UserMeta;

/**
 * Class UserMetaTransformer.
 *
 * @package namespace App\Transformers;
 */
class UserMetaTransformer extends TransformerAbstract
{
    /**
     * Transform the UserMeta entity.
     *
     * @param \App\Entities\UserMeta $model
     *
     * @return array
     */
    public function transform(UserMeta $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
