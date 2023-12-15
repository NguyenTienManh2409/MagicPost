<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/content.php');

    $db = new Db_api();
    $connect = $db->connect();

    $content = new Content($connect);

    $data = json_decode(file_get_contents("php://input"));
    $content->Id = $data->id;

    if($content->delete_content()) {
        return true;
    }
    else{
        echo json_encode(array("message","xoá nội dung không thành công"));
    }

?>