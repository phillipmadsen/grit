<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlbumPhoto extends Model
{
    protected $table = 'product_album';
    protected $guarded = ['id'];

    public $fillable = ['product_id', 'photo_src','alt', 'caption', 'photoinfo', 'linkto', 'use_main', 'use_thumb', 'use_gallery'];



    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
