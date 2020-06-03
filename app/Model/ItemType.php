<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class ItemType extends Model
{
    protected $table = 'item_types';
    public function item()
    {
        return $this->belongsTo('App\Model\Item', 'type_id', 'id');
    }
}
