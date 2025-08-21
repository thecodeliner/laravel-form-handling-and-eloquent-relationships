<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function create(Request $request){
       $parentCategory = Category::whereNull('parent_id')->get();
       
      
       return view('admin.category.create', [
           
           'parentCategories' => $parentCategory,
           
           ]);
   }
   
    public function show(Request $request){
       $allCategories = Category::paginate(10);
       return view('admin.category.category-list', [
           
           'allCategories' => $allCategories,
           
           ]);
   }
   
   public function store(CategoryRequest $request){
       
      $validated = $request->validated();
      
      Category::create($validated);
      
      return redirect()->back()->with('success', 'Category added successfully');
       
   }
}
