<?php

namespace App\Presenters;

use App\Transformers\UserRoleTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UserRolePresenter.
 *
 * @package namespace App\Presenters;
 */
class UserRolePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UserRoleTransformer();
    }
}
