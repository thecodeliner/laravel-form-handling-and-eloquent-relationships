<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\PostController as AdminPostController;


Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/blog', [BlogController::class, 'show'])->name('blog.show');

Route::get('/category', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/add-category', [AdminCategoryController::class, 'create'])->name('admin.category.create');

Route::post('/admin/add-category', [AdminCategoryController::class, 'store'])->name('admin.category.store');

Route::get('/admin/category-list', [AdminCategoryController::class, 'show'])->name('admin.category.list');


Route::get('/admin/add-post', [AdminPostController::class, 'create'])->name('admin.post.create');
Route::post('/admin/add-post', [AdminPostController::class, 'store'])->name('admin.post.store');

Route::get('/admin/all-posts', [AdminPostController::class, 'show'])->name('admin.post.show');