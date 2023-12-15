<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/account.php');

    $db = new Db_api();
    $connect = $db->connect();

    $account = new Account($connect);

    $data = json_decode(file_get_contents("php://input"));
    $account->Id = $data->id;
    $account->Vai_tro = $data->type;
    $account->Ho_ten = $data->full_name;
    $account->So_dien_thoai = $data->phone_number;
    $account->Dia_chi = $data->address;
    $account->Ma_nhan_vien = $data->employee_code;
    $account->Ten_tai_khoan = $data->user_name;
    $account->Email = $data->email;
    $account->Mat_khau = $data->password;
    $account->Ma_don_vi = $data->company_code;

    if($account->update_account()) {
        return true;
    }
    else{
        echo json_encode(array("message","cập nhật tài khoản không thành công"));
    }

?>