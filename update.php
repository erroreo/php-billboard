<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
    include_once("server.php");

    $link = create_connection();
    $data = json_decode(file_get_contents("php://input"));
    
    $title = $data->title;
    $id = $data->id;
    $content = $data->content;

    $sql = "UPDATE `board` SET `content`='$content',`title`='$title' WHERE `id` = $id";
    $res = execute_sql($link,"billboard",$sql);
    if($res){
        echo json_encode(
            array('message' => 'Post Created')
          );
    }else{
        echo json_encode(
            array('message' => 'Post Not Created')
          );
    }
?>