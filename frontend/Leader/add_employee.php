<div id="add_employee" class="modal custom-modal fade" role="dialog">
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
						<button type="submit" name="add_employee" class="btn btn-primary submit-btn">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
