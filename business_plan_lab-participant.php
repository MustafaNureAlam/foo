<?php include_once 'components/html_start.php'; ?>

		
<!-- Page Wrapper -->
<div id="wrapper">

	<!-- Navbar -->
	<?php include_once 'components/navbar.php'; ?>
	<!-- End Navbar -->

	<!-- Page Wrapper -->
	<div id="page-wrapper">
		<div class="container-fluid">
			
			<br>

			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					
					<!-- Form - Mentoring club -->
					<form action="#" method="POST" autocomplete="off">
						<div class="panel panel-default">
							
							<div class="panel-heading">
								<h4>
									Business Plan Lab 
									<br>
									<small>
										What do You Want to do?
									</small>
								</h4>
							</div>

							<div class="panel-body">
								
								<div class="row">
									<div class="col-sm-1 form-group">
										<label>Login</label>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-2">
											<select name="" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%">
												<option value="0">Admin</option>
												<option value="1">Member</option>
											</select>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-3">
										<label>User Name:</label>
									</div>

									<div class="col-sm-5">
										<input name="#" type="text" class="form-control">
									</div>
								</div>

								<div class="row">
									<div class="col-sm-3">
										<label>Password:</label>
									</div>

									<div class="col-sm-5">
										<input name="#" type="password" class="form-control">
									</div>
								</div>
								
							</div>
							
							<div class="panel-footer text-center">
								<button type="submit" class="btn btn-sm btn-info">Sign-in</button>
							</div>
						</div>
					</form>
					<!-- End Form - Mentoring club -->
				</div>		
			</div>

		</div>
	</div>
	<!-- End Page Wrapper -->

</div>
<!-- End Page Wrapper -->

<?php include_once 'components/html_stop.php'; ?>