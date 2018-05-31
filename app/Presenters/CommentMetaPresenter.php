<?php

namespace App\Presenters;

use App\Transformers\CommentMetaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CommentMetaPresenter.
 *
 * @package namespace App\Presenters;
 */
class CommentMetaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CommentMetaTransformer();
    }
}
