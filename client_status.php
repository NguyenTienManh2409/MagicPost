<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="robots" content="noindex, nofollow">
        <title>Order</title>

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
                 <div class="header">
                <!-- Logo -->
                <div class="header-left">
                    <a href="/MagicPost/index.php" class="logo">
                        <img src="/MagicPost/assets/img/logo.png" width="40" height="40" alt="">
                    </a>
                </div>
                <!-- /Logo -->
                
                <a id="toggle_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                
                <!-- Header Title -->
                <div class="page-title-box">
                    <h3>MagicPost</h3>
                </div>
                <!-- /Header Title -->
                
                <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
                
                <!-- Header Menu -->
                <ul class="nav user-menu">
                    <!-- Search -->
                    <li class="nav-item" style="margin: 0; display: flex; align-items: center; justify-content: center;">
                        <div class="top-nav-search">
                            <a href="javascript:void(0);" class="responsive-search">
                                <i class="fa fa-search"></i>
                            </a>
                            <form action="search.php">
                                <input class="form-control" type="text" placeholder="Search here">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <!-- /Search -->               
                </ul>
                <!-- /Header Menu -->
            </div>
			<!-- /Header -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Tra cứu hàng hóa</h3>
								<ul class="breadcrumb">
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating" id="oder_code">
								<label class="focus-label">Mã đơn hàng</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<button class="btn btn-success btn-block" id="btnSearch">Tìm kiếm</button>
						</div>
    					</div>
					<!-- Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div >
								<!-- Promotion Table -->
								<table class="table table-striped custom-table mb-0 datatable" id="OrderTable">
									<thead>
										<tr>
										<th>ID</th>
										<th>Mã đơn hàng</th>
										<th>Tình trạng</th>
										<th>Mã nhân viên</th>
                                        <th>Thời gian nhận</th>
                                        <th>Thời gian trả</th>
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
		<script src="/MagicPost/Controller/client_status.js"></script>
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