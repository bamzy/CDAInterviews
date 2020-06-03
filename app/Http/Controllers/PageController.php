<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\HSize;
use App\Model\ItemType;
use App\Model\Page;
use App\Model\Item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Array_;

class PageController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {

    }

    public function render($id){

        $items = Page::find($id)->items->toArray(['id']);
        $page = Page::find($id);
        $types = ItemType::all();
        $hsizes = HSize::all();
        return view('home')->with(['items'=>$items,'types'=>$types,'page'=>$page,'hsizes'=>$hsizes]);

    }
    public function store(Request $request)
    {
        $page = Page::find($request->pageId);
        $page->meta_name = $request->metaName;
        $page->meta_description = $request->metaDescription;
        $page->save();
        $indexedFlag = (isset($request->indexedFlag))? true:false;
        DB::table('pages')->update(array('indexed' => $indexedFlag));
        return redirect('/page/'.$request->pageId);
    }
}
