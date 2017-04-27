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
							
						<!-- Form - Individual Assessment Data Entry -->
						<form action="#" method="POST" autocomplete="off">
							<div class="panel panel-default">
								
								<div class="panel-heading">
									<h4>
										Data Entry
										<br>
										<small>
											Please fill up the form to enter your data.
										</small>
									</h4>
								</div>

								<div class="panel-body">
									
									<!-- Program Information -->
									<label>Program Information</label>
									
										<div class="row">
											<div class="col-sm-6 form-group">
												<input type="text" name="individual_assessment_batch_no" placeholder="Individual Assessment Batch No." class="form-control">
											</div>

											<div class="col-sm-6 form-group">
												<input type="text" name="outreach_participant_number" placeholder="Participant Number" class="form-control">
											</div>
										</div>

										<div class="form-group">
											<div class="input-group date">
												<div class="input-group-addon">
													<span class="fa fa-calendar"></span>
												</div>
												<input type="text" name="outreach_worshop_attended_date" placeholder="Date of Outreach Workshop Attended" class="form-control" data-provide="datepicker">
											</div>
										</div>
									
									<!-- Demographic Information -->
									<label>Demographic Information</label>

									<div class="row">
										<div class="col-sm-6 form-group">
											<input type="text" name="name" placeholder="Full name" class="form-control">
										</div>
										<div class="col-sm-6 form-group">
											<input type="text" name="Business_name" placeholder="Business Name" class="form-control">
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6 form-group">
											<textarea name="present_address" class="form-control" placeholder="Present Address"></textarea>
										</div>
										<div class="col-sm-6 form-group">
											<textarea name="business_address" class="form-control" placeholder="Business Address"></textarea>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6 form-group">
											<input type="number" name="mobile_no" placeholder="Mobile Number" class="form-control">
										</div>
										<div class="col-sm-6 form-group">
											<input type="text" name="business_goal" placeholder="Business Goal" class="form-control">
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6 form-group">
											<input type="number" name="other_contact_no" placeholder="Othe Contact No" class="form-control">
										</div>
										<div class="col-sm-6 form-group">
											<input type="text" name="date_of_establishment" placeholder="Date Of Establishment" class="form-control">
										</div>
									</div>
								</div>
								
								<div class="panel-footer text-right">
									<button type="submit" class="btn btn-sm btn-info">Save</button>
									<button type="reset" class="btn btn-sm btn-default">Save And Exit</button>
								</div>
							</div>
						</form>
						<!-- End Form - Individual Assessment Data Entry -->
						
					</div>			
			</div>

		</div>
	</div>
	<!-- End Page Wrapper -->

</div>
<!-- End Page Wrapper -->

<?php include_once 'components/html_stop.php'; ?>