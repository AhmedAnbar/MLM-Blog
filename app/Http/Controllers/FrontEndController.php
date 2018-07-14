<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
use App\Tag;

class FrontEndController extends Controller
{
    public function index(){
        return view('index')
                ->with('title', Setting::first()->site_name)
                ->with('categories', Category::take(4)->get())
                ->with('first_post', Post::orderBy('created_at', 'desc')->first())
                ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
                ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
                ->with('web_development', Category::find(1))
                ->with('web_design', Category::find(2))
                ->with('tutorials', Category::find(4))
                ->with('settings', Setting::first());
    }

    public function singlePost($slug){
        $post = Post::where('slug', $slug)->first();

        

        if($post){
            $next_id = Post::where('id', '>', $post->id)->min('id');
            $prev_id = Post::where('id', '<', $post->id)->max('id');
            
            return view('single_post')
                ->with('post', $post)
                ->with('title', $post->title)
                ->with('categories', Category::take(4)->get())
                ->with('settings', Setting::first())
                ->with('tags', Tag::all())
                ->with('next', Post::find($next_id))
                ->with('prev', Post::find($prev_id));
        }else{
            return view('404')
            ->with('categories', Category::take(4)->get())
            ->with('title', 'Post not found')
            ->with('settings', Setting::first());
        }
    }

    public function category($name){
        $category = Category::where('name', $name)->first();

        if($category){
            return view('single_category')
                ->with('category', $category)
                ->with('categories', Category::take(4)->get())
                ->with('title', $category->name)
                ->with('settings', Setting::first());
        }else{
            return view('404')
                ->with('categories', Category::take(4)->get())
                ->with('title', 'Category not found')
                ->with('settings', Setting::first());
        }
                
    }

    public function tag($name){
        $tag = Tag::where('name', $name)->first();

        if($tag){
            return view('single_tag')
                ->with('tag', $tag)
                ->with('categories', Category::take(4)->get())
                ->with('title', $tag->name)
                ->with('settings', Setting::first());
        }else{
            return view('404')
                ->with('categories', Category::take(4)->get())
                ->with('title', 'Tag not found')
                ->with('settings', Setting::first());
        }

        
                
    }
}
