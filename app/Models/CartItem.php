<?php

namespace Fully\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    public function cart()
    {
        return $this->belongsTo('Fully\Models\Cart');
    }

    public function product()
    {
        return $this->belongsTo('Fully\Models\Product');
    }
}
