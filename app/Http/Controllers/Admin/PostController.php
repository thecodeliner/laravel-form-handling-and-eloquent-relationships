<?php

namespace App\Http\Controllers\Admin;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request){
        $childCategory = Category::whereNotNull('parent_id')->get();
        
        return view('admin.blog.add-post', [
            
            'childCategories' => $childCategory,
            
            ]);
    }

    
    public function store(PostRequest $request){
        
        $validated = $request->validated();
        
        // Image handle
         if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('posts', 'public');
         }
         
        Post::create($validated);
        
        return redirect()->back()->with('success', 'Post added successfully');
    }
    
    public function show(Request $request){
        
        $allPosts = Post::with('postcategory')->paginate(10);
        return view('admin.blog.all-posts', [
            
            'allposts' => $allPosts,
            
            ]);
        
    }
    
}
