<?php

namespace App\Livewire;

use Livewire\Component;

class CommentEditForm extends Component
{

    public $title;
    public $subtitle;
    public $body;

    public $comment;

    protected $rules = [
        'title' => 'required',
        'subtitle' => 'required',
        'body' => 'required'
    ];

    public function mount(){
        $this->title = $this->comment->title;
        $this->subtitle = $this->comment->subtitle;
        $this->body = $this->comment->body;
    }
    
    public function editComment(){

        $this->validate();

        $this->comment->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body
        ]);

        session()->flash('status', 'Commento aggiornato con successo');
    }

    public function render()
    {
        return view('livewire.comment-edit-form');
    }
}
