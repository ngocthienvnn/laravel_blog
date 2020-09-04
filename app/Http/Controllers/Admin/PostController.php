<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //
    public function Post()
    {
        $post = Post::all();
        dd($post);
    }
}
