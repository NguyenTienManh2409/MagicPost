<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/admin.php');

    $db = new Db_api();
    $connect = $db->connect();

    $account = new Admin($connect);

    $data = json_decode(file_get_contents("php://input"));
    $account->Id = $data->id;

    if($account->delete_account_admin()) {
        return true;
    }
    else{
        echo json_encode(array("message","xoá tài khoản không thành công"));
    }

?>