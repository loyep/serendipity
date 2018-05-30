<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreatePostMetasTable.
 */
class CreatePostMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_metas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('post_id');
            $table->string('name')->nullable();
            $table->string('key')->comment('关键字');
            $table->text('value')->nullable()->comment('值');
            $table->string('type')->default('text');
            $table->text('details')->nullable();
            $table->timestamps();

            $table->unique(['post_id', 'key']);
            $table->foreign('post_id')->references('id')->on('terms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_metas');
    }
}
