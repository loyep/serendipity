<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TermMetaRepository;
use App\Entities\TermMeta;
use App\Validators\TermMetaValidator;

/**
 * Class TermMetaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class TermMetaRepositoryEloquent extends BaseRepository implements TermMetaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TermMeta::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return TermMetaValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
