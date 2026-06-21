<?php

include "koneksi.php";

if(isset($_POST['add_task'])){

    $task = trim($_POST['task_text']);

    if($task == ""){
        header("Location: per4dan5.php#todo");
        exit();
    }

    mysqli_query(
        $conn,
        "INSERT INTO todos (task_text)
        VALUES ('$task')"
    );

    header("Location: per4dan5.php#todo");
    exit();
}

if(isset($_GET['delete'])){

    $id = $_GET['delete'];

    mysqli_query(
        $conn,
        "DELETE FROM todos WHERE id=$id"
    );

    header("Location: per4dan5.php#todo");
    exit();
}

?>