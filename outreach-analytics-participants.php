<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<link rel="icon" href="#">

		<!-- Page Title -->
		<title>Byeah - Dahboard</title>

		<!-- Global CSS [ Bootstrap, Font-Awesome, Bootsreap Datepicker, Bootstrap Select ] -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

		<link href="assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
		<link href="assets/byeah-dashboard/byeah-dashboard.css" rel="stylesheet">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

		<!-- APP CSS -->
		<link rel="stylesheet" href="assets/css/app.min.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
		
		<!-- Page Wrapper -->
		<div id="wrapper">

			<!-- Navbar -->
			<?php include_once 'components/navbar.php'; ?>
			<!-- End Navbar -->
		
			<!-- Page Wrapper -->
			<!-- Start, page Desigen By Mustafa -->
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
										<small>What I Earn-Ell data</small>
									</h4>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="panel panel-default">
										<div class="panel-heading">Project Total</div>
										<div class="panel-body">
											<div class="row text-center">
												<div class="col-sm-4">
													<h6 class="text-muted">Target</h6>
													<h1>200</h1>
												</div>
												<div class="col-sm-4">
													<h6 class="text-muted">Achievement</h6>
													<h1>160</h1>
												</div>
												<div class="col-sm-4">
													<h6 class="text-muted">Deviation</h6>
													<h1 class="text-danger">-40</h1>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="panel panel-default">
										<div class="panel-heading">Yearly</div>
										<div class="panel-body">
											<div class="row text-center">
												<div class="col-sm-4">
													<h6 class="text-muted">Target</h6>
													<h1>100</h1>
												</div>
												<div class="col-sm-4">
													<h6 class="text-muted">Achievement</h6>
													<h1>75</h1>
												</div>
												<div class="col-sm-4">
													<h6 class="text-muted">Deviation</h6>
													<h1 class="text-danger">-25</h1>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="panel panel-default">
										<div class="panel-heading">Quaterly</div>
										<div class="panel-body">
											<div class="row text-center">
												<div class="col-sm-4">
													<h6 class="text-muted">Target</h6>
													<h1>25</h1>
												</div>
												<div class="col-sm-4">
													<h6 class="text-muted">Achievement</h6>
													<h1>30</h1>
												</div>
												<div class="col-sm-4">
													<h6 class="text-muted">Deviation</h6>
													<h1 class="text-success">+5</h1>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="panel panel-default">
										<div class="panel-heading">Monthly</div>
										<div class="panel-body">
											<div class="row text-center">
												<div class="col-sm-4">
													<h6 class="text-muted">Target</h6>
													<h1>7</h1>
												</div>
												<div class="col-sm-4">
													<h6 class="text-muted">Achievement</h6>
													<h1>8</h1>
												</div>
												<div class="col-sm-4">
													<h6 class="text-muted">Deviation</h6>
													<h1 class="text-success">+1</h1>
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
			<!-- End, page Desigen By Mustafa -->

		</div>

		<!-- End Page Wrapper -->

		<!-- Global JS [  jQuery, Bootstrap, Bootstrap Datepicker, Bootstrap Select ] -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

		<script type="text/javascript" src="assets/vendor/metisMenu/metisMenu.min.js"></script>
		<script type="text/javascript" src="assets/byeah-dashboard/byeah-dashboard.js"></script>

		<!-- APP JS -->
		<script type="text/javascript" src="assets/js/app.min.js"></script>

	</body>
</html>