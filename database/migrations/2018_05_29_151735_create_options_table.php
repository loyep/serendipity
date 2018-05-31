<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateOptionsTable.
 */
class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group')->nullable();
            $table->string('name')->nullable();
            $table->string('key')->comment('关键字');
            $table->text('value')->nullable()->comment('值');
            $table->string('type');
            $table->text('details')->nullable();
            $table->integer('order')->default(1);
            $table->timestamps();

            $table->unique(['name', 'key']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options');
    }
}
