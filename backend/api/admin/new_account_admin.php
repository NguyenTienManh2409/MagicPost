<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/admin.php');

    $db = new Db_api();
    $connect = $db->connect();

    $account = new Admin($connect);

    $data = json_decode(file_get_contents("php://input"));
    $account->Ho_ten = $data->full_name;
    $account->Ten_tai_khoan = $data->user_name;
    $account->So_dien_thoai = $data->phone_number;
    $account->Email = $data->email;
    $account->Mat_khau = $data->password;
    if($account->new_account_admin()) {
        return true;
    }
    else{
        echo json_encode(array("message","thêm tài khoản không thành công"));
    }
?>