<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreatePostsTable.
 */
class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->default(0)->comment('用户id');
            $table->text('content')->comment('正文');
            $table->text('title')->comment('标题');
            $table->text('excerpt')->comment('摘录');
            $table->string('slug', 200)->default('')->comment('文章缩略名');
            $table->string('status', 20)->default('publish');
            $table->boolean('allow_comment')->default(true)->comment('允许评论');
            $table->boolean('allow_feed')->default(true)->comment('允许聚合');
            $table->boolean('allow_ping')->default(true)->comment('允许ping');
            $table->string('template')->nullable()->comment('模板');
            $table->string('password', 255)->default('')->comment('文章密码');
            $table->text('pinged')->default('')->comment('已经PING过的链接');
            $table->text('to_ping')->default('')->comment('强制该文章去ping某个URI');
            $table->integer('parent')->default(0);
            $table->string('url', 255)->default('');
            $table->integer('menu_order')->default(0)->comment('排序id');
            $table->string('type', 20)->default('post');
            $table->string('mime', 100)->default('');
            $table->integer('comments_count')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
