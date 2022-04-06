<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>to-doリスト</title>
</head>

<body>
    <header class="header">
        <h1 class="title">TODOリスト</h1>
    </header>
    <div class="add-task">
        <form action="{{ url('/task')}}" method="post">
            {{ csrf_field() }}
            <input type="text" class="input" placeholder="タスク名" name="task">
            <!-- <a href="" class="btn btn--red btn--radius btn--cubic">追加<i class="fas fa-angle-right fa-position-right"></i></a> -->
            <input class="submit-button cursor-pointer" type="submit" value="追加">
        </form>
    </div>
    <div class="tasks-table">
        <table>
            @foreach ($tasks as $task)
                <tr>
                    <td>
                        <input class="task-name" type="text" name="task-name" value="{{ $task['name'] }}">
                    </td>
                    <td>
                        <button>更新</button>
                    </td>
                    <td>
                        <form action="/task/{{ $task['id'] }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <input class="cursor-pointer" type="submit" value="削除">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <!-- {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!} -->
    </div>
</body>
</html> 