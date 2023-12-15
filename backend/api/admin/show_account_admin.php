<?php

        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');

        include_once('../../config/db.php');
        include_once('../../model/admin.php');

        $db = new Db_api();
        $connect = $db->connect();

        $account = new Admin($connect);

        $account->Id = isset($_GET['id']) ? $_GET['id'] : die();

        $account->show_one();

        $account_item = array(
            'id' => $account->Id,
            'full_name' => $account->Ho_ten,
            'user_name' => $account->Ten_tai_khoan,
            'phone_number' => $account->So_dien_thoai,
            'email' => $account->Email,
            'password' => $account->Mat_khau
        );

        print_r(json_encode($account_item));

?>