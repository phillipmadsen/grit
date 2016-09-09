<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['status', 'office_status', 'availability', 'slug', 'ispromo', 'is_published', 'name', 'subtitle', 'manufacturer', 'details', 'description', 'thumbnail', 'thumbnail2', 'photo_album', 'pubished_at', 'video_url', 'meta_title', 'meta_description', 'facebook_title', 'google_plus_title', 'twitter_title', 'lang', 'deleted_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = ['ispromo' => 'boolean', 'is_published' => 'boolean'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['pubished_at', 'deleted_at'];

}