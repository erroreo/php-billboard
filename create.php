<?php
    header('Access-Control-Allow-Origin: *');
    // header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');
    include_once("server.php");
    $link = create_connection();

    $data = json_decode(file_get_contents("php://input"));
    
    echo json_encode(
        array('message' => $_POST['date'])
      );
    $title = $data->title;
    $date = $data->date;
    $content = $data->content;
    // echo $date;
    // echo $title;
    // echo $message;
    $sql = "INSERT INTO `board`(`date`, `content`, `title`) VALUES ('$date','$content','$title')";
    
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