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
					
					<!-- Form - Ell data-Enter data-Enter baseline data -->
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
										<input type="text" name="enter_baseline_data_batch_no" placeholder="Batch Number" class="form-control">
									</div>

									<div class="col-sm-6 form-group">
										<input type="text" name="enter_baseline_data_participant_no" placeholder="Participant Number" class="form-control">
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-6 form-group">
										<input type="text" name="enter_baseline_data_participant_name" placeholder="Participant's Name" class="form-control">
									</div>

									<div class="col-sm-6 form-group">
										<div class="input-group date">
											<div class="input-group-addon">
												<span class="fa fa-calendar"></span>
											</div>
											<input type="text" name="enter_baseline_data_date_of_entry" placeholder="Date of Entry" class="form-control" data-provide="datepicker">
										</div>
									</div>
								</div>
							</div>
							
							<div class="panel-footer text-right">
								<button type="reset" class="btn btn-sm btn-default">Insert Score</button>
								<button type="submit" class="btn btn-sm btn-info">Save</button>
								<button type="submit" class="btn btn-sm btn-danger">Save and Exit</button>
							</div>
						</div>
					</form>
					<!-- End Form -Ell data-Enter data-Enter baseline data -->
					
					<!-- Form Scoring Option -->
					<form action="#" method="POST" autocomplete="off">
						<div class="panel panel-default">
						
							<div class="panel-heading">
								<h4>
									Scoring Option <br>
								</h4>
							</div>

							<div class="panel-body">
								
								<div class="row">
									<div class="col-sm-6 form-group">
										<label for="age">Question 1</label>
									</div>

									<div class="col-sm-6 form-group">
										<select name="question_1" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%">
											<option value="0">1</option>
											<option value="1">2</option>
											<option value="1">3</option>
											<option value="1">4</option>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 form-group">
										<label for="age">Question 2</label>
									</div>

									<div class="col-sm-6 form-group">
										<select name="question_2" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%">
											<option value="0">1</option>
											<option value="1">2</option>
											<option value="1">3</option>
											<option value="1">4</option>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 form-group">
										<label for="age">Question 3</label>
									</div>

									<div class="col-sm-6 form-group">
										<select name="question_3" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%">
											<option value="0">1</option>
											<option value="1">2</option>
											<option value="1">3</option>
											<option value="1">4</option>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 form-group">
										<label for="age">Question 4</label>
									</div>

									<div class="col-sm-6 form-group">
										<select name="question_4" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%">
											<option value="0">1</option>
											<option value="1">2</option>
											<option value="1">3</option>
											<option value="1">4</option>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 form-group">
										<label for="age">Question 5</label>
									</div>

									<div class="col-sm-6 form-group">
										<select name="question_5" class="selectpicker show-tick show-menu-arrow form-control" data-width="100%">
											<option value="0">1</option>
											<option value="1">2</option>
											<option value="1">3</option>
											<option value="1">4</option>
										</select>
									</div>
								</div>

								
							</div>

							<div class="panel-footer text-right">
								<button type="reset" class="btn btn-sm btn-default">Calculate Score</button>
								<button type="submit" class="btn btn-sm btn-info">Save</button>
								<button type="submit" class="btn btn-sm btn-danger">Save and Exit</button>
							</div>

						</div>
					</form>
					<!-- End Form Scoring Option -->

					<!-- Categorized Score -->
					<form action="#" method="POST" autocomplete="off">
						<div class="panel panel-default">
						
							<div class="panel-heading">
								<h4>
									Categorized Scores <br>
								</h4>
							</div>

							<div class="panel-body">
								
								<div class="row">
									<div class="col-sm-6 form-group">
										<label for="age">Self Esteem and Efficacy</label>
									</div>

									<div class="col-sm-6 form-group">
										<h5>8</h5>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 form-group">
										<label for="age">Vision</label>
									</div>

									<div class="col-sm-6 form-group">
										<h5>7</h5>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 form-group">
										<label for="age">Hands on Approach</label>
									</div>

									<div class="col-sm-6 form-group">
										<h5>6</h5>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 form-group">
										<label for="age">Willingness to Learn</label>
									</div>

									<div class="col-sm-6 form-group">
										<h5>7</h5>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 form-group">
										<label for="age">Persistence</label>
									</div>

									<div class="col-sm-6 form-group">
										<h5>8</h5>
									</div>
								</div>

								
							</div>

							<div class="panel-footer text-right">
								<button type="reset" class="btn btn-sm btn-default">Proceed</button>
								<button type="submit" class="btn btn-sm btn-info">Save</button>
								<button type="submit" class="btn btn-sm btn-danger">Save and Exit</button>
							</div>

						</div>
					</form>
					<!-- End Categorized Score -->
				</div>		
			</div>

		</div>
	</div>
	<!-- End Page Wrapper -->

</div>
<!-- End Page Wrapper -->

<?php include_once 'components/html_stop.php'; ?>