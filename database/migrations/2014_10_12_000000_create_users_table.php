<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60)->unique()->comment('登录名');
            $table->string('email')->unique()->comment('邮箱');
            $table->string('password');
            $table->string('display_name')->nullable()->comment('显示名称');
            $table->string('url', 100)->nullable()->comment('网址');
            $table->integer('status')->default(0)->comment('状态');
            $table->boolean('allow_login')->default('1')->comment('允许登录');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
