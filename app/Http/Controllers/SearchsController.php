<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Setting;

class SearchsController extends Controller
{
    public function index(){
        $posts = Post::where('title', 'like', '%' . request('query') . '%')->get();
        return view('results')
                ->with('posts', $posts)
                ->with('categories', Category::take(4)->get())
                ->with('title', 'Search results: ' . request('query'))
                ->with('settings', Setting::first())
                ->with('query', request('query'));
    }
}
