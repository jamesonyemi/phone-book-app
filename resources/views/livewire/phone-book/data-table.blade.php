<div class="text-center lg:text-left artboard artboard-horizontal phone-6 -top-6 m-2 flex-col space-y-5 justify-center items-center">
    <div class="form-control -mt-10 flex justify-center items-center mb-18 gap-4">
        <div class="input-group ">
          <input type="text" wire:model="search" placeholder="Search for contact by last name..." class="input input-bordered focus:border-gray focus:w-1/2 focus:rounded-full" />
        </div>
      </div>
    <div class="overflow-x-auto" wire:target='search' wire:loading.class.delay="opacity-50">
        <table class="table w-full flex gap-7 p-2 -mt-2 mb-2" >
          <!-- head -->
          @if (session()->has('message'))
          <div id="close" class="toast toast-top toast-end">
            <div class="alert alert-success">
              <div class="w-full text-light">
                <span>{{ session('message') }}</span>
              </div>
            </div>
          </div>
          @endif


          <thead>
            <tr>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
             @php
                $get_latest = DB::table("phone_books")->latest()->first();
             @endphp

            @forelse($contacts as $key => $contact)
            <tr>
              <th></th>
              <td>
                <span class="font-bold text-white capitalize text-xl">

                {!! $get_latest->id == $contact->id ? $get_latest->first_name . ' '. $get_latest->last_name . '<div class="mx-4 text-xs text-black badge bg-[#ff780b]">new</div>' : $contact->first_name. ' '. $contact->last_name !!}
                </span>
                <div class="text-white-100 flex w-1/5">
                    <span class="w-1/2 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                          </svg>

                        </span>
                       <span class="m-2 flex-none text-xs">
                        {{ $contact->phone_number }}
                    </span>
                </div>

            </td>

            <td>

                <th>

                    <div class="btn-group btn-group-vertical lg:btn-group-horizontal flex gap-4 pl-64">

                            <label for="my-modal"
                            wire:click.prefetch="showPost({{ $contact->id }})"
                             class="btn btn-active">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                              </svg>

                            </label>
                        <label for="my-modal-2" class="btn btn-accent hover:btn-accent hover:text-black"
                        wire:click.prefetch="viewContact([{{ $contact->id }} ])">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>
                          </label>
                        <label for="my-modal-007" class="btn btn-error hover:bg-red-400 hover:text-white"
                           wire:click.prefetch="viewBeforeDelete({{ $contact->id}})"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                              </svg>

                            </label>
                    </div>
                  </th>
            </td>
            </tr>
            @empty
                <div class="table w-full flex gap-7 mt-22 overflow-x-auto" >
                    <div class="flex justify-center item-center" data-theme="winter">
                        <span class="capitalize font-medium py-8 text-cool-gray-500 text-xl">No contact data found</span>
                    </div>
                </div>
            @endforelse
            @include('livewire.phone-book.edit_modal')
            @include('livewire.phone-book.view')
            @include('livewire.phone-book.view_before_delete_modal')
          </tbody>
        </table>

        {{ $contacts->links() }}
    </div>


</div>
