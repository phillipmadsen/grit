<?php

use Fully\Models\User;
use Fully\Models\Profile;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table)
        {
            $table->increments('id');

            $table->string('pic')->nullable();

            $table->string('username')->nullable();
            $table->string('display_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('position')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('employment_title')->nullable();
            $table->string('employment_role')->nullable();

             $table->enum('employment_status', ['Active', 'LaidOff', 'OnContract', 'Dismissed', 'OnBreak', 'Maternity Leave', ' Workers Comp']);
             $table->enum('phone_type', ['Home', 'Mobile', 'Work', 'Office', 'Other']);
            $table->string('phone')->nullable();

            $table->string('website')->nullable();
            $table->string('company')->nullable();
            $table->string('gender')->nullable();
            $table->text('about_me')->nullable();
            $table->text('note')->nullable();

            $table->string('skypeid')->nullable();
            $table->string('githubid')->nullable();
            $table->string('twitter_username')->nullable();
            $table->string('instagram_username')->nullable();
            $table->string('facebook_username')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('linked_in_url')->nullable();
            $table->string('google_plus_url')->nullable();

            $table->string('user_api_key')->nullable();
            $table->string('user_api_secret')->nullable();
            $table->string('user_activation_key')->nullable();
            $table->string('activation_code_id')->nullable();
            $table->string('activation_code')->nullable();
            $table->string('confirmation_code')->nullable();
            $table->boolean('confirmed')->default('0');

            $table->boolean('activated')->default('0');
            $table->boolean('published')->default('0');
            $table->boolean('is_active')->default('0');
            $table->boolean('is_fake')->default('0');
            $table->boolean('is_public')->default('0');
            $table->boolean('is_employee')->default('0');

            $table->timestamp('birth_date')->nullable();
            $table->string('dob_month')->nullable();
            $table->string('dob_day')->nullable();
            $table->string('dob_year')->nullable();

            $table->timestamp('profile_activated_on');
            $table->timestamp('activated_on');
            $table->timestamp('published_on');
            $table->integer('user_id')->unsigned();
            $table->engine = 'InnoDB';
            $table->timestamps();
        });

        // User::create([
        //     'id'         => 1,
        //     'name'       => 'phillip madsen',
        //     'first_name' => 'phillip',
        //     'Last_name'  => 'madsen',
        //     'email'      => 'madsynn@gmail.com',
        //     'password'   => bcrypt('mad15696'),
        //     'profile_id' => 1,
        //     'last_login' => Carbon\Carbon::now(),
        //     'created_at' => Carbon\Carbon::now()
        // ]);

        // Profile::create([
        //     'user_id'              => 1,
        //     'website'              => 'http://www.affordableprogrammer.com',
        //     'company'              => 'Affordable Programmer',
        //     'note'                 => 'web developers rock!',
        //     'facebook_username'    => 'affordableprogrammer',
        //     'twitter_username'     => 'twitter',
        //     'instagram_username'   => 'instagram',
        //     'githubid'             => 'github',
        //     'skypeid'              => 'skype',
        //     'linked_in_url'        => 'http://www.linkedin.com',
        //     'google_plus_url'      => 'http://plus.google.com',
        //     'facebook_url'         => 'http://www.facebook.com',
        //     'birth_date'           => '09-13-1976',
        //     'dob_month'            => '9',
        //     'dob_day'              => '13',
        //     'dob_year'             => '1976',
        //     'activated'            => true,
        //     'published'            => true,
        //     'confirmed'            => true,
        //     'is_active'            => true,
        //     'is_fake'              => false,
        //     'is_employee'          => true,
        //     'is_public'            => true,
        //     'uuid'                 => null,
        //     'pic'                  => null,
        //     'username'             => 'phillipmadsen',
        //     'display_name'         => 'Phillip Madsen',
        //     'about_me'             => null,
        //     'phone'                => '8012602669',
        //     'phone_type'           => 'Home',
        //     'position'             => 'employee',
        //     'supervisor'           => 'jaren',
        //     'employment_title'     => 'random employee',
        //     'employment_role'      => 'to follow nathan around the office',
        //     'employment_status'    => 'active',
        //     'gender'               => 'male',
        //     'user_api_key'         => str_random(32),
        //     'user_api_secret'      => str_random(64),
        //     'user_activation_key'  => str_random(128),
        //     'activation_code_id'   => str_random(128),
        //     'activation_code'      => str_random(15),
        //     'confirmation_code'    => str_random(4),
        //     'profile_activated_on' => Carbon\Carbon::now(),
        //     'published_on'         => Carbon\Carbon::now(),
        //     'slug'                 => 'account-1',
        //     'created_at'           => Carbon\Carbon::now(),
        //     'updated_at'           => Carbon\Carbon::now()
        // ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profiles');
    }
}
