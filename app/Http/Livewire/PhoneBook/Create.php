<?php
namespace App\Http\Livewire\PhoneBook;

use session;
use Livewire\Component;
use App\Models\PhoneBook;
use Livewire\WithPagination;


class Create extends Component
{
    use WithPagination;

    public $post;
    public $is_editable = false;
    // public $phoneId;

    public string $first_name = '';
    public string $last_name = '';
    public string $phone_number = '';

    // public $get_contact = 2222;

    protected $listeners = [
        'triggerEditOnClick' => '$refresh',
        'newPost',
    ];

    // public function getListeners()
    // {
    //     return [
    //         "triggerEditOnClick:{$this->phoneId}" => 'refresh',
    //     ];
    // }

    protected $rules = [
        'first_name' => 'required|min:1',
        'last_name' => 'required|min:1',
        'phone_number' => 'required|min:10|max:15',
    ];

    public function mount($id)
    {

      $this->post = PhoneBook::find($id);

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.phone-book.create',compact(['get_contact' => $this->post,

         'is_editable' => 1]) );
    }

    public function newPost(PhoneBook $id)
   {
       $post = PhoneBook::find($id)->first();
       $this->post = $post;
       return view('livewire.phone-book.edit_modal',['post' => $post]);
   }

    public function refreshOnSave()
    {
        $validatedData = $this->validate();
        PhoneBook::create($validatedData);
        $this->emit('refreshOnSave');
        $this->reset(['first_name','last_name', 'phone_number',]);


    }
}