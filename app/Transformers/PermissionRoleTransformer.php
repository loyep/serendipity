<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\PermissionRole;

/**
 * Class PermissionRoleTransformer.
 *
 * @package namespace App\Transformers;
 */
class PermissionRoleTransformer extends TransformerAbstract
{
    /**
     * Transform the PermissionRole entity.
     *
     * @param \App\Entities\PermissionRole $model
     *
     * @return array
     */
    public function transform(PermissionRole $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
