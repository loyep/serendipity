<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Term;

/**
 * Class TermTransformer.
 *
 * @package namespace App\Transformers;
 */
class TermTransformer extends TransformerAbstract
{
    /**
     * Transform the Term entity.
     *
     * @param \App\Entities\Term $model
     *
     * @return array
     */
    public function transform(Term $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
