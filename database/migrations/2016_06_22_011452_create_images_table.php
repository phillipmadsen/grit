<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('images', function (Blueprint $table) {
		    $table->increments('id');
		    $table->text('original_name');
		    $table->text('filename');
		    $table->integer('product_id')->unsigned()->index();
		    $table->integer('user_id')->unsigned()->index();
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
	    Schema::drop('images');
    }
}