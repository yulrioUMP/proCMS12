<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Content;

class HomeController extends Controller
{

    public function index()
    {
        $contents = Content::all();
        return view('home.welcome', ["contents" => $contents]);
    }

    public function read($id)
    {
        $content = Content::find($id);
        return view('home.read', ["content" => $content]);
    }

    public function category($id)
    {
        $category = Category::find($id);
        $contents = Content::where('cat_id', $id)->get();
        return view('home.category', ["contents" => $contents, "category" => $category]);
    }
}
