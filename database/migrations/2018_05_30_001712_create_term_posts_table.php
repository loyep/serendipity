<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateTermPostsTable.
 */
class CreateTermPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_posts', function (Blueprint $table) {
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('term_id')->default(0);
            $table->integer('term_order')->default(0);
            $table->timestamps();
            $table->primary(['post_id', 'term_id']);

            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('term_id')->references('id')->on('terms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('term_posts');
    }
}
