<?php 
	session_start();
	error_reporting(0);
	include('/MagicPost/backend/config/db.php');
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="robots" content="noindex, nofollow">
        <title>ClientOrder</title>
		
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
            <?php include_once("sidebar-teller.php");?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title" style="font-family: 'Times New Roman', sans-serif;">Ghi nhận đơn hàng</h3>
							</div>
						</div>
					</div>
					<!-- Page Header -->
					
					<div class="modal-dialog modal-dialog-centered modal-lg" style="margin-top: -60px;">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Tạo đơn hàng cho khách hàng</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST" id="clientOrderForm" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Tên mặt hàng<span class="text-danger">*</span></label>
												<input id="name_item" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Mã đơn hàng</label>
												<input id="oder_code" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Người gửi<span class="text-danger">*</span></label>
												<input id="sender" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Mã khách hàng<span class="text-danger">*</span></label>
												<input id="user_code" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Sdt người gửi</label>
												<input id="sender_phone" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Địa chỉ gửi</label>
												<input id="sender_address" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">  
											<div class="form-group">
												<label class="col-form-label">Mã bưu chính gửi</label>
												<input id="sender_zip_code" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Người nhận</label>
												<input id="receiver" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Số điện thoại người nhận</label>
												<input id="receiver_phone" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Địa chỉ nhận</label>
												<input class="form-control" id="receiver_address" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Mã bưu chính nhận</label>
												<input class="form-control" id="receiver_zip_code" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Loại hàng</label>
												<input class="form-control" id="type" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Chỉ dẫn</label>
												<input class="form-control" id="instruction" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Ghi chú</label>
												<input class="form-control" id="note" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Cước phí</label>
												<input class="form-control" id="rates" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">COD</label>
												<input class="form-control" id="COD" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Khối lượng</label>
												<input class="form-control" id="mass" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Thời gian gửi</label>
												<input class="form-control" id="sending_time" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Thời gian hoàn thành</label>
												<input class="form-control" id="completion_time" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Quản lý công ty</label>
												<input class="form-control" id="management" required type="text">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button type="submit" class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
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
		<script src="/MagicPost/Controller/add_client_order.js"></script>
		<script src="/MagicPost/Controller/print_order.js"></script>
		<!-- jQuery -->
        <script src="/MagicPost/assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="/MagicPost/assets/js/popper.min.js"></script>
        <script src="/MagicPost/assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="/MagicPost/assets/js/jquery.slimscroll.min.js"></script>
				
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