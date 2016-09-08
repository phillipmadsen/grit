<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateproductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->nullable();
            $table->boolean('ispromo');
            $table->boolean('is_published');
            $table->string('availability')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('product_line')->nullable();
            $table->string('status')->nullable();
            $table->string('office_status')->nullable();
            $table->string('guid')->nullable();
            $table->string('asin')->nullable();
            $table->string('model')->nullable();
            $table->string('sku', 13)->nullable();
            $table->string('upc', 13)->nullable();
            $table->string('mpn')->nullable();
            $table->string('name');
            $table->string('subtitle')->nullable();
            $table->text('short_description');
            $table->text('description');
            $table->string('feature')->nullable();
            $table->string('category')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('facebook_title')->nullable();
            $table->string('google_plus_title')->nullable();
            $table->string('twitter_title')->nullable();
            $table->integer('price')->nullable();
            $table->integer('promo_price')->unsigned()->nullable();
            $table->integer('msrp_price')->unsigned()->nullable();
            $table->integer('dealer_price')->unsigned()->nullable();
            $table->integer('employee_price')->unsigned()->nullable();
            $table->integer('sale_price')->nullable();
            $table->string('sale_price_coupon_code');
            $table->timestamp('sale_price_start_date')->nullable();
            $table->timestamp('sale_price_end_date')->nullable();
            $table->integer('quantity')->unsigned()->nullable();
            $table->integer('tax_id')->unsigned()->nullable();
            $table->string('tax_status')->nullable();
            $table->string('tax_class')->nullable();
            $table->string('video_url')->nullable();
  
            $table->string('path')->nullable();
            $table->string('file_name')->nullable();
            $table->integer('file_size')->unsigned()->nullable();
            $table->string('image_alt')->nullable();
            $table->string('primary_image_label')->nullable();
            $table->integer('primary_image_file_size')->unsigned()->nullable();
            $table->string('primary_image')->nullable();
            $table->string('second_image_label')->nullable();
            $table->integer('second_image_file_size')->unsigned()->nullable();
            $table->string('second_image')->nullable();
            $table->string('third_image_label')->nullable();
            $table->integer('third_image_file_size')->unsigned()->nullable();
            $table->string('third_image')->nullable();
            $table->string('fourth_image_label')->nullable();
            $table->integer('fourth_image_file_size')->unsigned()->nullable();
            $table->string('fourth_image')->nullable();
            $table->string('fifth_image_label')->nullable();
            $table->integer('fifth_image_file_size')->unsigned()->nullable();
            $table->string('fifth_image')->nullable();
            $table->string('product_doc')->nullable();
            $table->string('product_doc_label')->nullable();
            $table->integer('product_doc_file_size')->unsigned()->nullable();
            $table->string('tracking')->nullable();
            $table->string('datalayer')->nullable();
            $table->timestamp('pubished_at')->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
