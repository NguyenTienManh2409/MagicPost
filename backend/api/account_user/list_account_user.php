<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/account_user.php');

    $db = new Db_api();
    $connect = $db->connect();

    $account = new Account_user($connect);

    $read = $account->read_info();
    $num = $read->rowCount();


    if($num>0) {
        $account_array = [];
        $account_array['user'] = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $account_item = array(
                'id' => $Id,
                'user_code' => $Ma_khach_hang,
                'phone_number' => $So_dien_thoai,
                'email' => $Email,
                'address' => $Dia_chi,
                'user_name' => $Ten_tai_khoan,
                'password' => $Mat_khau
            );
            array_push($account_array['user'],$account_item);
        }
        echo json_encode($account_array);
    }

?>