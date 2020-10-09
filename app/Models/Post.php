<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Post extends Model
{
    //
    protected $table = 'posts';
    protected $fillable=[
        'id','title','content','created_at','updated_at'
    ];
    public function Category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
