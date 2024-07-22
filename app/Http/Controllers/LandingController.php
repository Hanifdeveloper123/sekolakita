<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(Request $request){
    $posts = Post::latest()->paginate(3);

    $tag = Tag::all();

    if ($request->ajax()) {
    $view = view('data', compact('posts','tag'))->render();
    return response()->json(['html' => $view]);
}
//render view with posts
return view('home.index', compact('posts'));
}

public function show($slug): View
{
    // Get post by slug with related tags and category
    $post = Post::with('tags')->where('slug', $slug)->firstOrFail();
    
    // Get latest events and categories with pagination
    $events = Event::latest()->paginate(5);

    // Render view with post, events, and categories
    return view('berita.index', compact('post', 'events',));
}

}

?>