<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PermissionRoleRepository;
use App\Entities\PermissionRole;
use App\Validators\PermissionRoleValidator;

/**
 * Class PermissionRoleRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PermissionRoleRepositoryEloquent extends BaseRepository implements PermissionRoleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PermissionRole::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PermissionRoleValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
