<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function taks(){
        $this->belongsToMany(Task::class,'task_tags');
    }
    public function users(){
        $this->belongsTo(User::class);
    }
}
