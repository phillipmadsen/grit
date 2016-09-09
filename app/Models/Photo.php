<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Photo.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class Photo extends Model
{
    public $table = 'photos';
    public $timestamps = false;

    public function slider()
    {
        return $this->morphTo(Slider::class, 'relationship');
    }

    public function photo_gallery()
    {
        return $this->morphTo(PhotoGallery::class, 'relationship');
    }

    /**
     * Relationship with the product model.
     *
     * @author    Phillip Madsen
     * @return    \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
