<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SectionsStatus extends Component
{
    public $section;


    public function mount($section)
    {
        $this->section = $section;
    }

    public function changeStatus($property)
    {
        $this->section->$property = !$this->section->$property;
        $this->section->save();
    }
    public function render()
    {
        return view('livewire.admin.sections-status');
    }
}
