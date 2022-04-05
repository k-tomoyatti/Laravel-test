<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;


class Task extends Model
{
    use HasFactory;

    public static function addTask($task_name)
    {
        $task = new self();
        $task->name = $task_name;
        $task->save();
    }

    public static function getTasks()
    {
        return self::get();
    }

    public static function deleteTask($task_id)
    {
        self::where('id', $task_id)->delete();
    }
}