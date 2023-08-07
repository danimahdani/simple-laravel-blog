<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'active' => '',
            'title' => 'All Categoies',
            'categories' => Category::all(),
        ]);
    }

    public function show(Category $category)
    {
        return view('category', [
            'active' => 'posts',
            'title' => $category->name,
            'posts' => $category->posts,
            'category' => $category->name,
        ]);
    }
}
