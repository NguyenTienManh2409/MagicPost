<?php

    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/account.php');

    $db = new Db_api();
    $connect = $db->connect();

    $account = new Account($connect);
    
    $roles = array("Giao dịch viên");

    $read = $account->read_info_role($roles);
    $num = $read->rowCount(); 

    if($num>0) {
        $account_array = [];
        $account_array['account_staff'] = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $account_item = array(
                'id' => $Id,
                'type' => $Vai_tro,
                'full_name' => $Ho_ten,
                'phone_number' => $So_dien_thoai,
                'address' => $Dia_chi,
                'employee_code' => $Ma_nhan_vien,
                'user_name' => $Ten_tai_khoan,
                'email' => $Email,
                'password' => $Mat_khau,
                'company_code' => $Ma_don_vi
            );
            array_push($account_array['account_staff'],$account_item);
        }
        echo json_encode($account_array);
    }

?>