<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\RoleMenuRepository;
use App\Entities\RoleMenu;
use App\Validators\RoleMenuValidator;

/**
 * Class RoleMenuRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class RoleMenuRepositoryEloquent extends BaseRepository implements RoleMenuRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return RoleMenu::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return RoleMenuValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
