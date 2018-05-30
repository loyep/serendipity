<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateCommentsTable.
 */
class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id')->comment('评论id');
            $table->unsignedInteger('post_id')->default(0)->comment('文章id');
            $table->unsignedInteger('user_id')->default(0)->comment('评论用户id');
            $table->text('author')->default('')->comment('评论者名字');
            $table->string('email', 100)->default('')->comment('评论者邮箱');
            $table->string('url', 200)->default('')->comment('评论者网址');
            $table->string('ip', 100)->default('')->comment('评论者ip');
            $table->text('content')->comment('评论内容');
            $table->boolean('approved')->default(true)->comment('评论审核状态');
            $table->string('agent', 255)->default('')->comment('评论者的User-Agent');
            $table->string('type', 20)->default('')->comment('评论类型');
            $table->integer('parent')->default(0)->comment('父评论id');
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
