<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function index()
    {
//        return view('blog/index');
        return view('blog.index');
    }

    public function list()
    {
        return view('blog.list');
    }

    public function login()
    {
//        echo url('blog/login');
//        echo route('login');
        return view('blog.login');
    }

    public function show()
    {
        return view('blog.show');
    }

    public function user()
    {
        return view('blog.user');
    }

    public function reg()
    {
        return view('blog.reg');
    }
}
