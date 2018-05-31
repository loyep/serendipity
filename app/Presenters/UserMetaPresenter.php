<?php

namespace App\Presenters;

use App\Transformers\UserMetaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UserMetaPresenter.
 *
 * @package namespace App\Presenters;
 */
class UserMetaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UserMetaTransformer();
    }
}
