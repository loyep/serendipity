<?php

namespace App\Presenters;

use App\Transformers\MenuGroupTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class MenuGroupPresenter.
 *
 * @package namespace App\Presenters;
 */
class MenuGroupPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new MenuGroupTransformer();
    }
}
