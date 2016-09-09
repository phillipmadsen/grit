<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_feature extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_features';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id', 'feature_name', 'useicon', 'icon'];

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
    protected $casts = ['useicon' => 'boolean'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['pubished_at', 'deleted_at', 'deleted_at', 'deleted_at'];

}