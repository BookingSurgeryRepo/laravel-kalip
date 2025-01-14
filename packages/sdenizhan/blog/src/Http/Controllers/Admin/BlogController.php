<?php

namespace Sdenizhan\Blog\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return dd(auth()->user());
    }
}
