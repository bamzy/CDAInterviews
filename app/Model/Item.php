<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    public function type(){
        $this->hasOne('App\Model\ItemType');
    }
    public function hsize(){
        $this->hasOne('App\Model\HSize');
    }


    public function tags(){
        return $this->belongsToMany('App\Model\Tag','item_tags','item_id','tag_id');
    }

    public function pages()
    {
        return $this->belongsToMany('App\Model\Page','item_pages','item_id','page_id');
    }


}
