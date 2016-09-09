<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 * @package App\Models
 */
class Message extends Model
{
    protected $table = "messages";
    protected $fillable = ['name','email','user_id','message','subject','opened'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
