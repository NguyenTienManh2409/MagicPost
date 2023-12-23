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
								<form method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Type <span class="text-danger">*</span></label>
												<input name="type" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Full Name<span class="text-danger">*</span></label>
												<input name="fullname" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Phone Number</label>
												<input name="phonenumber" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Address</label>
												<input name="address" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Employee code</label>
												<input name="employeecode" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Username <span class="text-danger">*</span></label>
												<input name="username" required class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Email<span class="text-danger">*</span></label>
												<input name="email" class="form-control" required class="form-control" type="email">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Password<span class="text-danger">*</span></label>
												<input name="password" class="form-control" required class="form-control" type="password">
											</div>
										</div>
										<div class="col-sm-6">  
											<div class="form-group">
												<label class="col-form-label">Company Code<span class="text-danger">*</span></label>
												<input name="companycode" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-form-label">Employee Picture</label>
												<input class="form-control" required name="picture" type="file">
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('add_employee').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission

            // Collect form data
            var formData = new FormData(this);

			formData.append('employee_code', '<?php echo $id; ?>');

            // Make AJAX request
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.success) {
                            // Handle success, e.g., show a success message
                            alert('Employee added successfully');
                        } else {
                            // Handle failure, e.g., show an error message
                            alert('Error adding employee: ' + response.message);
                        }
                    } else {
                        // Handle HTTP error
                        alert('Error: ' + xhr.statusText);
                    }
                }
            };
            xhr.open('POST', 'backend/api/account/new_account.php', true);
            xhr.send(formData);
        });
    });
</script>