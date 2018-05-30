<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\OperationLog;

/**
 * Class OperationLogTransformer.
 *
 * @package namespace App\Transformers;
 */
class OperationLogTransformer extends TransformerAbstract
{
    /**
     * Transform the OperationLog entity.
     *
     * @param \App\Entities\OperationLog $model
     *
     * @return array
     */
    public function transform(OperationLog $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
