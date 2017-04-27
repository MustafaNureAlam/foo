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
										<input type="text" name="outreach_batch_number" placeholder="Outreach Batch Number" class="form-control">
									</div>

									<div class="col-sm-6 form-group">
										<input type="text" name="outreach_participant_number" placeholder="Participant Number" class="form-control">
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-6 form-group">
										<div class="input-group date">
											<div class="input-group-addon">
												<span class="fa fa-calendar"></span>
											</div>
											<input type="text" name="outreach_worshop_attended_date" placeholder="Date of Outreach Workshop Attended" class="form-control" data-provide="datepicker">
										</div>
									</div>

									<div class="col-sm-6 form-group">
										<select name="individual_assessment-enter_data" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%">
											<option>Pull Common data from previous</option>
											<option value="0">Yes</option>
											<option value="1">No</option>
										</select>
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
								<button type="reset" class="btn btn-sm btn-default">Clear form</button>
								<button type="submit" class="btn btn-sm btn-default">Preview</button>
								<button type="submit" class="btn btn-sm btn-info">Save</button>
							</div>
						</div>
					</form>
					<!-- End Form - Individual Assessment Data Entry -->
					
					<!-- Form Assesment Information -->
					<form action="#" method="POST" autocomplete="off">
						<div class="panel panel-default">
						
							<div class="panel-heading">
								<h4>
									Reports - Search <br>
									<small>Overall - Outreach Workshop</small>
								</h4>
							</div>

							<div class="panel-body">
								
								<div class="row">
									<div class="col-sm-6 form-group">

										<label for="age">Age</label>
										<select name="age" id="demographic_information" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
											<option value="0"> <18 yrs(0) </option>
											<option value="1">18-35</option>
											<option value="2"> <35 YRs (2) </option>
										</select>

									</div>

									<div class="col-sm-6 form-group">
										<label for="business_information">Underprivileged index</label>
										<select name="business_information" id="business_information" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
											<option value="0">Female(1)</option>
											<option value="1">Physically Handicapped(1)</option>
											<option value="2">Female Dominated Family(1)</option>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 form-group">

										<label for="skillset">Skillset</label>
										<select name="Skillset" id="program_information" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
											<option value="business_related_gov_regulation">Poor</option>
											<option value="profitable_business_ideas">Good(1)</option>
											<option value="profitable_business_ideas">Adequated(2)</option>
											<option value="profitable_business_ideas">Adept(3)</option>
										</select>

									</div>

									<div class="col-sm-6 form-group">
										<label for="eligibility_for_market_visit">Experience</label>
										<select name="experience" id="eligibility_for_market_visit" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%" multiple>
											<option value="0">No</option>
											<option value="1"><1 Year(1)</option>
											<option value="2"><2 Year(2)</option>
										</select>
									</div>
								</div>

							</div>

							<div class="panel-footer text-right">
								<button type="reset" class="btn btn-sm btn-default">Clear form</button>
								<button type="submit" class="btn btn-sm btn-default">Preview</button>
								<button type="submit" class="btn btn-sm btn-info">Save</button>
							</div>

						</div>
					</form>
					<!-- End Form Assessment Information -->

				</div>		
			</div>

		</div>
	</div>
	<!-- End Page Wrapper -->

</div>
<!-- End Page Wrapper -->

<?php include_once 'components/html_stop.php'; ?>