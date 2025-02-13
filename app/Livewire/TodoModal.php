<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
class TodoModal extends Component
{
    use WithFileUploads;
    public $showModal = false;
    public $task_id, $title, $description,  $due_date;
    public $priority = 'Low'; 
    public $status = 'Not Started';
    protected $listeners = ['openModal'];//listerner buat panggil fungsi ini ke class view lain
    public $image;

    public function openModal(){
        $this->showModal =true;
    }
    public function closeModal(){
        $this->showModal=false;
    }
    public function resetInput()
{
    $this->title = '';
    $this->description = '';
    $this->priority = 'Low';
    $this->status = 'Not Started';
    $this->due_date = null;
}

    public function saveTask()
    {
        Log::info('Data sebelum disimpan:', [
            'user_id' => Auth::id(),
            'title' => $this->title,
            'description' => $this->description,
            'priority' => $this->priority,
            'status' => $this->status,
            'due_date' => $this->due_date,
        ]);
        // Validasi
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'priority'=>'required|in:Low,Medium,High',
            'status'=>'required|in:Not Started,In Progress,Complete',
            'due_date'=>'nullable|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);
        $imageName = $this->image->store('images', 'public');
        Task::create([
            'user_id'=>Auth::id(),
            'title'=>$this->title,
            'description' => $this->description,
            'priority'=>$this->priority,
            'status'=>$this->status,
            'due_date'=>$this->due_date,
            'image_path' => $imageName,
        ]);
       
        // Simpan ke database (contoh tanpa model)
        session()->flash('message', 'Task successfully added!');
    
        // Pastikan UI diperbarui setelah menyimpan
        $this->dispatch('taskAdded'); 
        $this->resetInput();
        // Reset input
        $this->closeModal();

    }
    public function render()
    {
        return view('livewire.todo-modal', [
            'tasks' => Task::all(),
        ]);
    }
}
