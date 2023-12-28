<?php 
	session_start();
	error_reporting(0);
	include_once('/MagicPost/backend/config/db.php');
	if(strlen($_SESSION['userlogin'])==0){
		header('location:/MagicPost/login.php');
	}
 
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="robots" content="noindex, nofollow">
        <title>Order</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/MagicPost/assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="/MagicPost/assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="/MagicPost/assets/css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="/MagicPost/assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="/MagicPost/assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="/MagicPost/assets/css/dataTables.bootstrap4.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="/MagicPost/assets/css/style.css">
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include_once("header.php");?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <?php include("sidebar-leader.php");?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Thống kê hàng hóa</h3>
								<ul class="breadcrumb">
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div >
								<!-- Promotion Table -->
								<table class="table table-striped custom-table mb-0 datatable" id="accountTable">
									<thead>
										<tr>
										<th>ID</th>
										<th>Tên mặt hàng</th>
										<th>Mã đơn hàng</th>
										<th>Người gửi</th>
										<th>Mã khách hàng</th>
										<th>Sdt người gửi</th>
										<th>Địa chỉ gửi</th>
										<th>Mã bưu chính gửi</th>
										<th>Người nhận</th>
										<th>Sdt người nhận</th>
										<th>Địa chỉ nhận</th>
										<th>Mã bưu chính nhận</th>
										<th>Loại hàng</th>
										<th>Chỉ dẫn</th>
                                        <th>Ghi chú</th>
                                        <th>Cước phí</th>
                                        <th>COD</th>
                                        <th>Khối lượng</th>
                                        <th>Thời gian gửi</th>
                                        <th>Thời gian hoàn thành</th>
                                        <th>Quản lý công ty</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
								<!-- /Promotion Table -->
								
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
			
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->
		
		<!-- api -->
		<script src="/MagicPost/Controller/list_order.js"></script>
		<!-- jQuery -->
        <script src="/MagicPost/assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="/MagicPost/assets/js/popper.min.js"></script>
        <script src="/MagicPost/assets/js/bootstrap.min.js"></script>
				
		<!-- Select2 JS -->
		<script src="/MagicPost/assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="/MagicPost/assets/js/moment.min.js"></script>
		<script src="/MagicPost/assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Datatable JS -->
		<script src="/MagicPost/assets/js/jquery.dataTables.min.js"></script>
		<script src="/MagicPost/assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Custom JS -->
		<script src="/MagicPost/assets/js/app.js"></script>

    </body>
</html>