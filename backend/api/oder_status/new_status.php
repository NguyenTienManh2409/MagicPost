<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/oder_status.php');

    $db = new Db_api();
    $connect = $db->connect();

    $oder_status = new Status($connect);

    $data = json_decode(file_get_contents("php://input"));
    $oder_status->Ma_don_hang = $data->oder_code;
    $oder_status->Tinh_trang = $data->status;
    $oder_status->Ma_nhan_vien = $data->employee_code;
    $oder_status->Thoi_gian_nhan = $data->receipt_time;
    $oder_status->Thoi_gian_tra = $data->response_time;
    if($oder_status->create()) {
        echo("thêm status");
        return true;
    }
    else{
        echo json_encode(array("message","thêm địa điểm không thành công"));
    }
?>