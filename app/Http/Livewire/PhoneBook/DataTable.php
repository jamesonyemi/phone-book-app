<?php

namespace App\Http\Livewire\PhoneBook;

use Livewire\Component;
use App\Models\PhoneBook;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;


class DataTable extends Component
{
    use WithPagination;

    public $get_contact;
    public string $first_name = '';
    public string $last_name = '';
    public string $phone_number = '';
    public $post;
    public $post_id;
    public $search = '';


    protected $queryString = ['search' => ['except' => '']];

    protected $listeners = [
        'refreshOnSave' => '$refresh',
    ];


    public function render()
    {

        return view('livewire.phone-book.data-table', [
            'contacts' => PhoneBook::latest()
                ->where( 'first_name', 'like', '%'.$this->search.'%')
                ->orWhere('last_name', 'like', '%'.$this->search.'%')
                ->orWhere('phone_number', 'like', '%'.$this->search.'%')
                ->paginate(5)
        ]);

    }
    protected $rules = [
        'first_name' => 'required|min:1',
        'last_name' => 'required|min:1',
        'phone_number' => 'required|min:10|max:15',
    ];
    public function mount($id)
    {
        $this->post = $id;
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function viewContact($id){
        $post = PhoneBook::find($id)->first();
        $this->post = $post;
        $this->first_name = $post->first_name;
        $this->last_name = $post->last_name;
        $this->phone_number = $post->phone_number;
        $this->emit('viewPost', $post);
    }

    public function viewBeforeDelete(PhoneBook $id){
        $post = PhoneBook::find($id)->first();
        $this->post = $post;
        $this->post_id = $post->id;
        $this->first_name = $post->first_name;
        $this->last_name = $post->last_name;
        $this->phone_number = $post->phone_number;
        $this->emit('viewPost', $post);
      }

    public function showPost(PhoneBook $id){
        $post = PhoneBook::find($id)->first();
        $this->post = $post;
        $this->post_id = $post->id;
        $this->first_name = $post->first_name;
        $this->last_name = $post->last_name;
        $this->phone_number = $post->phone_number;
        $this->emit('newPost', $post);
    }


    public function refreshOnUpdate($id)
    {

        $validatedData = $this->validate();
        $get_contact = PhoneBook::find($id)->first();

        PhoneBook::updateOrInsert(["id" => $id], $validatedData );
        $this->emitTo('phone-book.data-table', 'refreshOnUpdate');
        $this->modal_close = true;
        session()->flash('message', 'successfully updated .');
        return redirect('/')->back();


    }

    public function refreshOnDelete(PhoneBook $id)
    {

        $delete_contact = PhoneBook::find($id)->first();
        $delete_contact->delete(["id" => $delete_contact->$id]);
        $this->emitTo('phone-book.data-table','refreshOnDelete', $delete_contact->id);
        session()->flash('message', 'deleted data successfully !');
        // sleep(2);
        return redirect('/')->back();

    }


}