<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'active' => 'categories',
            'title' => 'All Categoies',
            'categories' => Category::all(),
        ]);
    }

    // public function show(Category $category)
    // {
    //     return view('posts', [
    //         'active' => 'posts',
    //         'title' => "Post by category : $category->name",
    //         'posts' => $category->posts->load('category', 'author'),
    //     ]);
    // }
}
