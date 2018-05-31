<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CommentMetaRepository;
use App\Entities\CommentMeta;
use App\Validators\CommentMetaValidator;

/**
 * Class CommentMetaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CommentMetaRepositoryEloquent extends BaseRepository implements CommentMetaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CommentMeta::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CommentMetaValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
