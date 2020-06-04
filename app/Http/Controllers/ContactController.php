<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

namespace App\Http\Controllers;

use App\Model\HSize;
use App\Model\Page;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }


    public function store($id,Request $request)
    {
        $items = Page::find($id)->items->toArray(['id']);
        return view('email')->with(['email'=> $request ,'destinationEmail'=> $this->findEmailItem($items) ]);;
    }
    private function findEmailItem($items){
        foreach ($items as &$item) {
            if ($item['type_id'] == '7') {
                return $item['body'];
            }
        }
    }
}
