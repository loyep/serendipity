<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TermPostRepository;
use App\Entities\TermPost;
use App\Validators\TermPostValidator;

/**
 * Class TermPostRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class TermPostRepositoryEloquent extends BaseRepository implements TermPostRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TermPost::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return TermPostValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
