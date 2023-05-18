<input type="checkbox" id="my-modal-007" class="modal-toggle" />
<div class="modal" data-theme="night">
<div class="modal-box relative">
    <h2 class="flex justify-start text-lg font-bold">Are you Sure, you want to delete? </h2>
    <label for="my-modal-007" class="btn btn-sm btn-circle absolute right-2 top-2 cursor-pointer">✕</label>
    <div class="card-body">
      <div class="form-control focus:border-ghost">

        <span class="btn gap-2 input input-bordered focus:border-base-400">
         <span class="text-xl text-white">{{ $first_name . ' '.$last_name }}</span>
          <div class="badge badge-primary bg-info-content">
            <span class="text-white">
              <span class="capitalize pr-2 ">phone:  {{ $phone_number }}</span>
            </span>
      </div>
        </span>

        </div>
        <div class="form-control mt-6 w-full btn-group btn-group-vertical lg:btn-group-horizontal  ">
          <div class="modal-action flex justify-end gap-32">
            <label for="my-modal-007" class="btn cursor-pointer hover:bg-info-content">Yay!, Cancel</label>
            <button id="btn-modal" for="my-modal" class="btn btn-error bg-error-focus cursor-pointer "
             wire:click.prevent="refreshOnDelete({{ $post_id  }})">
                   <span class="text-black font-bold ">Delete Record</span>
                </button>
              </div>

        </div>
      </div>
</div>
</div>
</div>
