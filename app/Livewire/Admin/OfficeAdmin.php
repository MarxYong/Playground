<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Location;

class OfficeAdmin extends Component
{
    public $code, $name, $status, $address_1, $address_2, $address_3, $postcode, $city, $state, $country, $location_id;
    public $isOpen = 0;
    
    public function render()
    {
        return view('livewire.admin.office-admin', [
            'locations' => Location::all()->sortByDesc("updated_at")
        ]);
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->code = '';
        $this->name = '';
        $this->status = '';
        $this->address_1 = '';
        $this->address_2 = '';
        $this->address_3 = '';
        $this->postcode = '';
        $this->city = '';
        $this->state = '';
        $this->country = '';
        $this->location_id = '';
    }

    public function store()
    {
        // Todo with validation on duplicate code
        $this->validate([
            'code' => 'required',
            // 'name' => 'required',
            'status' => 'required',
            'address_1' => 'required',
            // 'address_2' => 'required',
            // 'address_3' => 'required',
            'postcode' => 'required | max:5',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            // 'location_id' => 'required',
        ]);
   
        Location::updateOrCreate(['id' => $this->location_id], [
            'code' => $this->code,
            'name' => $this->name,
            'status' => $this->status,
            'address_1' => $this->address_1,
            'address_2' => $this->address_2,
            'address_3' => $this->address_3,
            'postcode' => $this->postcode,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
        ]);
  
        session()->flash('message', 
            $this->location_id ? 'Location Updated Successfully.' : 'Location Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $location = Location::findOrFail($id);
        $this->location_id = $id;
        $this->code = $location->code;
        $this->name = $location->name;
        $this->status = $location->status;
        $this->address_1 = $location->address_1;
        $this->address_2 = $location->address_2;
        $this->address_3 = $location->address_3;
        $this->postcode = $location->postcode;
        $this->city = $location->city;
        $this->state = $location->state;
        $this->country = $location->country;
    
        $this->openModal();
    }
    
    public function delete($id)
    {
        Location::find($id)->delete();
        session()->flash('message', 'Location Deleted Successfully.');
    }
}