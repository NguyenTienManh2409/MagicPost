<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/oder_status.php');

    $db = new Db_api();
    $connect = $db->connect();

    $status = new Status($connect);
    
    
    $data = json_decode(file_get_contents("php://input"));
    $status->Ma_nhan_vien = $data->employee_code;
    $read = $status->list_oder_where();
    $num = $read->rowCount();
    
    if($num>0) {
        $oder_status_array = [];
        $oder_status_array['list_oder_status'] = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $oder_status_item = array(
                'id' => $Id,
                'oder_code' => $Ma_don_hang,
                'status' => $Tinh_trang,
                'employee_code' => $Ma_nhan_vien,
                'receipt_time' => $Thoi_gian_nhan,
                'response_time' => $Thoi_gian_tra
            );
            array_push($oder_status_array['list_oder_status'],$oder_status_item);
        }
        echo json_encode($oder_status_array);
    }

?>