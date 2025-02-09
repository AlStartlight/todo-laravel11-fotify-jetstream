<?php

namespace App\Livewire;

use Livewire\Component;

class TaskStatus extends Component
{
    public $data;

    public function mount()
    {
        $this->data = [
            ["name" => "Completed", "value" => 84, "color" => "#16A34A"],
            ["name" => "In Progress", "value" => 46, "color" => "#1D4ED8"],
            ["name" => "Not Started", "value" => 13, "color" => "#DC2626"],
        ];
    }
    public function render()
    {
        return view('livewire.task-status');
    }
}
