<input type="checkbox" id="my-modal" class="modal-toggle" />
<div class="modal" data-theme="night">
<div class="modal-box relative">
    <h2 class="flex justify-start text-lg font-bold">Edit info</h2>
    <label for="my-modal" class="btn btn-sm btn-circle absolute right-2 top-2 cursor-pointer">✕</label>
    <div class="card-body">
        <div class="form-control">
          <label class="label">
            <span class="label-text">First Name</span>
        </label>
          <input name="first_name" value="{!! $first_name !!}" type="text" wire:model.dirty="first_name" placeholder="first name" class="input input-bordered" />
          @error('first_name') <span class="text-red-400 mt-2">{{ $message }}</span> @enderror
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Last Name</span>
          </label>
          <input name="last_name" value="{!! $last_name !!}" type="text"  wire:model.lazy="last_name" placeholder="last name" class="input input-bordered" />
          @error('last_name') <span class="text-red-400 mt-2">{{ $message }}</span> @enderror
        </div>
        <div class="form-control focus:border-ghost">
          <label class="label">
            <span class="label-text">Phone </span>
          </label>
          <input name="phone_number" value="{!! $phone_number !!}" type="text"  wire:model.lazy="phone_number" maxlength="15" placeholder="phone or mobile number" class="input input-bordered focus:border-primary" />
          @error('phone_number') <span class="text-red-400 mt-2">{{ $message }}</span> @enderror
        </div>
        <div class="form-control mt-6 ">
          <button id="btn-modal" for="my-modal" class="hover:bg-[#2de4bf]  btn btn-success cursor-pointer "
           wire:click.prevent="refreshOnUpdate({{ $post_id  }})">
                 <span class="text-white hover:text-[#ffffff] font-bold">Make Changes</span>
              </button>
        </div>
      </div>
</div>
</div>
</div>
