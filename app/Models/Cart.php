<?php

namespace Fully\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function user()
    {
        return $this->belongsTo('Fully\Models\User');
    }

    public function cartItems()
    {
        return $this->hasMany('Fully\Models\CartItem');
    }
}
