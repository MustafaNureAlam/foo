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
					
					<!-- Form - Mentorship recruitment and registration -->
					<form action="#" method="POST" autocomplete="off">
						<div class="panel panel-default">
							
							<div class="panel-heading">
								<h4>
									Upload Mantor Profile  
									<br>
									<small>
										Please fill up the form to enter your data.
									</small>
								</h4>
							</div>

							<div class="panel-body">
								
								<!-- Program Information -->
								
								<div class="row">
									<div class="col-sm-6 form-group">
										<label>Eligibility for basic mantor:</label>
									</div>

									<div class="col-sm-6 form-group">
										<select name="individual_assessment-enter_data" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%">
											<option value="0">Yes</option>
											<option value="1">No</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 form-group">
										<label>Eligibility for Advanced mantor:</label>
									</div>

									<div class="col-sm-6 form-group">
										<select name="individual_assessment-enter_data" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%">
											<option value="0">Yes</option>
											<option value="1">No</option>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 form-group">
										<label>Name of recommender:</label>
									</div>

									<div class="col-sm-6 form-group">
										<input type="text" name="" class="form-control">
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-6 form-group">
										<label>Date:</label>
									</div>

									<div class="col-sm-6 form-group">
										<div class="input-group date">
											<div class="input-group-addon">
												<span class="fa fa-calendar"></span>
											</div>
											<input type="text" name="outreach_worshop_attended_date" placeholder="Date of Outreach Workshop Attended" class="form-control" data-provide="datepicker">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 form-group">
										<label>Name of Project Manager:</label>
									</div>

									<div class="col-sm-6 form-group">
										<input type="text" name="" class="form-control">
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 form-group">
										<label>Date:</label>
									</div>

									<div class="col-sm-6 form-group">
										<div class="input-group date">
											<div class="input-group-addon">
												<span class="fa fa-calendar"></span>
											</div>
											<input type="text" name="outreach_worshop_attended_date" placeholder="Date of Outreach Workshop Attended" class="form-control" data-provide="datepicker">
										</div>
									</div>
								</div>
							</div>
							
							<div class="panel-footer text-right">
								<button type="reset" class="btn btn-sm btn-default">Preview</button>
								<button type="submit" class="btn btn-sm btn-info">Save</button>
								<button type="submit" class="btn btn-sm btn-danger">Save and Exit</button>
							</div>
						</div>
					</form>
					<!-- End Form - Mentorship recruitment and registration -->

					<!-- Mentorship recruitment and registration Reports -->
					<form action="#" method="POST" autocomplete="off">
						<div class="panel panel-default">
							
							<div class="panel-heading">
								<h4>
									Reports  
									<br>
									<small>
										Please fill up the form to enter your data.
									</small>
								</h4>
							</div>

							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6 form-group">

										<label for="age">Demographic Information</label>
										<select name="age" id="demographic_information" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
											<option value="0"> Age </option>
											<option value="1">Gender</option>
											<option value="2">Education</option>
											<option value="2">NID</option>
											<option value="2">Location</option>
											<option value="2">Select All</option>
										</select>

									</div>

									<div class="col-sm-6 form-group">
										<label for="business_information">Business Information</label>
										<select name="business_information" id="business_information" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
											<option value="0">Type</option>
											<option value="1">No. of Employees</option>
											<option value="2">Bank Loan</option>
											<option value="2">Traning</option>
											<option value="2">Area of Interests</option>
											<option value="2">Select All</option>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 form-group">
										<label>Assessment Information</label>
										<select name="" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
											<option value="0">Skillset to implement the plan</option>
											<option value="0">Experience</option>
											<option value="0">Number of Competitor</option>
											<option value="0">Select All</option>
										</select>
									</div>

									<div class="col-sm-6 form-group">
										<label>Documentation Information</label>
										<select name="" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
											<option value="0">Availabity of Business Plan</option>
											<option value="0">Willingness for Support</option>
											<option value="0">Member of Associations</option>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 form-group">
										<label>Status</label>
										<select name="" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
											<option value="0">Selected for Basic Traning</option>
											<option value="0">Not Selected</option>
											<option value="0">Select All</option>
										</select>
									</div>

									<div class="col-sm-6 form-group">
										<label>Time</label>
										<div class="input-group date">
											<div class="input-group-addon">
												<span class="fa fa-calendar"></span>
											</div>
											<input type="text" name="outreach_worshop_attended_date" placeholder="Date of Outreach Workshop Attended" class="form-control" data-provide="datepicker">
										</div>
									</div>
								</div>
							</div>
							
							<div class="panel-footer text-right">
								<button type="reset" class="btn btn-sm btn-info">Generate</button>
							</div>
						</div>
					</form>
					<!-- End Form - Mentorship recruitment and registration Reports -->
					
					
				</div>		
			</div>

		</div>
	</div>
	<!-- End Page Wrapper -->

</div>
<!-- End Page Wrapper -->

<?php include_once 'components/html_stop.php'; ?>