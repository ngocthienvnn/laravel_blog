<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'categories';
    protected $fillable=[
        'id','title','content','created_at','updated_at'
    ];
}
