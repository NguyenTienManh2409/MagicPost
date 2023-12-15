<?php

        header('Access-Control-Allow-Origin:*');
        header('Content-Type: application/json');

        include_once('../../config/db.php');
        include_once('../../model/account.php');

        $db = new Db_api();
        $connect = $db->connect();

        $account = new Account($connect);

        $account->Id = isset($_GET['id']) ? $_GET['id'] : die();

        $account->show_one();

        $account_item = array(
            'id' => $account->Id,
            'type' => $account->Vai_tro,
            'full_name' => $account->Ho_ten,
            'phone_number' => $account->So_dien_thoai,
            'address' => $account->Dia_chi,
            'employee_code' => $account->Ma_nhan_vien,
            'user_name' => $account->Ten_tai_khoan,
            'email' => $account->Email,
            'password' => $account->Mat_khau,
            'company_code' => $account->Ma_don_vi
        );

        print_r(json_encode($account_item));

?>