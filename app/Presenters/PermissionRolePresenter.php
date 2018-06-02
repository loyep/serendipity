<?php

namespace App\Presenters;

use App\Transformers\PermissionRoleTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PermissionRolePresenter.
 *
 * @package namespace App\Presenters;
 */
class PermissionRolePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PermissionRoleTransformer();
    }
}
