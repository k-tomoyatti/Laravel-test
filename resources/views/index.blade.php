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
            <input class="add-btn" type="submit" name="add">
        </form>
    </div>
    <div class="tasks-table">
        <table>
            @foreach ($tasks as $task)
                <tr>
                    <form action="{{ url('/task/delete')}}" method="post">
                        {{ csrf_field() }}
                        <input type= "hidden" name= "id" value="{{ $task['id'] }}">
                        <td>
                            <input class="task-name" type="text" name="task-name" value="{{ $task['name'] }}">
                        </td>
                        <td>
                            <button>更新</button>
                        </td>
                        <td>
                            <input class="add-btn" type="submit" name="delete" value="削除">
                        </td>
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>