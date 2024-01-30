<?php 
    $todo_list = file_get_contents('todo-list.json');

    $list = json_decode($todo_list, true);

    if(isset($_POST['todoIndex'])){
        $index = $_POST['todoIndex'];

        if($list[$index]['done'] == true){
            $list[$index]['done'] = false;
        }
        else {
            $list[$index]['done'] = true;
        }

        file_put_contents('todo-list.json', json_encode($list));
    }

    if(isset($_POST['newTask'])){
        $newTask = $_POST['newTask'];

        $todo = [
            "text" => $newTask,
            "done" => false
        ];

        array_push($list, $todo);

        file_put_contents('todo-list.json', json_encode($list));
    }

    if(isset($_POST['todoIndexDelete'])){
        $index = $_POST['todoIndexDelete'];

        array_splice($list, $index, 1);

        file_put_contents('todo-list.json', json_encode($list));
    }

    header('Content-type: application/json');

    echo json_encode($list);
?>