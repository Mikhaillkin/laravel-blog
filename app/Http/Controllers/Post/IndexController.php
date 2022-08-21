<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(4);
        $popularPosts = Post::withCount('likedUsers')->orderBy('liked_users_count','DESC')->get()->take(4);
        $allPostsCount = Post::get()->count();
        return view('post.index', compact('posts','randomPosts', 'popularPosts','allPostsCount'));
    }
}
