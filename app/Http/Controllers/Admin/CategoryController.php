<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller

{

    public function getCategory(Request $request)
    {
//        $title = "xin chao #$@$#@ ...././ moi nguoi"; // xin-chao-moi-nguoi
        //cut string
//        $slug = \Str::slug($titallle, '-');
//        dd($slug);
//        $post=Category::customGetRecord();
        $post = Category::all()->toArray();
        //$name=collect([$post]);
//        dd($post);
//        foreach ($post as $item) {
////           $k = $item['title'];
//           $slug[$item['id']] = \Str::slug($item['title'],'-');
//            //           dd($item);
//        }
        return $post;
//       dd($post);

       // update
//        Category::where('id', 1)->update(['description' => '111', 'title' => '222']);
        // delete
//        Category::where('id', 1)->delete();
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
      dd('done');
    }
}
