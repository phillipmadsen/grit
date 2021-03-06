<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;
use App\Interfaces\ModelInterface as ModelInterface;

/**
 * Class Tag.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class Tag extends Model implements ModelInterface , SluggableInterface
{
    use SluggableTrait;

    public $table = 'tags';
    protected $appends = ['url'];

    protected $sluggable = array(
        'build_from' => 'name',
        'save_to' => 'slug',
    );

    public function articles()
    {
        return $this->belongsToMany('App\Models\Article', 'articles_tags');
    }

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return '/tag/'.$this->attributes['slug'];
    }
}
