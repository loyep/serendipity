<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\MenuGroup;

/**
 * Class MenuGroupTransformer.
 *
 * @package namespace App\Transformers;
 */
class MenuGroupTransformer extends TransformerAbstract
{
    /**
     * Transform the MenuGroup entity.
     *
     * @param \App\Entities\MenuGroup $model
     *
     * @return array
     */
    public function transform(MenuGroup $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
