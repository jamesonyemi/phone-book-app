<div>
    <div class="card-body">
        <div class="form-control">
          <label class="label">
            <span  class="label-text">First Name</span>
          </label>
          <input type="text" wire:model.lazy="first_name" placeholder="first name" class="input input-bordered" />
          @error('first_name') <span  class="text-red-400 mt-2">{{ $message }}</span> @enderror
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Last Name</span>
          </label>
          <input type="text"  wire:model.lazy="last_name" placeholder="last name" class="input input-bordered" />
          @error('last_name') <span class="text-red-400 mt-2">{{ $message }}</span> @enderror
        </div>
        <div class="form-control focus:border-ghost">
          <label class="label">
            <span class="label-text">Phone </span>
          </label>
          <input type="text"  wire:model.lazy="phone_number" maxlength="15" placeholder="phone or mobile number" class="input input-bordered focus:border-primary" />
          @error('phone_number') <span class="text-red-400 mt-2">{{ $message }}</span> @enderror
        </div>
        <div class="form-control mt-6">
          <button class="btn btn-primary" wire:click.prevent="refreshOnSave">
                 <span class="">Add Contact</span>
              </button>
        </div>
      </div>
</div>
