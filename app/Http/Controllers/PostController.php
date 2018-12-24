<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required|max:10',
        'body' => 'required',
    ]);
    }
}
