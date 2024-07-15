<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Classes;

#[Title('SMS | Classes Mangement')]
class ClassesManagement extends Component
{
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

    public function render()
    {
        return view('livewire.classes-management');
        // return view('livewire.classes-management',[
        //     'records' => Classes::all(),
        // ]);
    }
}