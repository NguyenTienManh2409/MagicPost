<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/content.php');

    $db = new Db_api();
    $connect = $db->connect();

    $content = new Content($connect);

    $data = json_decode(file_get_contents("php://input"));
    $content->Ma_don_hang = $data->oder_code;
    $content->Noi_dung = $data->product;
    $content->So_luong = $data->quantity;
    $content->Gia_tri = $data->denominations;
    $content->Giay_to_kem_theo = $data->proof;
    if($content->new_content()) {
        return true;
    }
    else{
        echo json_encode(array("message","nội dung không thành công"));
    }
?>