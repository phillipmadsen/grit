<?php

use Illuminate\Database\Seeder;

class PriceProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('price_product')->delete();

        \DB::table('price_product')->insert(array(
            0 =>
                array(
                    'product_id' => 1,
                    'price_id' => 1
                ),
            1 =>
                array(
                    'product_id' => 2,
                    'price_id' => 2
                ),
            2 =>
                array(
                    'product_id' => 3,
                    'price_id' => 3
                ),
        ));
    }
}
