<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/account.php');
    include_once('../../model/oder_status.php');

    $db = new Db_api();
    $connect = $db->connect();

    $account = new Account($connect);
    $status = new Status($connect);
    
    
    $data = json_decode(file_get_contents("php://input"));
    $account->Ma_don_vi = $data->company_code;
    $read = $account->list_staff();
    $num = $read->rowCount();

    $account_array = [];
    if($num>0) {
        //$account_array[] = ;

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $account_array[] = $Ma_nhan_vien;
            
        }
        //echo json_encode($account_array);
    }

    foreach($account_array as $list) {
        $status->Ma_nhan_vien = $list;
        $go = $status->list_oder_where();
        $numb = $go->rowCount();
        if($numb>0) {
            $oder_status_array = [];
            $oder_status_array['list_oder_status'] = [];

            while($row = $go->fetch(PDO::FETCH_ASSOC)){
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
    }
?>