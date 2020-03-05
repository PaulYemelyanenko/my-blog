<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use Searchable;

    protected $fillable = ['title', 'description', 'content', 'image'];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'posts_index';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        $data = [
            'id' => $array['id'],
            'title' => $array['title'],
            'description' => $array['description'],
            'image' => $array['image'],
        ];

        return $data;
    }

    /**
     * Splits the given value.
     *
     * @param  string $value
     * @return array
     */
    public function splitBody($value)
    {
        return explode('. ', $value);
    }
}
