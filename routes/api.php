<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SubtaskController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\AttachmentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('tasks', TaskController::class);
Route::apiResource('tasks.subtasks', SubtaskController::class);
Route::apiResource('tasks.comments', CommentController::class);
Route::apiResource('tasks.reminders', ReminderController::class);
Route::apiResource('tasks.attachments', AttachmentController::class);
Route::apiResource('tags', TagController::class);

