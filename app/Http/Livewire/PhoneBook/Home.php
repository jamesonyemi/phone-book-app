<?php

namespace App\Http\Livewire\PhoneBook;

use Livewire\Component;

class Home extends Component
{

    public $post;
    public $get_contact;

    protected $listeners = [
        'refreshOnUpdate'=> '$refresh',
        'refreshOnDelete',

    ];

    public function render()
    {
        return view('livewire.phone-book.home');
    }

    public function mounted($id)
    {
        # code...
        $this->post = PhoneBook::find($id);
        $this->get_contact = PhoneBook::find($id);

    }


    public function showPost($id){
        $post = Post::find($id);
        $this->post = $post;
        $this->emit('newPost', $post->id);

      }

}