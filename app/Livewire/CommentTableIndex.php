<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class CommentTableIndex extends Component
{

    public function deleteComment(Comment $comment){
        $comment -> delete();
    }

    public function render()
    {
        $comments = Comment::all();
        return view('livewire.comment-table-index', compact('comments'));
    }
}
