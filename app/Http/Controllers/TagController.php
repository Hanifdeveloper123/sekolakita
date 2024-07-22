<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Tag;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index($name): View
    {
        $tag = Tag::where('name', $name)->firstOrFail();
        $posts = $tag->posts()->paginate(10);
        return view('tag.index', compact('tag', 'posts'));
    }
}
