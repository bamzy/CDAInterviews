<?php


namespace App\Model;
use App\Model\Item;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';

    /**
     * Get the comments for the blog post.
     */
    public function items()
    {
        return $this->belongsToMany('App\Model\Item','item_pages','page_id','item_id');
    }

}
