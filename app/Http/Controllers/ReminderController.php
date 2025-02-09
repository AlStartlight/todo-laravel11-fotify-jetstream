<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use Illuminate\Http\Request;
use App\Models\Task;
class ReminderController extends Controller
{
    public function store(Request $request, $taskId)
{
    $validatedData = $request->validate([
        'reminder_time' => 'required|date',
        'reminder_type' => 'required|in:Email,Push Notification',
        'status' => 'required|in:Active,Inactive',
    ]);

    $validatedData['task_id'] = $taskId;

    $reminder = Reminder::create($validatedData);
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $task = Task::with('tags', 'subtasks', 'comments', 'reminders', 'attachments')
            ->where('user_id', auth()->id())
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

        $task = Task::where('user_id', auth()->id())->findOrFail($id);

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
        $task = Task::where('user_id', auth()->id())->findOrFail($id);

        // Hapus task dan detach semua tags yang terkait
        $task->tags()->detach();
        $task->delete();
    }

}
