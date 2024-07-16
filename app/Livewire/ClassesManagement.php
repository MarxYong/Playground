<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Classes;

#[Title('SMS | Classes Mangement')]
class ClassesManagement extends Component
{
    public $status = '';
    public $class_name = '';
    public $class_description = '';
    public $class_section = '';
    public $class_room = '';
    public $class_subject = '';
 
    public function save()
    {
        Classes::create(
            $this->only(['status', 'class_name', 'class_description', 'class_section', 'class_room', 'class_subject'])
        );
 
        session()->flash('status', 'Post successfully updated.');
 
        $this->redirect('/');
    }

    public $records;
    public $id = 0;
    // Fetch record by ID
    public function fetchbyid(){
        $this->records = Classes::orderby('id','asc')
                         ->select('*')
                         ->where('id',$this->id)
                         ->get(); 
   }

   // Fetch all records
    public function fetchall(){
        $this->records = Classes::orderby('id','asc')->select('*')->get(); 
    }

    public function mount(){
        $this->records = Classes::all();
    }
    
    public function render()
    {
        return view('livewire.classes-management');
        // return view('livewire.classes-management',[
        //     'records' => Classes::all(),
        // ]);
    }
}