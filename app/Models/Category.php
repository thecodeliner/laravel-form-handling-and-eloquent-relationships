<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        
        'category_name',
        'slug',
        'parent_id',
        'description'
        
        ];
        
        
    public function childCategory(){
        
        return $this->hasMany(Category::class, 'parent_id');
        
    }   
    public function parentCategory(){
        
        return $this->belongsTo(Category::class, 'parent_id');
        
    }  
    
    
    public function posts(){
        return $this->hasMany(Post::class, 'category_id');
    }
}
