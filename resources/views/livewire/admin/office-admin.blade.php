<div class="w-100 p-3">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <div class="row g-2">
                <div class="form-floating col-md-10">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item active" aria-current="page">Office List</li>
                    </ol>
                  </nav></div>
                <div class="form-floating col-md-2">
                    <button wire:click="create()" class="btn btn-primary">Create New Location</button>
                </div>
            </div>
            @if($isOpen)
                {{-- Hello World --}}
                @include('livewire.admin.office-create')
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Code</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Address</th>
                        <th class="px-4 py-2">Postcode</th>
                        <th class="px-4 py-2">City</th>
                        <th class="px-4 py-2">State</th>
                        <th class="px-4 py-2">Country</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($locations as $location)
                    <tr>
                        <td class="border px-4 py-2">{{ $location->id }}</td>
                        <td class="border px-4 py-2">{{ $location->code }}</td>
                        <td class="border px-4 py-2">{{ $location->name }}</td>
                        <td class="border px-4 py-2">{{ $location->status }}</td>
                        <td class="border px-4 py-2">{{ $location->address_1 }} {{ $location->address_2 }} {{ $location->address_3 }}</td>
                        <td class="border px-4 py-2">{{ $location->postcode }}</td>
                        <td class="border px-4 py-2">{{ $location->city }}</td>
                        <td class="border px-4 py-2">{{ $location->state }}</td>
                        <td class="border px-4 py-2">{{ $location->country }}</td>
                        <td class="border px-4 py-2">
                        <button wire:click="edit({{ $location->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button wire:click="delete({{ $location->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</div>