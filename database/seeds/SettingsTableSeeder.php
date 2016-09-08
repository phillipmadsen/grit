<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        DB::table('settings')->truncate();

        $settings = array(
            'settings' => '{"site_title":"Grace Management Console","ga_code":"UA-78414244-1","meta_keywords":"Grace Multi Language Website and Content Managment System","meta_description":"The new Grace Website Multi Language Content Managment System"}',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'lang' => 'en', );

        DB::table('settings')->insert($settings);
    }
}
