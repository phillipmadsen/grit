<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        // \DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        // \DB::table('products')->truncate();
        // \DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        \DB::table('products')->insert(array (
            0 =>
            array (
                'id' => 1,

                'is_published' => 0,
                'name' => 'GQ Machine Quilting Frame',
                'subtitle' => NULL,
                'meta_title' => 'GQ Quilting Frame',
                'facebook_title' => 'GQ Quilting Frame',
                'google_plus_title' => 'GQ Quilting Frame',
                'meta_description' => 'The GQ machine quilting frame is the top of the line, and designed to give you the optimal quilting experience. ',
                'short_description' => 'The GQ machine quilting frame is the top of the line, and designed to give you the optimal quilting experience. ',
                'description' => 'The GQ machine quilting frame is the top of the line, and designed to give you the optimal quilting experience. Using favorite features from past frames, the GQ frame also has innovative characteristics that are all its own. The carriage uses a fully dual-wheel system that enhances stitch quality, accuracy, and motion. The steel construction makes it extra durable and able to withstand years and years of heavy use.',
                'category' => 0,
                'price' => '2399.95',
                'sale_price' => NULL,
                'sku' => '',
                'mpn' => '',

                'primary_image' => 'gq-main.png',
                'status' => 'Online',

                'video_url' => NULL,
                
                'created_at' => '2016-05-10 14:53:18',
                'updated_at' => '2016-05-10 14:53:18',
                'deleted_at' => NULL,

            ),
            1 =>
            array (
                'id' => 2,

                'is_published' => 0,
                'name' => 'The Gracie King Frame',
                'subtitle' => NULL,
                'meta_title' => 'The Gracie King Machine Quilting Frame',
                'facebook_title' => 'The Gracie King Machine Quilting Frame',
                'google_plus_title' => 'The Gracie King Machine Quilting Frame',
                'meta_description' => 'The Gracie King Machine Quilting Frame',
                'short_description' => 'The Gracie King Machine Quilting Frame',
                'description' => 'The Gracie King is for quilters who desire stability without sacrificing the traditional beauty of a wood-crafted frame. It is our largest frame yet and can be set up in three sizes. It has height-adjustable legs allowing you work at your most comfortable level, a fourth rail to keep your batting off the floor, and even a flip-up rail so you can easily examine and adjust the batting under your top quilt layer.',
                'category' => 0,
                'price' => '1699.95',
                'sale_price' => NULL,
                'sku' => '',
                'mpn' => '',

                'primary_image' => 'gracie_king.jpg',
                'status' => 'Online',

                'video_url' => NULL,
                
                'created_at' => '2016-05-10 14:58:37',
                'updated_at' => '2016-05-10 14:58:37',
                'deleted_at' => NULL,

            ),
            2 =>
            array (
                'id' => 3,

                'is_published' => 0,
                'name' => 'The Gracie Queen Frame',
                'subtitle' => NULL,
                'meta_title' => 'The Gracie Queen Machine Quilting Frame',
                'facebook_title' => 'The Gracie Queen Machine Quilting Frame',
                'google_plus_title' => 'The Gracie Queen Machine Quilting Frame',
                'meta_description' => 'The Gracie Queen Machine Quilting Frame',
                'short_description' => 'The Gracie Queen Machine Quilting Frame',
                'description' => 'The Gracie Queen has many of the same great features of the Gracie King, including height adjustable legs, Professional Series aluminum rails, and the flip-up rail. After you purchase the Gracie Queen, if you want the extra length and fourth rail of the Gracie King, all you have to do is get the Gracie King Extension Kit.',
                'category' => 0,
                'price' => '1299.95',
                'sale_price' => NULL,
                'sku' => '',
                'mpn' => '',

                'primary_image' => 'gracie_queen.jpg',
                'status' => 'Online',

                'video_url' => NULL,
                
                'created_at' => '2016-05-10 14:59:53',
                'updated_at' => '2016-05-10 14:59:53',
                'deleted_at' => NULL,

            ),
            3 =>
            array (
                'id' => 4,

                'is_published' => 0,
                'name' => 'SR2 Quilting Frame',
                'subtitle' => NULL,
                'meta_title' => 'SR2 Machine Quilting Frame',
                'facebook_title' => 'SR2 Machine Quilting Frame',
                'google_plus_title' => 'SR2 Machine Quilting Frame',
                'meta_description' => 'SR2 Machine Quilting Frame',
                'short_description' => 'SR2 Machine Quilting Frame',
                'description' => 'The SR2 Machine Quilter offers a high-quality machine quilting frame at an affordable price. This is the first of our frames to feature 2 rails and the new Quilt-Clasps for easy fabric control. Just clip the Quilt Clips to the quilt and rail for even tension without having to roll the fabric.',
                'category' => 0,
                'price' => '999.95',
                'sale_price' => NULL,
                'sku' => '',
                'mpn' => '',

                'primary_image' => 'sr2_frame.jpg',
                'status' => 'Online',

                'video_url' => NULL,
                
                'created_at' => '2016-05-10 15:00:58',
                'updated_at' => '2016-05-10 15:00:58',
                'deleted_at' => NULL,

            ),
            4 =>
            array (
                'id' => 5,

                'is_published' => 0,
                'name' => 'The Z44 Hand Frame',
                'subtitle' => NULL,
                'meta_title' => 'The Z44 No-Baste Hand Quilting Frame',
                'facebook_title' => 'The Z44 No-Baste Hand Quilting Frame',
                'google_plus_title' => 'The Z44 No-Baste Hand Quilting Frame',
                'meta_description' => 'The Z44 No-Baste Hand Quilting Frame',
                'short_description' => 'The Z44 is our top of the line hand quilting frame, as well as the most adjustable frame on the market. You can set the included height-adjustable legs to your level without the need of any tools! The work area also tilts to six different angles, letting you work in comfort. The Z44 is also durable and designed to withstand heavy use. Made with a beautifully crafted Baltic Birch wood, this is yet another way Grace quilting frames combine style and functionality.',
                'description' => 'The Z44 is our top of the line hand quilting frame, as well as the most adjustable frame on the market. You can set the included height-adjustable legs to your level without the need of any tools! The work area also tilts to six different angles, letting you work in comfort. The Z44 is also durable and designed to withstand heavy use. Made with a beautifully crafted Baltic Birch wood, this is yet another way Grace quilting frames combine style and functionality.',
                'category' => 0,
                'price' => '699.95',
                'sale_price' => '0.00',
                'sku' => '',
                'mpn' => '',

                'primary_image' => 'z44_sally.jpg',
                'status' => 'Online',

                'video_url' => '',
                'list_item_1' => 'Sets up in crib, twin, queen and king sizes',
                'list_item_2' => 'Tilt adjustable work area (6 angles)',
                'list_item_3' => 'Folds for convenient storage',
                'list_item_4' => '50-tooth ratchets provide superior tension',
                'list_item_5' => '',
                'created_at' => '2016-05-10 16:44:14',
                'updated_at' => '2016-05-10 16:53:35',
                'deleted_at' => NULL,

            ),
            5 =>
            array (
                'id' => 6,

                'is_published' => 0,
                'name' => 'Start-Right EZ3',
                'subtitle' => NULL,
                'meta_title' => 'Start-Right EZ3 No-Baste Hand Quilting Frame',
                'facebook_title' => 'Start-Right EZ3 No-Baste Hand Quilting Frame',
                'google_plus_title' => 'Start-Right EZ3 No-Baste Hand Quilting Frame',
                'meta_description' => 'Start-Right EZ3
No-Baste Hand Quilting Frame',
                'short_description' => 'The EZ3 is a convenient, adjustable hand quilting frame. The three-rail, no-baste work area can tilt to four different angles. All adjustments can be made and locked in place without the need of any tools, just the knobs that come on the frame. The EZ3 also folds up for space-saving storage.',
                'description' => 'The EZ3 is a convenient, adjustable hand quilting frame. The three-rail, no-baste work area can tilt to four different angles. All adjustments can be made and locked in place without the need of any tools, just the knobs that come on the frame. The EZ3 also folds up for space-saving storage.',
                'category' => 0,
                'price' => '399.00',
                'sale_price' => '0.00',
                'sku' => '',
                'mpn' => '',

                'primary_image' => 'ez3-new-crib.jpg',
                'status' => 'Online',

                'video_url' => '',
                'list_item_1' => 'Sets up in craft, crib, and queen size',
                'list_item_2' => 'Tilt adjustable work area (4 angles)',
                'list_item_3' => 'Folds for convenient storage',
                'list_item_4' => '30-tooth ratchets provide superior tension',
                'list_item_5' => '',
                'created_at' => '2016-05-10 17:02:50',
                'updated_at' => '2016-05-10 17:02:50',
                'deleted_at' => NULL,

            ),
            6 =>
            array (
                'id' => 7,

                'is_published' => 0,
                'name' => 'The GracieBee',
                'subtitle' => NULL,
                'meta_title' => 'The GracieBee traditional-style quilting frame',
                'facebook_title' => 'The GracieBee traditional-style quilting frame',
                'google_plus_title' => 'The GracieBee traditional-style quilting frame',
                'meta_description' => 'The GracieBee traditional-style quilting frame',
                'short_description' => 'The GracieBee traditional-style quilting frame has many non-traditional innovations. Leg joints easily slide together for a snug, sturdy, and balanced fit. Each leg rests on two separate feet, eliminating wobble. All parts fit together without the need for any extra tools to create a uniquely functional group quilting frame. When not in use, all of the pieces come together compactly for convenient storage or travel.',
                'description' => 'The GracieBee traditional-style quilting frame has many non-traditional innovations. Leg joints easily slide together for a snug, sturdy, and balanced fit. Each leg rests on two separate feet, eliminating wobble. All parts fit together without the need for any extra tools to create a uniquely functional group quilting frame. When not in use, all of the pieces come together compactly for convenient storage or travel.

Easy Storage and Portability
All parts come together compactly for easy storage and portability.

Sizes
The GracieBee comes with 4 each of the following rail sizes: 2, 4 and 6 feet. With the 4 included rail connectors, these rails can be combined in frame sizes from 2&#39;x2&#39; up to 8&#39;x12&#39;.
Height: 30 inches.',
                'category' => 0,
                'price' => '399.00',
                'sale_price' => '0.00',
                'sku' => '',
                'mpn' => '',

                'primary_image' => 'graciebee.jpg',
                'status' => 'Online',

                'list_item_1' => 'Can be set up in 19 different sizes, ranging from 2’x2’ to 8’x12’',
                'list_item_2' => '4 each of the following: 2&#39; rails, 4&#39; rails, 6&#39; rails, and rail connectors',
                'list_item_3' => 'All parts and tools included',
                'list_item_4' => 'Free box of quilters thumb tacks and one tack tool',
                'list_item_5' => 'All parts store together compactly for easy portability',
                'created_at' => '2016-05-10 17:10:58',
                'updated_at' => '2016-05-10 17:10:58',
                'deleted_at' => NULL,

            ),
        ));


    }
}
