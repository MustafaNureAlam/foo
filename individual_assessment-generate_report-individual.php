<?php include_once 'components/html_start.php'; ?>
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
						
						<!-- Individuals Data Table -->
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Report - Individual <br> <small>Click to an individual list to get more details.</small></h4>
								</div>
								<div class="panel-body">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>ID No.</th>
												<th>Photograph</th>
												<th>Email</th>
												<th>Mobile number</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach (range(0, 500) as $i): ?>
												<tr>
													<td>#1</td>
													<td><img src="http://placehold.it/40x40" alt="X's Profile Image" class="img-sm-circle"></td>
													<td>example@email.com</td>
													<td>+88 XXX XX XX XX</td>
													<td>
														<div class="btn-group">
															<a href="#" class="btn btn-sm btn-default" data-toggle="modal" data-modalFor="outreach_individual_view" data-plugin="tooltip" title="View">
																<i class="fa fa-lg fa-eye"></i>
															</a>
															<a href="#" class="btn btn-sm btn-default" data-toggle="modal" data-modalFor="outreach_individual_edit" data-plugin="tooltip" title="Edit">
																<i class="fa fa-lg fa-edit"></i>
															</a>
															<a href="#" class="btn btn-sm btn-default" data-toggle="modal" data-modalFor="outreach_individual_delete" data-plugin="tooltip" title="Delete">
																<i class="fa fa-lg fa-trash"></i>
															</a>
														</div>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- End Individuals Data Table -->
	
					</div>
				</div>
			</div>
			<!-- End Page Wrapper -->

		</div>
		<!-- End Page Wrapper -->

<?php include_once 'components/html_stop.php'; ?>