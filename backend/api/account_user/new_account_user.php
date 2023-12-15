<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/account_user.php');

    $db = new Db_api();
    $connect = $db->connect();

    $account = new Account_user($connect);

    $data = json_decode(file_get_contents("php://input"));
    $account->Ma_khach_hang = $data->user_code;
    $account->So_dien_thoai = $data->phone_number;
    $account->Email = $data->email;
    $account->Dia_chi = $data->address;
    $account->Ten_tai_khoan = $data->user_name;
    $account->Mat_khau = $data->password;
    if($account->new_account_user()) {
        return true;
    }
    else{
        echo json_encode(array("message","thêm tài khoản không thành công"));
    }
?>