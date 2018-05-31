<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\PostMetaRepository;
use App\Entities\PostMeta;
use App\Validators\PostMetaValidator;

/**
 * Class PostMetaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class PostMetaRepositoryEloquent extends BaseRepository implements PostMetaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PostMeta::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PostMetaValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
