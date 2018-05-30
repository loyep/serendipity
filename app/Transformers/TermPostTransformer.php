<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\TermPost;

/**
 * Class TermPostTransformer.
 *
 * @package namespace App\Transformers;
 */
class TermPostTransformer extends TransformerAbstract
{
    /**
     * Transform the TermPost entity.
     *
     * @param \App\Entities\TermPost $model
     *
     * @return array
     */
    public function transform(TermPost $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
