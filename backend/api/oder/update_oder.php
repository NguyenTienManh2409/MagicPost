<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/oder.php');

    $db = new Db_api();
    $connect = $db->connect();

    $oder = new Oder($connect);

    $data = json_decode(file_get_contents("php://input"));
    $oder->Id = $data->id;
    $oder->Ten_mat_hang = $data->name_item;
    $oder->Ma_don_hang = $data->oder_code;
    $oder->Nguoi_gui = $data->sender;
    $oder->Ma_khach_hang = $data->user_code;
    $oder->Sdt_nguoi_gui = $data->sender_phone;
    $oder->Dia_chi_gui = $data->sender_address;
    $oder->Ma_buu_chinh_gui = $data->sender_zip_code;
    $oder->Nguoi_nhan = $data->receiver;
    $oder->Sdt_nguoi_nhan = $data->receiver_phone;
    $oder->Dia_chi_nhan = $data->receiver_address;
    $oder->Ma_buu_chinh_nhan = $data->receiver_zip_code;
    $oder->Loai_hang = $data->type;
    $oder->Chi_dan = $data->instruction;
    $oder->Ghi_chu = $data->note;
    $oder->Cuoc_phi = $data->rates;
    $oder->COD = $data->COD;
    $oder->Khoi_luong = $data->mass;
    $oder->Thoi_gian_gui = $data->sending_time;
    $oder->Thoi_gian_hoan_thanh = $data->completion_time;
    $oder->Quan_ly_cong_ty = $data->management;

    if($oder->update_the_oder()) {
        return true;
    }
    else{
        echo json_encode(array("message","cập nhật đơn hàng không thành công"));
    }

?>