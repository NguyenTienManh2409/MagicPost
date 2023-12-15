<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/workplace.php');

    $db = new Db_api();
    $connect = $db->connect();

    $workplace = new Workplace($connect);

    $read = $workplace->read();
    $num = $read->rowCount();


    if($num>0) {
        $workplace_array = [];
        $workplace_array['list_workplace'] = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $workplace_item = array(
                'id' => $Id,
                'company_code' => $Ma_don_vi,
                'zip_code' => $Ma_buu_chinh,
                'address' => $Dia_chi,
                'manager' => $Quan_ly
            );
            array_push($workplace_array['list_workplace'],$workplace_item);
        }
        echo json_encode($workplace_array);
    }

?>