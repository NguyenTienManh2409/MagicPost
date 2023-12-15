<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/oder.php');

    $db = new Db_api();
    $connect = $db->connect();

    $oder = new Oder($connect);

    $read = $oder->read_info();
    $num = $read->rowCount();


    if($num>0) {
        $oder_array = [];
        $oder_array['oder_info'] = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $oder_item = array(
                'id' => $Id,
                'name_item' => $Ten_mat_hang,
                'oder_code' => $Ma_don_hang,
                'sender' => $Nguoi_gui,
                'user_code' => $Ma_khach_hang,
                'sender_phone' => $Sdt_nguoi_gui,
                'sender_address' => $Dia_chi_gui,
                'sender_zip_code' => $Ma_buu_chinh_gui,
                'receiver' => $Nguoi_nhan,
                'receiver_phone' => $Sdt_nguoi_nhan,
                'receiver_address' => $Dia_chi_nhan,
                'receiver_zip_code' => $Ma_buu_chinh_nhan,
                'type' => $Loai_hang,
                'instruction' => $Chi_dan,
                'note' => $Ghi_chu,
                'rates' => $Cuoc_phi,
                'COD' => $COD,
                'mass' => $Khoi_luong,
                'sending_time' => $Thoi_gian_gui,
                'completion_time' => $Thoi_gian_hoan_thanh,
                'management' => $Quan_ly_cong_ty
            );
            array_push($oder_array['oder_info'],$oder_item);
        }
        echo json_encode($oder_array);
    }

?>