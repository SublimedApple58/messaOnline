<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class CommentForm extends Component
{

    public $title;
    public $subtitle;
    public $body;

    protected $rules = [
        'title' => 'required',
        'subtitle' => 'required',
        'body' => 'required'
    ];

    public function commentStore(){

        $this->validate();

        Comment::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body
        ]);

        session()->flash('status', 'il tuo articolo è stato creato correttamente');
        $this->reset();
    }

    public function clearForm(){
        $this->title = '';
        $this->subtitle = '';
        $this->body = '';
    }

    public function render()
    {
        return view('livewire.comment-form');
    }
}
