<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller

{

    public function test(Request $request)
    {
//        $title = "xin chao #$@$#@ ...././ moi nguoi"; // xin-chao-moi-nguoi
        //cut string
//        $slug = \Str::slug($titallle, '-');
//        dd($slug);
//        $post=Category::customGetRecord();
        $post=Category::all();
       dd($post);

       // update
//        Category::where('id', 1)->update(['description' => '111', 'title' => '222']);
        // delete
//        Category::where('id', 1)->delete();
    }
    public function admin(Request $request){
        dd('23123123');
    }

}
