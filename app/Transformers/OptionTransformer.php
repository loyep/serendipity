<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Option;

/**
 * Class OptionTransformer.
 *
 * @package namespace App\Transformers;
 */
class OptionTransformer extends TransformerAbstract
{
    /**
     * Transform the Option entity.
     *
     * @param \App\Entities\Option $model
     *
     * @return array
     */
    public function transform(Option $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
