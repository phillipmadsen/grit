<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('path', 255)->nullable();
            $table->string('file_name', 255)->nullable();
            $table->integer('file_size')->nullable();
            $table->string('lang', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
