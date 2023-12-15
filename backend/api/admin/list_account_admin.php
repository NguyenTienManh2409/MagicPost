<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/admin.php');

    $db = new Db_api();
    $connect = $db->connect();

    $account = new Admin($connect);

    $read = $account->read_info();
    $num = $read->rowCount();


    if($num>0) {
        $account_array = [];
        $account_array['admin_account'] = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $account_item = array(
                'id' => $Id,
                'full_name' => $Ho_ten,
                'user_name' => $Ten_tai_khoan,
                'phone_number' => $So_dien_thoai,
                'email' => $Email,
                'password' => $Mat_khau
            );
            array_push($account_array['admin_account'],$account_item);
        }
        echo json_encode($account_array);
    }

?>