<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class EmployeeAdmin extends Component
{
    public $name, $email, $password, $job_type, $job_no, $status, $user_id;
    public $isOpen = 0;

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
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->job_type = '';
        $this->job_no = '';
        $this->status = 'Pending';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'job_type' => 'required',
            'status' => 'required',
        ]);
   
        User::updateOrCreate(['id' => $this->user_id], [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'job_type' => $this->job_type,
            // 'job_no' => $this->job_no,
            'job_no' => $this->user_id ? $this->job_no : NULL,
            'status' => $this->user_id ? $this->status : 'Pending',
        ]);
  
        session()->flash('message', 
            $this->user_id ? 'User Updated Successfully.' : 'User Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    
    public function approve($id)
    {
        // Find the user by ID
        $user = User::find($id);
        if ($user) {
            $user->job_no = $user->job_type. '-' . date('dH') . str_pad($user->id, 5, 0, STR_PAD_LEFT);
            $user->status = 'Active';
            $user->save();
        } else {
            // Error message (optional)
            session()->flash('error', 'User with ID: ' . $id . ' not found');
        }
    }

    public function reject($id)
    {
        // Find the user by ID
        $user = User::find($id);
        if ($user) {
            $user->status = 'Reject';
            $user->save();
        } else {
            // Error message (optional)
            session()->flash('error', 'User with ID: ' . $id . ' not found');
        }
    }

    public function delete(User $employeeId) {
        $employeeId-> delete();
    }

    public function render()
    {
        $employees = User::all();

        // Map job_type codes to human-readable labels
        $employees = $employees->map(function ($user) {
            switch ($user->job_type) {
                case 'STA':
                    $user->job_type = 'Staff';
                    break;
                case 'LEC':
                    $user->job_type = 'Lecturer';
                    break;
                default:
                    $user->job_type; // Keep original value
            }
            return $user;
        });

        return view('livewire.admin.employee-admin', [
            'employees' => $employees->except('1')->sortByDesc("updated_at"),
        ]);
    }
}
