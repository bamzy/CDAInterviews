<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    /**
     * Get the comments for the blog post.
     */
    public function items()
    {
        return $this->belongsToMany('Item');
    }

}
