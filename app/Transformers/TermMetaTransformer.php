<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\TermMeta;

/**
 * Class TermMetaTransformer.
 *
 * @package namespace App\Transformers;
 */
class TermMetaTransformer extends TransformerAbstract
{
    /**
     * Transform the TermMeta entity.
     *
     * @param \App\Entities\TermMeta $model
     *
     * @return array
     */
    public function transform(TermMeta $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
