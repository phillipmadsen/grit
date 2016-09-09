<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Price
 * @package App\Models
 */
class Price extends Model
{
    /**
     * @var array
     */
    protected $guarded = ['id', 'product_id'];
    /**
     * @var string
     */
    protected $table = 'prices';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'price', 'model', 'sku', 'upc', 'quantity', 'details', 'deleted_at'];

    protected $dates = ['pubished_at', 'deleted_at', 'deleted_at'];

    /**
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'price'      => 'string',
        'model'      => 'string',
        'sku'        => 'string',
        'upc'        => 'string',
        'quantity'   => 'string',
        'details'   => 'string'
    ];



    public function getPriceAttribute($price)
    {
        return '$'. number_format($price, 2, '.', '');
    }



    public function product()
    {
        return $this->BelongsToMany(Product::class);
    }

//belongsToMany($related, $table = null, $foreignKey = null, $otherKey = null, $relation = null)
}

