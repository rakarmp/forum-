<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function users()
    {
        return view('admin.users.index', [
            'users' => User::all(),
        ]);
    }

    public function categoriesIndex()
    {
        return view('admin.categories.index');
    }

    public function categoriesCreate()
    {
        return view('admin.categories.create');
    }

    public function threadsIndex()
    {
        return view('admin.threads.index');
    }
}
