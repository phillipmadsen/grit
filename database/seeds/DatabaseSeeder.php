<?php


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\Payment;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder {




    /**
     * Run the database seeds.
     */
    public function run() {

        if (App::environment() === 'production') {
            exit('I just stopped you from getting fired. Love Phil');
        }

        Model::unguard();

        $this->call(init::class);
        $this->command->comment('Articles seeded Successfully');



        $this->call('ArticlesTableSeeder');
        $this->command->comment('Articles seeded Successfully');
        $this->call('MenusTableSeeder');
        $this->command->comment('Menus seeded Successfully');

        $this->call('TagsTableSeeder');
        $this->command->comment('Tags seeded Successfully');

        $this->call('PagesTableSeeder');
        $this->command->comment('Pages seeded Successfully');
        //   $this->call('PhotoGalleriesTableSeeder'); $this->command->comment('PhotoGalleries seeded Successfully');
        $this->call('SettingsTableSeeder');
        $this->command->comment('Settings seeded Successfully');
        $this->call('SectionsTableSeeder');
        $this->command->comment('Sections seeded Successfully');
        $this->call('FaqsTableSeeder');
        $this->command->comment('Faqs seeded Successfully');
        //$this->call('ProjectsTableSeeder'); $this->command->comment('Projects seeded Successfully');
        //$this->call('VideosTableSeeder'); $this->command->comment('Videos seeded Successfully');
        //$this->call('SlidersTableSeeder'); $this->command->comment('Sliders seeded Successfully');
        $this->call('CategoriesTableSeeder');
        $this->command->comment('Categories seeded Successfully');
        $this->call('ArticlesTagsTableSeeder');
        $this->command->comment('ArticlesTagsTable seeded Successfully');

        $this->call('ProductsTableSeeder');
        $this->call('PricingTableSeeder');
     //   $this->call('PriceProductTableSeeder');
        $this->call('CategoryProductTableSeeder');

        Model::reguard();



        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'first_name' => $faker->firstname,
                'last_name' => $faker->lastname,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ]);
        }
    }

}
