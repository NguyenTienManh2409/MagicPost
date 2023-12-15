<?php

        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');

        include_once('../../config/db.php');
        include_once('../../model/content.php');

        $db = new Db_api();
        $connect = $db->connect();

        $content = new Content($connect);

        $content->Id = isset($_GET['id']) ? $_GET['id'] : die();

        $content->show_one();

        $content_item = array(
            'id' => $content->Id,
            'oder_code' => $content->Ma_don_hang,
            'product' => $content->Noi_dung,
            'quantity' => $content->So_luong,
            'denominations' => $content->Gia_tri,
            'proof' => $content->Giay_to_kem_theo
        );

        print_r(json_encode($content_item));

?>