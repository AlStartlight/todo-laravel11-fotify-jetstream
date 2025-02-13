<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'priority', 'status', 'due_date','image_path'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function subtasks(){
        $this->hasMany(Subtask::class);
    }
    public function comments(){
        $this->hasMany(Comment::class);
    }
    public function reminders(){
        $this->hasMany(Reminder::class);
    }
    public function attachments(){
        $this->hasMany(Attachment::class);
    }
    public function tags(){
        $this->belongsToMany(Tag::class,'task_tags');
    }
}
