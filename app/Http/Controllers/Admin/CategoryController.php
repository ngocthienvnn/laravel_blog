<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categories()
    {
        return view('category.categories');
    }

    public function getCategory()
    {
        $post = Category::all()->toArray();
        return $post;
    }
    public function store(Request $request)
    {

       $request->validate([
            'title'=>'required|max:255',
            'discription'=>'required'
        ]);
        $slug = \Str::slug($request->input(['title']), '-');
      Category::create(
          ['title' => $request->input('title'), 'description' => $request->input('discription'), 'slug' => $slug]
      );
     return 'done';
    }

}
