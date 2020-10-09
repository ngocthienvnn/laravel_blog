<?php

namespace App\Models;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    protected $table = 'categories';
    protected  $fillable = [
        'title', 'description', 'slug'
    ];
//    static function customGetRecord()
//    {
//        self::create([
//            'title' => 'Tin tuc 4',
//            'description' => 'Xin chao',
//            'slug' => 'tin-tuc-3'
//        ]);
//
////        $ob = new self;
////        $ob->title = "Xa HOi";
////        $ob->description = "gioi thieu";
////        $ob->slug = "xa-hoi";
////        $ob->save();
//    }


}
