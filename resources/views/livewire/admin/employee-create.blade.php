<div class="modal>   <div class="modal-dialog">     <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    <form><div class="row g-2">
        <div class="form-floating col-md-3">
        <input type="text" wire:model="name" id="name" placeholder="Tuition Centre 100" class="form-control @error('email') is-invalid @enderror">
        <label for="name">Name</label> @error("name")<em class="help-block">{{ $message }}</em>@enderror
        </div>
        <div class="form-floating col-md-3">
        <input type="text" wire:model="email" id="email" placeholder="testing@email.com" class="form-control @error('email') is-invalid @enderror">
        <label for="email">Email</label> @error("email")<em class="help-block">{{ $message }}</em>@enderror
        </div>
        <div class="form-floating col-md-3">
        <input type="text" wire:model="password" id="password" placeholder="encrypted" class="form-control @error('password') is-invalid @enderror">
        <label for="password">Password</label> @error("password")<em class="help-block">{{ $message }}</em>@enderror
        </div>
        <div class="form-floating col-md-3">
          <select type="text" wire:model="job_type" id="job_type" aria-label="Select job_type" value="STA" class="form-select @error('job_type') is-invalid @enderror">
            <option value="">Select a Role</option>
            <option value="STA">Staff</option>
            <option value="LEC">Lecturer</option>
          </select>
          <label for="job_type">Role</label> @error("job_type")<em class="help-block">{{ $message }}</em>@enderror
        </div>
        <button wire:click.prevent="store()" class="btn btn-primary">Save</button>
        <button wire:click="closeModal()" class="btn btn-secondary">Cancel</button>
    </form>
    </div>
</div>
</div>