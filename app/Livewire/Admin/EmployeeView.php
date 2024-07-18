<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class EmployeeView extends Component
{
    public function mount($id) 
    {
        $this->user = User::findOrFail($id);
    }
    
    public function render()
    {
        return view('livewire.admin.employee-view');
    }
}
