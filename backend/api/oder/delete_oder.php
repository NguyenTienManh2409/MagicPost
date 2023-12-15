<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/oder.php');

    $db = new Db_api();
    $connect = $db->connect();

    $oder = new Oder($connect);

    $data = json_decode(file_get_contents("php://input"));
    $oder->Id = $data->id;

    if($oder->delete_oder()) {
        return true;
    }
    else{
        echo json_encode(array("message","xoá đơn hàng không thành công"));
    }

?>