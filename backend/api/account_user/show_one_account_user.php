<?php

        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');

        include_once('../../config/db.php');
        include_once('../../model/account_user.php');

        $db = new Db_api();
        $connect = $db->connect();

        $account = new Account_user($connect);

        $account->Id = isset($_GET['id']) ? $_GET['id'] : die();

        $account->show_one();

        $account_item = array(
            'id' => $account->Id,
            'user_code' => $account->Ma_khach_hang,
            'phone_number' => $account->So_dien_thoai,
            'email' => $account->Email,
            'address' => $account->Dia_chi,
            'user_name' => $account->Ten_tai_khoan,
            'password' => $account->Mat_khau
        );

        print_r(json_encode($account_item));

?>