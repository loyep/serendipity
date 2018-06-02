<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\RoleMenu;

/**
 * Class RoleMenuTransformer.
 *
 * @package namespace App\Transformers;
 */
class RoleMenuTransformer extends TransformerAbstract
{
    /**
     * Transform the RoleMenu entity.
     *
     * @param \App\Entities\RoleMenu $model
     *
     * @return array
     */
    public function transform(RoleMenu $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
