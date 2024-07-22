<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;


class PrestasiController extends Controller
{
    public function index(Request $request){
                //get posts
     $category = Category::all();

     $posts = Post::latest()->when(request()->q, function ($posts) {
        $posts = $posts->where('title', 'like', '%' . request()->q . '%');
    })->paginate(9);
     
     if ($request->ajax()) {

        $view = view('data', compact('posts'))->render();
        return response()->json(['html' => $view]);

    }
        //render view with posts
        return view('prestasi.index', compact('posts','category'));
    }

    public function show($slug): View
{
    //get post by ID
    $post = Post::where('slug', $slug)->firstOrFail();
    //render view with post
    $events = Event::latest()->paginate(4);


    $tags = Tag::latest()->paginate(10);
    return view('berita.index', compact('post','events','tags'));
}




}
