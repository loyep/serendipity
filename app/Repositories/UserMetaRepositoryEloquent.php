<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserMetaRepository;
use App\Entities\UserMeta;
use App\Validators\UserMetaValidator;

/**
 * Class UserMetaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserMetaRepositoryEloquent extends BaseRepository implements UserMetaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UserMeta::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return UserMetaValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
