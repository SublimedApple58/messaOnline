<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    function create(){
        return view('comments.create');
    }

    function index(){
        return view('comments.index');
    }

    function edit(Comment $comment){
        return view('comments.edit', compact('comment'));
    }
}
