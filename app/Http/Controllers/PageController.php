<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\HSize;
use App\Model\ItemType;
use App\Model\Page;
use App\Model\Item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function __construct()
    {
        $this->middleware('auth')->except('render');

    }
    private $items = null;
    public function render($id){
        $this->items = Page::find($id)->items->toArray(['id']);
        $page = Page::find($id);
        $types = ItemType::all();
        $hsizes = HSize::all();
        if (Auth::check()) {
            return view('editpage')->with(['items' => $this->items , 'types' => $types, 'page' => $page, 'hsizes' => $hsizes]);
        }
        else {
            $this->applyTags();
            return view('viewpage')->with(['items' => $this->items, 'types' => $types, 'page' => $page, 'hsizes' => $hsizes]);
        }

    }
    public function store(Request $request)
    {
        $page = Page::find($request->pageId);
        $page->meta_name = $request->metaName;
        $page->meta_description = $request->metaDescription;
        $page->indexed = $request->indexedFlag;
        $page->save();
        return redirect('/page/'.$request->pageId);
    }
    private function applyTags(){

        foreach ($this->items as &$item) {
            if ($item['bold']) {
                $item['body'] = '<b>' . $item['body'] . '</b>';
            }
            if ($item['italic']) {
                $item['body'] = '<i>' . $item['body'] . '</i>';
            }
            if ($item['striked']) {
                $item['body'] = '<del>' . $item['body'] . '</del>';
            }
            if ($item['centralized']) {
                $item['body'] = '<div style="text-align: center;">' . $item['body'] . '</div>';
            }
            if ($item['hsize_id']!='') {
                $tags = Hsize::find($item['hsize_id']);
                $item['body'] = $tags['start_tag'] . $item['body'] . $tags['end_tag'];
            }

        }

    }
}
