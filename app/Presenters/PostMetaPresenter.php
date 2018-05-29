<?php

namespace App\Presenters;

use App\Transformers\PostMetaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PostMetaPresenter.
 *
 * @package namespace App\Presenters;
 */
class PostMetaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PostMetaTransformer();
    }
}
