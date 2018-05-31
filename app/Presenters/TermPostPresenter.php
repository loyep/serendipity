<?php

namespace App\Presenters;

use App\Transformers\TermPostTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class TermPostPresenter.
 *
 * @package namespace App\Presenters;
 */
class TermPostPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TermPostTransformer();
    }
}
