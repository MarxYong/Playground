<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        
      <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>
    
      <!-- This element is to trick the browser into centering the modal contents. -->
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
    
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        
        
        
        
        <form><div class="row g-2">
          <div class="form-floating col-md-3">
            <input type="text" wire:model="status" id="status" placeholder="Draft" class="form-control @error('status') is-invalid @enderror">
            <label for="status">Status</label> @error("status")<em class="help-block">{{ $message }}</em>@enderror
          </div>
          <div class="form-floating col-md-3">
            <input type="text" wire:model="code" id="code" placeholder="AOR3301" class="form-control @error('code') is-invalid @enderror">
            <label for="code">Code</label> @error("code")<em class="help-block">{{ $message }}</em>@enderror
          </div>
          <div class="form-floating col-md-3">
            <input type="text" wire:model="name" id="name" placeholder="Tuition Centre 100" class="form-control">
            <label for="name">Name</label>
          </div>
          <div class="form-floating col-md-3">
            <input type="text" wire:model="address_1" id="address_1" placeholder="No. 123" class="form-control @error('address_1') is-invalid @enderror">
            <label for="address_1">Address Line 1</label> @error("address_1")<em class="help-block">{{ $message }}</em>@enderror
          </div>
          <div class="form-floating col-md-3">
            <input type="text" wire:model="address_2" id="address_2" placeholder="Jalan Orkid Melur 4/1" class="form-control">
            <label for="address_2">Address Line 2</label>
          </div>
          <div class="form-floating col-md-3">
            <input type="text" wire:model="address_3" id="address_3" placeholder="Taman Selayang" class="form-control">
            <label for="address_3">Address Line 3</label>
          </div>
          <div class="form-floating col-md-3">
            <input type="text" wire:model="postcode" id="postcode" placeholder="47300" class="form-control @error('postcode') is-invalid @enderror">
            <label for="postcode">Postcode</label> @error("postcode")<em class="help-block">{{ $message }}</em>@enderror
          </div>
          <div class="form-floating col-md-3">
            <input type="text" wire:model="city" id="city" placeholder="Petaling Jaya" class="form-control @error('city') is-invalid @enderror">
            <label for="city">City</label> @error("city")<em class="help-block">{{ $message }}</em>@enderror
          </div>
          <div class="form-floating col-md-3">
            <input type="text" wire:model="state" id="state" placeholder="Selangor" class="form-control @error('state') is-invalid @enderror">
            <label for="state">State</label> @error("state")<em class="help-block">{{ $message }}</em>@enderror
          </div>
          {{-- Todo with country dropdown at first selection no be null --}}
          <div class="form-floating col-md-3">
            <select type="text" wire:model="country" id="country" aria-label="Select Country" value="MY" class="form-select @error('country') is-invalid @enderror">
              <option selected value="MY">Malaysia</option>
              <option value="SG">Singapore</option>
            </select>
            <label for="country">Country</label> @error("country")<em class="help-block">{{ $message }}</em>@enderror
          </div>
          <button wire:click.prevent="store()" class="btn btn-primary">Save</button>
          <button wire:click="closeModal()" class="btn btn-secondary">Cancel</button>
        </form>
      </div>
    </div>
  </div>
  