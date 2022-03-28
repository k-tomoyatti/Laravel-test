<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Task;

class TasksController extends Controller
{
    public function add(Request $request)
    {
        // Log::debug($request);
        Task::addTask($request['task']);
        
        $response = [
            'task_name' => $request['task']
        ];
        return view('task', $response);
    }

    public function index()
    {
        Log::debug(1);
    }

}
