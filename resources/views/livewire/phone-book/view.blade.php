<input type="checkbox" id="my-modal-2" class="modal-toggle" />
<div class="modal" data-theme="night">
<div class="modal-box relative">
    <h2 class="flex justify-start text-lg font-bold">View contact info</h2>
    <label for="my-modal-2" class="btn btn-sm btn-circle absolute right-2 top-2 cursor-pointer">✕</label>
    <div class="card-body">
        <div class="form-control">
          <label class="label">
            <span class="label-text">First Name</span>
            <span class=""></span>
            <span readonly  class="text-2xl text-white input-bordered cursor-not-allowed" >{!! $first_name !!}</span>
        </label>


        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Last Name</span>
            <span readonly  class="text-2xl text-white input-bordered cursor-not-allowed" >{!! $last_name !!}</span>
          </label>

        </div>
        <div class="form-control focus:border-ghost">
          <label class="label">
            <span class="label-text">Phone </span>
            <span readonly  class="text-2xl text-white input-bordered cursor-not-allowed" >{!! $phone_number !!}</span>
          </label>

        </div>

      </div>
</div>
</div>
</div>
