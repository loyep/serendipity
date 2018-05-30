<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\OperationLogRepository;
use App\Entities\OperationLog;
use App\Validators\OperationLogValidator;

/**
 * Class OperationLogRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class OperationLogRepositoryEloquent extends BaseRepository implements OperationLogRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return OperationLog::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return OperationLogValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
