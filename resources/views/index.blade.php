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
            <input type="submit" name="add">
        </form>
    </div>

    <div>
        @foreach ($tasks as $task)
            <div>{{$task->name}}</div>
        @endforeach
    </div>



    <!-- <table>
    <thead>
        <tr>
            <th colspan="2">The table header</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>The table body</td>
            <td>with two columns</td>
        </tr>
    </tbody>
    </table> -->
</body>
</html>