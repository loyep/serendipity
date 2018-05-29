<?php

namespace App\Presenters;

use App\Transformers\OptionTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class OptionPresenter.
 *
 * @package namespace App\Presenters;
 */
class OptionPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new OptionTransformer();
    }
}
