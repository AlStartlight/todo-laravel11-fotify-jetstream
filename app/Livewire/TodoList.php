<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TodoList extends Component
{
    public function openTodoModal(){
        $this->dispatch('openModal');
    }
    public function render()
    {
        return view('livewire.todo-list',[
            'tasks' => Task::orderBy('id','DESC')
            ->where('user_id', Auth::id())
            ->paginate(4),
            'task_complete'=>Task::orderBy('id','DESC')
            ->where('user_id', Auth::id())
            ->where('status','Complete')
            ->paginate(2)
        ]);
    }
}
