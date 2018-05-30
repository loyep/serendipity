<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateTermsTable.
 */
class CreateTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 200)->nullable()->comment('名称');
            $table->string('slug', 200)->nullable()->comment('别名');
            $table->text('description')->nullable()->comment('描述');
            $table->integer('count')->default(0)->comment('文章数');
            $table->integer('parent')->default(0);
            $table->integer('order')->default(0);
            $table->string('type')->default('tag')->comment('类型');
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
        Schema::dropIfExists('terms');
    }
}
