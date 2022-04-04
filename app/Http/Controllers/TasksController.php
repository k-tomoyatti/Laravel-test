<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Task;

class TasksController extends Controller
{
    public function add(Request $request)
    {
        Task::addTask($request['task']);
        
        $response = [
            'task_name' => $request['task']
        ];
        return view('task', $response);
    }

    public function index()
    {
        $tasks = Task::getTasks();

        $response = [
            'tasks' => $tasks
        ];
        return view('index', $response);
    }

    public function delete(Request $request)
    {
        Log::debug($request);
        // Task::addTask($request['task']);
        
        // $response = [
        //     'task_name' => $request['task']
        // ];
        return view('index');
    }

}
