<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Task;

class TasksController extends Controller
{
    /**
     * タスク追加ボタン押下時の処理
     */
    public function add(Request $request)
    {
        // Modelでタスク登録処理
        Task::addTask($request['task']);

        // レスポンスデータの用意
        $response = [
            'task_name' => $request['task']
        ];

        // task.blade.phpを画面に表示。レスポンスデータも渡す。
        return view('task', $response);
    }

    /**
     * タスク一覧画面読み込み時
     */
    public function index()
    {
        // タスク一覧を取得
        $tasks = Task::getTasks();

        // レスポンスデータの用意
        $response = [
            'tasks' => $tasks
        ];

        // index.blade.phpを画面に表示。レスポンスデータも渡す。
        return view('index', $response);
    }

    /**
     * タスクの削除
     * 実装中
     */
    public function deleteTask($id)
    {
        // 削除するタスクのid。ログは要削除↓
        Log::debug($id);

        // TODO: Modelでタスクの削除

        // TODO: タスクの削除画面を表示
        return view('delete');
    }

}
