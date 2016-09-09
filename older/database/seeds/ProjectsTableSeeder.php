<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        DB::table('projects')->truncate();

        DB::table('projects')->insert( );
    }
}
