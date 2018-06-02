<?php

namespace App\Presenters;

use App\Transformers\RoleMenuTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class RoleMenuPresenter.
 *
 * @package namespace App\Presenters;
 */
class RoleMenuPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new RoleMenuTransformer();
    }
}
