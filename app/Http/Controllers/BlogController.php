<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function list()
    {
        return view('blog.list');
    }
    function detail($id)
    {
        return view('blog.detail');
    }
}
