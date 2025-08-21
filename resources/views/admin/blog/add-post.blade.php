@extends('admin.layouts.master')
@section('content')
<main class="px-4 py-6 sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded-lg shadow-md mb-8 max-w-3xl mx-auto">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Create New Blog Post</h2>
            @session('success')
            
            <p style="color:green">{{session('success')}}</p>
            @endsession
            <form method="POST" action="{{route('admin.post.create')}}" class="space-y-6" onsubmit="event.preventDefault(); " enctype="multipart/form-data">
                @csrf
                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title <span class="text-red-500">*</span></label>
                    <input type="text" id="title" name="title" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="Enter blog post title">
                      @error('title')
            
                        <p style="color:red">{{$message}}</p>
                        @enderror              
            </div>

                <!-- Category Selection -->
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700">Category <span class="text-red-500">*</span></label>
                    <select id="category" name="category_id"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 bg-white focus:ring-blue-500 focus:border-blue-500">
                        <option value="" disabled selected>Select Category</option>
                        @foreach($childCategories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                       
                       @endforeach
                    </select>
                    @error('category_id')
            
                        <p style="color:red">{{$message}}</p>
                        @enderror      
                </div>

                <!-- Content (WYSIWYG Editor) -->
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700">Content <span class="text-red-500">*</span></label>
                    <div id="content" class="e-h-250 mt-1 border border-gray-300 rounded-md"></div>
                    <input type="hidden" name="content" id="content-input">
                     @error('content')
            
                        <p style="color:red">{{$message}}</p>
                        @enderror      
                </div>

                <!-- Image Upload -->
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Featured Image</label>
                    <input type="file" id="image" name="image" accept="image/*"
                           class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                @error('image')
            
                        <p style="color:red">{{$message}}</p>
                        @enderror    
                </div>

                <!-- Submit Button -->
                <div class="text-right">
                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md">
                        Publish
                    </button>
                </div>
            </form>
        </div>
    </main>
    @endsection