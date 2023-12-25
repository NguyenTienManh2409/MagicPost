<?php 
	session_start();
	error_reporting(0);
	include('includes/config.php');
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
        <title>Leader</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
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
            <?php include_once("includes/sidebar-leader.php");?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Tài khoản trưởng điểm</h3>
								<ul class="breadcrumb">
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
						<div class="modal-dialog modal-dialog-centered modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add Employee</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form method="POST" id="addEmployee" enctype="multipart/form-data">
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Type <span class="text-danger">*</span></label>
													<input name="type" id="type" required class="form-control" type="text">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Full Name<span class="text-danger">*</span></label>
													<input name="full_name" id="full_name" required class="form-control" type="text">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Phone Number</label>
													<input name="phone_number" id="phone_number" required class="form-control" type="text">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Address</label>
													<input name="address" id="address" required class="form-control" type="text">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Employee code</label>
													<input name="employee_code" id="employee_code" required class="form-control" type="text">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Username <span class="text-danger">*</span></label>
													<input name="user_name"  id="user_name" required class="form-control" type="text">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Email<span class="text-danger">*</span></label>
													<input name="email" id="email" class="form-control" required class="form-control" type="email">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label class="col-form-label">Password<span class="text-danger">*</span></label>
													<input name="password" id="password" class="form-control" required class="form-control" type="password">
												</div>
											</div>
											<div class="col-sm-6">  
												<div class="form-group">
													<label class="col-form-label">Company Code<span class="text-danger">*</span></label>
													<input name="company_code" id="company_code" class="form-control">
												</div>
											</div>
										</div>
										
										<div class="submit-section">
											<button type="submit" name="add_employee" class="btn btn-primary submit-btn">Submitbackend/api/account/new_account.php</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<!-- Promotion Table -->
								<table class="table table-striped custom-table mb-0 datatable" id="accountTable">
									<thead>
										<tr>
										<th>ID</th>
										<th>Type</th>
										<th>Full Name</th>
										<th>Phone Number</th>
										<th>Address</th>
										<th>Employee Code</th>
										<th>User Name</th>
										<th>Email</th>
										<th>Password</th>
										<th>Company Code</th>
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
				
				<!-- Add Employee Modal -->
				<!-- /Add Employee Modal -->
				
				<!-- Edit Employee Modal -->
				<?php include_once("includes/modals/employee/edit_employee.php"); ?>
				<!-- /Edit Employee Modal -->
				
				<!-- Delete Employee Modal -->
				<?php include_once("includes/modals/employee/delete_employee.php"); ?>
				<!-- /Delete Employee Modal -->
			
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->
		
		<!-- api -->
		<script src="Controller/list_account_manager.js"></script>
		<script src="Controller/add_account.js"></script>
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
				
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>