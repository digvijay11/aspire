<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
class PageController extends Controller
{
    //
    public function index(Request $request)
    {
        $pages = Page::orderBy('id','DESC')->paginate(5);
        return view('pages.index',compact('pages'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    function dashboard()
    {
    	//echo "dashboard";
    	return view('admin.dashboard');	
    }
    function create()
    {
        $page = Page::get();
        return view('pages.create',compact('page'));
    }

    public function store(Request $request)
    {
        
        $page = new Page();
       // $page->name = $request->input('name');
        $page->title = $request->input('title');
        $page->content = $request->input('content');
        $page->excerpt = $request->input('excerpt');
        $page->save();

        
        return redirect()->route('admin.pages.index')
                        ->with('success','Page created successfully');
    }
  
}
