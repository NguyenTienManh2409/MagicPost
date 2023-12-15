<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/content.php');

    $db = new Db_api();
    $connect = $db->connect();

    $content = new Content($connect);

    $read = $content->read_info();
    $num = $read->rowCount();


    if($num>0) {
        $content_array = [];
        $content_array['content_list'] = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $content_item = array(
                'id' => $Id,
                'oder_code' => $Ma_don_hang,
                'product' => $Noi_dung,
                'quantity' => $So_luong,
                'denominations' => $Gia_tri,
                'proof' => $Giay_to_kem_theo
            );
            array_push($content_array['content_list'],$content_item);
        }
        echo json_encode($content_array);
    }

?>