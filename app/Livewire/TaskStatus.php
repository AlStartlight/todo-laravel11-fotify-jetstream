<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskStatus extends Component
{
    public $data;

    public function mount()
    {
        $task_count = Task::where('user_id', Auth::id())->count();

        // Hitung jumlah task berdasarkan status
        $completed = Task::where('user_id', Auth::id())
        ->where('status', 'Complete')
        ->count();
        $in_progress = Task::where('user_id', Auth::id())
        ->where('status', 'In Progress')->count();
        $not_started = Task::where('user_id', Auth::id())
        ->where('status', 'Not Started')->count();

        // Menghitung persentase untuk masing-masing status
        $completed_percentage = ($task_count > 0) ? 
        ($completed / $task_count) * 100 : 0;
        $in_progress_percentage = ($task_count > 0) ? 
        ($in_progress / $task_count) * 100 : 0;
        $not_started_percentage = ($task_count > 0) ?
         ($not_started / $task_count) * 100 : 0;
        $this->data = [
            ["name" => "Completed", "value" => $completed_percentage,
            "total"=>$completed, "color" => "#16A34A"],
            ["name" => "In Progress", "value" =>  $in_progress_percentage,
            "total"=>$in_progress, "color" => "#1D4ED8"],
            ["name" => "Not Started", "value" => $not_started_percentage, 
            "total"=>$not_started,"color" => "#DC2626"],
        ];
    }
    public function render()
    {
        return view('livewire.task-status');
    }
}
