<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    public function store(Request $request, $taskId)
{
    $validatedData = $request->validate([
        'file_path' => 'required|string',
        'file_type' => 'required|string',
    ]);

    $validatedData['task_id'] = $taskId;

    $attachment = Attachment::create($validatedData);

}
}
