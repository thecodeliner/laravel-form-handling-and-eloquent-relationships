<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(){
        $allposts = Post::with('postCategory')->get();
        return view('frontend.home.index', [
            
            'allposts' => $allposts,
            ]);
    }
}
