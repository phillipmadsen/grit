<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = "userinfo";

    protected $fillable = ['user_id' , 'photo' , 'address' , 'address' , 'country' , 'city' , 'state' , 'zipcode' , 'phone'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
