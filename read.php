<?php
    include_once("server.php");
    $data = json_decode(file_get_contents("php://input"));
    echo $data;
    $link = create_connection();
    $sql = "SELECT * FROM board";
    $result = execute_sql($link,"billboard",$sql);
    $total_records = mysqli_num_rows($result);
    $comments = array();
    for($i = 0; $i < $total_records; $i++){
        $rows = mysqli_fetch_assoc($result);
        array_push($comments, array(
            "date" => $rows['date'],
            "message" => $rows['content'],
            "title" => $rows['title'],
            "id" => $rows['id']
        ));
    }
    
    echo json_encode($comments);
?>