<?php

use App\Models\PhoneBook;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\PhoneBook\Create;
use App\Http\Livewire\PhoneBook\DataTable;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// use Livewire\Component;
// class EntryPoint extends Component {

//     public $post;

//     public function mounted($id)
//     {
//         # code...
//         $this->post = PhoneBook::find($id);
//     }

//     public function showPost($id){
//         $post = Post::find($id);
//         $this->post = $post;
//         $this->emit('newPost', $post->id);
//       }
// }

Route::get('/', function (PhoneBook $id) {
    $id = $id;
    $get_contact = PhoneBook::find($id);
    // ddd($get_contact);
    return view('livewire.welcome', compact('get_contact'));
});
// Route::get('/edit/{id?}', \Create::class);

Route::get('/post/{id}', Create::class);

Route::get('/blog/{id}', function ($id) {$get_contact = PhoneBook::find($id); return view('livewire.phone-book.data-table', compact('id','get_contact') ); });