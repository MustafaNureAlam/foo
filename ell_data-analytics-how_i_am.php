<?php include_once 'components/html_start.php'; ?>
<style>
	label{height: 40px;}
</style>
		<!-- Page Wrapper -->
		<div id="wrapper">

			<!-- Navbar -->
			<?php include_once 'components/navbar.php'; ?>
			<!-- End Navbar -->
		
			<!-- Page Wrapper -->
			<div id="page-wrapper">
				<div class="container-fluid">
					<div class="row">
						
						<br>

						<div class="col-sm-12">
							
							<!-- Analytic Report  -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>
										Analytics
										<br> 
										<small>How I Am -Ell data</small>
									</h4>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="panel panel-default">
										<div class="panel-body">
											<div class="row text-center">
												<div class="col-sm-4">
													<label>Baseline Score</label>
													<h1>28</h1>
												</div>
												<div class="col-sm-4">
													<label>Midline Score</label>
													<h1>45</h1>
												</div>
												<div class="col-sm-4">
													<label>Variance With Baseline</label>
													<h1 class="text-success">+17</h1>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="panel panel-default">
										<div class="panel-body">
											<div class="row text-center">
												<div class="col-sm-4">
													<label>Ending Score</label>
													<br>
													<h1>40</h1>
												</div>
												<div class="col-sm-4">
													<label>Variance With Baseline</label>
													<h1 class="text-success">+12</h1>
												</div>
												<div class="col-sm-4">
													<label>Variance With Midline</label>
													<h1 class="text-danger">-5</h1>
												</div>
											</div>
										</div>
									</div>
								</div>

								
							</div>

							<div class="row">
								<div class="col-sm-12">
									<div class="well well-sm text-center">
										<div class="btn-group">
											<button type="button" class="btn btn-sm btn-default">Share</button>
											<button type="button" class="btn btn-sm btn-default">Print</button>
											<button type="button" class="btn btn-sm btn-default">Download</button>
										</div>
									</div>
								</div>
							</div>

							<!-- End Analytic Report  -->

						</div>
					</div>
				</div>
			</div>
			<!-- End Page Wrapper -->

		</div>

		<!-- End Page Wrapper -->

<?php include_once 'components/html_stop.php'; ?>