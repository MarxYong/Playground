<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class EmployeeAdmin extends Component
{
    public function createEmployee() {
        $this->redirect('/admin/employee/new');
    }
    
    public function delete(User $employeeId) {
        $employeeId-> delete();
    }

    public function render()
    {
        return view('livewire.admin.employee-admin', [
            'employees' => User::all()->except('3'),
        ]);
    }
}
