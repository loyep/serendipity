<?php

namespace App\Presenters;

use App\Transformers\PageTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PagePresenter.
 *
 * @package namespace App\Presenters;
 */
class PagePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PageTransformer();
    }
}
