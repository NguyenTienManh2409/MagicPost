<?php 
	session_start();
	error_reporting(0);
	include_once('includes/config.php');
	include_once('includes/functions.php');
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="robots" content="noindex, nofollow">
        <title>transactionPoint</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include_once("includes/header.php");?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <?php include_once("includes/sidebar-teller.php");?>
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
					
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="margin-top: -60px;">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Tạo đơn hàng cho khách hàng</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST" id="clientOrderForm">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Tên mặt hàng<span class="text-danger">*</span></label>
												<input name="name_item" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Mã đơn hàng</label>
												<input name="oder_code" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Người gửi<span class="text-danger">*</span></label>
												<input name="sender" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Mã khách hàng<span class="text-danger">*</span></label>
												<input name="user_code" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Sdt người gửi</label>
												<input name="sender_phone" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Địa chỉ gửi</label>
												<input name="sender_address" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">  
											<div class="form-group">
												<label class="col-form-label">Mã bưu chính gửi</label>
												<input name="sender_zip_code" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Người nhận</label>
												<input name="receiver" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Số điện thoại người nhận</label>
												<input name="receiver_phone" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Địa chỉ nhận</label>
												<input class="form-control" name="receiver_address" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Mã bưu chính nhận</label>
												<input class="form-control" name="receiver_zip_code" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Loại hàng</label>
												<input class="form-control" name="type" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Chỉ dẫn</label>
												<input class="form-control" name="instruction" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Ghi chú</label>
												<input class="form-control" name="note" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Cước phí</label>
												<input class="form-control" name="rates" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">COD</label>
												<input class="form-control" name="COD" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Khối lượng</label>
												<input class="form-control" name="mass" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Thời gian gửi</label>
												<input class="form-control" name="sending_time" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Thời gian hoàn thành</label>
												<input class="form-control" name="completion_time" required type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Quản lý công ty</label>
												<input class="form-control" name="management" required type="text">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button type="submit" name="add_client_order" class="btn btn-primary submit-btn">Submit</button>
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
		<script src="Controller/add_client_order.js"></script>
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>