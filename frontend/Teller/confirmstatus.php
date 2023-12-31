<?php 
	session_start();
	error_reporting(0);
	include_once('/MagicPost/backend/config/db.php');
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
								<h3 class="page-title" style="font-family: 'Times New Roman', sans-serif;">Xác nhân đơn hàng</h3>
							</div>
						</div>
					</div>
					<!-- Page Header -->
					
					<div class="modal-dialog modal-dialog-centered modal-lg" style="margin-top: -100px;">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Xác nhân đơn hàng</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST" id="OderToGatheringPoint" enctype="multipart/form-data">
									<div class="row">
                                        <div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">ID<span class="text-danger">*</span></label>
												<input id="id" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Mã đơn hàng<span class="text-danger">*</span></label>
												<input id="oder_code" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Tình trạng<span class="text-danger">*</span></label>
												<input id="status" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Mã nhân viên<span class="text-danger">*</span></label>
												<input id="employee_code" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Thời gian nhận<span class="text-danger">*</span></label>
												<input id="receipt_time" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Thời gian trả</label>
												<input id="response_time" required class="form-control" type="text">
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
		<script src="/MagicPost/Controller/update_status.js"></script>
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