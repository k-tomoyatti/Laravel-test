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

    <div class="task-table">
        <!-- <table  class="task-table" border="1">
        <thead>
            <tr>
                <th colspan="2">タスク名</th>
                <th colspan="2">     </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>        
                @foreach ($tasks as $task)
                <div>{{$task->name}}</div>
                @endforeach
                </td>
                <td>削除</td>
            </tr>
        </tbody>
        </table> -->
        

        @foreach ($tasks as $task)
                <div>{{$task->name}}</div>

        <form method= "post">
            <tr>
                <input type= "hidden" name= "id" value= "<?php echo $task["id"]; ?>">
                <td>
                    <input type="text" name="text" value=<?php echo $task["text"]; ?> task>
                </td>
                <td>
                    <?php echo $task["created_at"]; ?>
                </td>
                <td>
                    <button type="submit" name="update">更新する</button>
                </td>
                <td>
                    <button type="submit" name="delete">削除する</button>
                </td>
            </tr>
            @endforeach
        </form>
    </table>
    


    </div>




</body>
</html>