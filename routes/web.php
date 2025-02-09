<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SubtaskController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\AttachmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', TaskController::class);
Route::resource('tags', TagController::class);
Route::resource('subtasks', SubtaskController::class);
Route::resource('comments', CommentController::class);
Route::resource('reminders', ReminderController::class);
Route::resource('attachments', AttachmentController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
