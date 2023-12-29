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
        <title>transactionPoint</title>

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/MagicPost/assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="/MagicPost/assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="/MagicPost/assets/css/line-awesome.min.css">
		
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
            <?php include_once("sidebar-leader.php");?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Nơi làm việc</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Department</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_department"><i class="fa fa-plus"></i> Add Department</a>
							</div>
						</div>
					</div>
					<!-- Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<!-- Promotion Table -->
								<table class="table table-striped custom-table mb-0 datatable" id="workplace">
									<thead>
										<tr>
											<th>Id</th>
											<th>Mã đơn vị</th>
											<th>Mã bưu chính</th>
											<th>Địa chỉ</th>
											<th>Quản lý</th>
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
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->
		
		<!-- api -->
        <script src="/MagicPost/Controller/list_workplace.js"></script>

		<!-- jQuery -->
        <script src="/MagicPost/assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="/MagicPost/assets/js/popper.min.js"></script>
        <script src="/MagicPost/assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="/MagicPost/assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Datatable JS -->
		<script src="/MagicPost/assets/js/jquery.dataTables.min.js"></script>
		<script src="/MagicPost/assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Custom JS -->
		<script src="/MagicPost/assets/js/app.js"></script>
		
    </body>
</html>