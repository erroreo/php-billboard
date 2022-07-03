<?php
    header('Access-Control-Allow-Origin: *');
    // header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
    include_once("server.php");
    $link = create_connection();
    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id;
    // echo json_encode(
    //     array('message' => $data->id)
    //   );
    // $id = $_GET['id'];
    $sql = "DELETE FROM `board` WHERE `id`= $id";
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