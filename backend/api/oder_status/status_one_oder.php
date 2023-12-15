<?php
    //show status theo mã đơn hàng
        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');

        include_once('../../config/db.php');
        include_once('../../model/oder_status.php');

        $db = new Db_api();
        $connect = $db->connect();

        $oder_status = new Status($connect);

        $data = json_decode(file_get_contents("php://input"));
        $oder_status->Ma_don_hang = $data->oder_code;
        $read = $oder_status->status_oder();
        $num = $read->rowCount();

        if($num>0) {
            $status_array = [];
            $status_array['status_list'] = [];

            while($row = $read->fetch(PDO::FETCH_ASSOC)){
                extract($row);

                $status_item = array(
                    'id' => $Id,
                    'oder_code' => $Ma_don_hang,
                    'status' => $Tinh_trang,
                    'employee_code' => $Ma_nhan_vien,
                    'receipt_time' => $Thoi_gian_nhan,
                    'response_time' => $Thoi_gian_tra
                );
                array_push($status_array['status_list'],$status_item);
            }
            echo json_encode($status_array);
        }
?>