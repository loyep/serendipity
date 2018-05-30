<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateCommentMetasTable.
 */
class CreateCommentMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_metas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('comment_id');
            $table->string('name')->nullable();
            $table->string('key')->comment('关键字');
            $table->text('value')->nullable()->comment('值');
            $table->string('type')->default('text');
            $table->text('details')->nullable();
            $table->timestamps();

            $table->unique(['comment_id', 'key']);
            $table->foreign('comment_id')->references('id')->on('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_metas');
    }
}
