<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class EmployeeCreate extends Component
{
    public $name = 'hello world';
    public $email = 'hello@gmail.com';
    public $password = '123456789';
    public $job_type = 'Super Admin';

    // protected $rules = [
        // 'name' => ['required', 'string', 'max:255'],
        // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        // 'password' => ['required', 'string', 'min:8', 'confirmed'],
    // ];

    public function save()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        // try {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'job_type' => $this->job_type,
                'password' => Hash::make($this->password),
            ]);
        //     session()->flash('success','User Created Successfully!!');
        //     $this->resetFields();
        //     $this->addPost = false;
        // } catch (\Exception $ex) {
        //     session()->flash('error','Something goes wrong!!');
        // }
    }

    public function render()
    {
        return view('livewire.admin.employee-create');
    }
}
