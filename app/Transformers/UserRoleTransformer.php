<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\UserRole;

/**
 * Class UserRoleTransformer.
 *
 * @package namespace App\Transformers;
 */
class UserRoleTransformer extends TransformerAbstract
{
    /**
     * Transform the UserRole entity.
     *
     * @param \App\Entities\UserRole $model
     *
     * @return array
     */
    public function transform(UserRole $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
