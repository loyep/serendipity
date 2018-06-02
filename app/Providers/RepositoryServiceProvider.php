<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserMetaRepository::class, \App\Repositories\UserMetaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\TermRepository::class, \App\Repositories\TermRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CategoryRepository::class, \App\Repositories\CategoryRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\TagRepository::class, \App\Repositories\TagRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CommentRepository::class, \App\Repositories\CommentRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PostRepository::class, \App\Repositories\PostRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PageRepository::class, \App\Repositories\PageRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\TermPostRepository::class, \App\Repositories\TermPostRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\TermMetaRepository::class, \App\Repositories\TermMetaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\OptionRepository::class, \App\Repositories\OptionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CommentMetaRepository::class, \App\Repositories\CommentMetaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\OperationLogRepository::class, \App\Repositories\OperationLogRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\MenuRepository::class, \App\Repositories\MenuRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PostMetaRepository::class, \App\Repositories\PostMetaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PermissionRepository::class, \App\Repositories\PermissionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\RoleRepository::class, \App\Repositories\RoleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserRoleRepository::class, \App\Repositories\UserRoleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PermissionRoleRepository::class, \App\Repositories\PermissionRoleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\RoleMenuRepository::class, \App\Repositories\RoleMenuRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\MenuGroupRepository::class, \App\Repositories\MenuGroupRepositoryEloquent::class);
        //:end-bindings:
    }
}
