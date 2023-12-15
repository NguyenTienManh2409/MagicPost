<?php
    //show 1 status dựa trên id
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');

        include_once('../../config/db.php');
        include_once('../../model/oder_status.php');

        $db = new Db_api();
        $connect = $db->connect();

        $oder_status = new Status($connect);

        $oder_status->Id = isset($_GET['id']) ? $_GET['id'] : die();

        $oder_status->show();

        $oder_status_item = array(
            'id' => $oder_status->Id,
            'oder_code' => $oder_status->Ma_don_hang,
            'status' => $oder_status->Tinh_trang,
            'employee_code' => $oder_status->Ma_nhan_vien,
            'receipt_time' => $oder_status->Thoi_gian_nhan,
            'response_time' => $oder_status->Thoi_gian_tra
        );

        print_r(json_encode($oder_status_item));

?>