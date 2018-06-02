<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreatePermissionRolesTable.
 */
class CreatePermissionRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_roles',
            function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('permission_id');
                $table->unsignedInteger('role_id');
                $table->timestamps();

                $table->unique(['permission_id', 'role_id']);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_roles');
    }
}
