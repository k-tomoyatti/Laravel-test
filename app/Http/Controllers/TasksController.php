<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TasksController extends Controller
{
    public function add(Request $request)
    {
        Log::debug($request);
        $response = [
            'task_name' => $request['task']
        ];
        return view('task', $response);
    }
}
