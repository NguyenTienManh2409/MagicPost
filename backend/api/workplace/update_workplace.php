<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/workplace.php');

    $db = new Db_api();
    $connect = $db->connect();

    $workplace = new Workplace($connect);

    $data = json_decode(file_get_contents("php://input"));
    $workplace->Id = $data->id;
    $workplace->Ma_don_vi = $data->company_code;
    $workplace->Ma_buu_chinh = $data->zip_code;
    $workplace->Dia_chi = $data->address;
    $workplace->Quan_ly = $data->manager;

    if($workplace->update()) {
        return true;
    }
    else{
        echo json_encode(array("message","cập nhật địa điểm không thành công"));
    }

?>