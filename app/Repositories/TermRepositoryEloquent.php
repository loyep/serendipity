<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TermRepository;
use App\Entities\Term;
use App\Validators\TermValidator;

/**
 * Class TermRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class TermRepositoryEloquent extends BaseRepository implements TermRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Term::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return TermValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
