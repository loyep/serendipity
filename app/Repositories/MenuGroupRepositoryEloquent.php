<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\MenuGroupRepository;
use App\Entities\MenuGroup;
use App\Validators\MenuGroupValidator;

/**
 * Class MenuGroupRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class MenuGroupRepositoryEloquent extends BaseRepository implements MenuGroupRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return MenuGroup::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return MenuGroupValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
