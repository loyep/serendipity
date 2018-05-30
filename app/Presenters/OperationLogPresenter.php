<?php

namespace App\Presenters;

use App\Transformers\OperationLogTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class OperationLogPresenter.
 *
 * @package namespace App\Presenters;
 */
class OperationLogPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new OperationLogTransformer();
    }
}
