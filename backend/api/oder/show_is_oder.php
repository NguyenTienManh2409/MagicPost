<?php

        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');

        include_once('../../config/db.php');
        include_once('../../model/oder.php');

        $db = new Db_api();
        $connect = $db->connect();

        $oder = new Oder($connect);

        $oder->Id = isset($_GET['id']) ? $_GET['id'] : die();

        $oder->show_is();

        $oder_item = array(
            'id' => $oder->Id,
            'name_item' => $oder->Ten_mat_hang,
            'oder_code' => $oder->Ma_don_hang,
            'sender' => $oder->Nguoi_gui,
            'user_code' => $oder->Ma_khach_hang,
            'sender_phone' => $oder->Sdt_nguoi_gui,
            'sender_address' => $oder->Dia_chi_gui,
            'sender_zip_code' => $oder->Ma_buu_chinh_gui,
            'receiver' => $oder->Nguoi_nhan,
            'receiver_phone' => $oder->Sdt_nguoi_nhan,
            'receiver_address' => $oder->Dia_chi_nhan,
            'receiver_zip_code' => $oder->Ma_buu_chinh_nhan,
            'type' => $oder->Loai_hang,
            'instruction' => $oder->Chi_dan,
            'note' => $oder->Ghi_chu,
            'rates' => $oder->Cuoc_phi,
            'COD' => $oder->COD,
            'mass' => $oder->Khoi_luong,
            'sending_time' => $oder->Thoi_gian_gui,
            'completion_time' => $oder->Thoi_gian_hoan_thanh,
            'management' => $oder->Quan_ly_cong_ty
        );

        print_r(json_encode($oder_item));

?>