<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($name):View
{
    $category = Category::where('name', $name)->firstOrFail();
    $posts = $category->posts()->paginate(10);
    return view('category.index', compact('category','posts'));}
}
