<?php

        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');

        include_once('../../config/db.php');
        include_once('../../model/workplace.php');

        $db = new Db_api();
        $connect = $db->connect();

        $workplace = new Workplace($connect);

        $workplace->Id = isset($_GET['id']) ? $_GET['id'] : die();

        $workplace->show();

        $workplace_item = array(
            'id' => $workplace->Id,
            'company_code' => $workplace->Ma_don_vi,
            'zip_code' => $workplace->Ma_buu_chinh,
            'address' => $workplace->Dia_chi,
            'manager' => $workplace->Quan_ly
        );

        print_r(json_encode($workplace_item));

?>