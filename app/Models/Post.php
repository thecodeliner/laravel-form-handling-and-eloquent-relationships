<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = [
       
       'title',
       'category_id',
       'image',
       'content'
       
       ];
       
       public function postCategory(){
           
           return $this->belongsTo(Category::class, 'category_id');
       }
}
