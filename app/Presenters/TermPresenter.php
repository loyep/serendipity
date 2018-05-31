<?php

namespace App\Presenters;

use App\Transformers\TermTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class TermPresenter.
 *
 * @package namespace App\Presenters;
 */
class TermPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TermTransformer();
    }
}
