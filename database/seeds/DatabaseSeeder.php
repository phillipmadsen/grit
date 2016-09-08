<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Using truncate function so all info will be cleared when re-seeding.


        Model::unguard();

        //DB::table('users')->truncate();
        //factory(\Fully\Models\User::class)->create(['first_name'=> 'Phillip', 'last_name'=> 'Madsen', 'email'=> 'pmadsen2013@gmail.com', 'password' =>  bcrypt('mad15696')]);
        //$this->call('UsersTableSeeder');
        //$this->command->info('Phillip Seeded Successfully');
        //$this->call('ActivationsTableSeeder');
        //$this->command->comment('Phillip Activated Successfully');

       // $this->call('AdminSeeder');
        //$this->command->comment('Admins Seeded Successfully');

        $this->call('ArticlesTableSeeder');
        $this->command->comment('Articles added Successfully');

        $this->call('NewsTableSeeder');
        $this->call('TagsTableSeeder');
        $this->call('ArticlesTagsTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('PagesTableSeeder');
        $this->call('PhotoGalleriesTableSeeder');
        $this->call('SettingsTableSeeder');
        $this->call('MenusTableSeeder');
        $this->call('SlidersTableSeeder');
        $this->call('FaqsTableSeeder');

        $this->call('VideosTableSeeder');
        $this->call('SlidersTableSeeder');

        $this->call('ProductsTableSeeder');
        $this->command->comment('Products Added Successfully');


        Model::reguard();


    }
}
