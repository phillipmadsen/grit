<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_variant extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_variants';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id', 'attribute_name', 'product_attribute_value', 'deleted_at'];

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
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['pubished_at', 'deleted_at', 'deleted_at', 'deleted_at'];

}