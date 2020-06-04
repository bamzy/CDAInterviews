<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Page;
use App\Model\Item;
use App\User;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */

    public function __construct()
    {
        $this->middleware('auth');

    }
    public function store(Request $request)
    {
        $item = Item::find($request->itemId);
        $item->body = $request->body;
        $item->type_id = $request->type;
        $item->hsize_id = $request->hsize;
        $item->link = $request->linkAddress;
        $item->italic = (isset($request->italicFlag))? true:false;
        $item->bold = (isset($request->boldFlag))? true:false;
        $item->striked = (isset($request->strikeFlag))? true:false;
        $item->centralized = (isset($request->centerFlag))? true:false;
        $item->save();
        return redirect('/page/'.$request->pageId);
    }


}
