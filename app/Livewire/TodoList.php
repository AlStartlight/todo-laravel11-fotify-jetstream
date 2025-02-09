<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public function openTodoModal(){
        $this->dispatch('openModal');
    }
    public function render()
    {
        return view('livewire.todo-list');
    }
}
