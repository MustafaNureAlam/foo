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
					
					<!-- Form - Loan panel review- show calender -->
					<form action="#" method="POST" autocomplete="off">
						<div class="panel panel-default">
							
							<div class="panel-heading">
								<h4>
									Timeline
								</h4>
							</div>

							<div class="panel-body">
								<div class="row">
									<div class="col-sm-3 form-group">
										<label>Form</label>
									</div>
									<div class="col-sm-3 form-group">
										<div class="input-group date">
											<div class="input-group-addon">
												<span class="fa fa-calendar"></span>
											</div>
											<input type="text" name="outreach_worshop_attended_date" placeholder="Date of Outreach Workshop Attended" class="form-control" data-provide="datepicker">
										</div>
									</div>
									<div class="col-sm-3 form-group">
										<label>Form</label>
									</div>
									<div class="col-sm-3 form-group">
										<div class="input-group date">
											<div class="input-group-addon">
												<span class="fa fa-calendar"></span>
											</div>
											<input type="text" name="outreach_worshop_attended_date" placeholder="Date of Outreach Workshop Attended" class="form-control" data-provide="datepicker">
										</div>
									</div>
								</div>
							</div>
							
							<div class="panel-footer text-center">
								<button type="submit" class="btn btn-sm btn-info">Show</button>
							</div>
						</div>
					</form>
					<!-- ######## -->

				</div>		
			</div>

		</div>
	</div>
	<!-- End Page Wrapper -->

</div>
<!-- End Page Wrapper -->

<?php include_once 'components/html_stop.php'; ?>