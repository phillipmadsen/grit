<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\Payment;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class init extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'username' => 'admin',
            'first_name' => 'phillip',
            'last_name' => 'madsen',
            'email' => 'phillip@graceframe.com',
            'password' => bcrypt('mad15696')
        ]);

        $user->isAdmin = 1;
        $user->save();

        $dest = public_path()."/content/admin/photos/phillip.jpg";
        $file = public_path()."/img/phillip.jpg";
        File::copy($file, $dest);
        UserInfo::create([
            "user_id" => $user->id,
            "address" => "795 baker dr",
            "city" => "midvale",
            "state" => "UT",
            "zipcode" => "84047",
            "country" => "United States",
            "phone" => "801-555-5165",
            "photo" => "/content/admin/photos/phillip.jpg"
            ]);


//        $adminPath = public_path() . '/uploads/content/admin/';
//        $adminPhotoPath = public_path() . '/uploads/content/admin/photo/';
//        if(!file_exists($adminPath)) File::makeDirectory(public_path()."/content/admin");
//        if(!file_exists($adminPhotoPath)) File::makeDirectory(public_path()."/content/admin/photos");

        Payment::create([
            'stripe_publishable_key' => '',
            'stripe_secret_key' => '',
            'paypal_client_id' => '',
            'paypal_secret' => ''
        ]);
    }
}
