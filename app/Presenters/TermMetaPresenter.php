<?php

namespace App\Presenters;

use App\Transformers\TermMetaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class TermMetaPresenter.
 *
 * @package namespace App\Presenters;
 */
class TermMetaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TermMetaTransformer();
    }
}
