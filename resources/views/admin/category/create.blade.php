@extends('admin.layouts.master')

@section('content')

  <main class="px-4 py-6 sm:px-6 lg:px-8">
                <div class="bg-white p-6 rounded-lg shadow-md mb-8 max-w-3xl mx-auto">
                    <h2 class="text-xl font-bold mb-4 text-gray-800">Create New Category</h2>
                    @session('success')
                        <p style="color:green;">{{session('success')}}</p>
                    @endsession
                    <form action="{{route('admin.category.store')}}" method="POST" class="space-y-6">
                        <!-- Title -->
                        @csrf
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Title <span class="text-red-500">*</span></label>
                            <input type="text" id="title" name="category_name"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('category_name')
                             <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>

                        <!-- Slug -->
                        <div>
                            <label for="slug" class="block text-sm font-medium text-gray-700">Slug <span class="text-red-500">*</span></label>
                            <input type="text" id="slug" name="slug" 
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                                @error('slug')
                             <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>

                        <!-- Parent Category -->
                        <div>
                            <label for="parent_category" class="block text-sm font-medium text-gray-700">Parent Category <span class="text-red-500">*</span></label>
                            <select id="parent_category" name="parent_id" 
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 bg-white focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Select Parent Category</option>
                               @foreach($parentCategories as $parentCategory)
                               
                                <option value="{{$parentCategory->id}}">{{$parentCategory->category_name}}</option>
                               @endforeach
                                <!-- Add more options dynamically here -->
                            </select>
                        </div>

                        <!-- Description -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description <span class="text-red-500">*</span></label>
                            <textarea id="description" name="description"  rows="4"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                    @error('Description')
                             <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="text-right">
                            <button type="submit"
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md">
                                Create Category
                            </button>
                        </div>
                    </form>
                </div>

            </main>
@endsection
