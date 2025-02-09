<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
class TagController extends Controller
{
    public function index()
    {
        $tasks = Task::with('tags', 'subtasks', 'comments', 'reminders', 'attachments')->where('user_id', Auth::id())->get();
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create( Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'color' => 'nullable|string|max:7',
        ]);

        $validatedData['user_id'] = Auth::id();

        $tag = Tag::create($validatedData);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'priority' => 'required|in:Low,Medium,High',
            'status' => 'required|in:Pending,In Progress,Completed',
            'due_date' => 'nullable|date',
        ]);

        $validatedData['user_id'] = Auth::id();

        // Membuat task baru
        $task = Task::create($validatedData);

        // Jika ada tags, lampirkan ke task
        if ($request->has('tags')) {
            $task->tags()->attach($request->tags);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $task = Task::with('tags', 'subtasks', 'comments', 'reminders', 'attachments')
            ->where('user_id', Auth::id())
            ->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'priority' => 'sometimes|required|in:Low,Medium,High',
            'status' => 'sometimes|required|in:Pending,In Progress,Completed',
            'due_date' => 'nullable|date',
        ]);

        $task = Task::where('user_id', Auth::id())->findOrFail($id);

        $task->update($validatedData);

        // Update tags jika diberikan
        if ($request->has('tags')) {
            $task->tags()->sync($request->tags);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = Task::where('user_id', Auth::id())->findOrFail($id);

        // Hapus task dan detach semua tags yang terkait
        $task->tags()->detach();
        $task->delete();
    }
}
