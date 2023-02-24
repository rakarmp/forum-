<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Thread;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $threads = Thread::forCategory($category->slug)->paginate(10);

        return view('pages.category.index', [
            'threads' => $threads,
            'category' => $category,
        ]);
    }
}
