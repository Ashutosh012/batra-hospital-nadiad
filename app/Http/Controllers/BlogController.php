<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stephenjude\FilamentBlog\Models\Post;

class BlogController extends Controller
{
    public function showBlogDetail($id){
        $post = Post::with(['author', 'category'])->where('slug', $id)->firstOrFail();
        $relatedPosts = Post::where('blog_category_id', $post->blog_category_id)->get();
        return view('showblog', compact('post', 'relatedPosts'));
    }

    public function blogList(){
        $blogPosts = Post::with(['author', 'category'])->orderBy('id')->paginate(10);
        return view('bloglist', compact('blogPosts'));
    }
}
