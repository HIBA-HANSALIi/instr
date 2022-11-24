<?php
session_start();

if(!isset($_SESSION['name'])){
   header("location:login.php");
   
}


@include("./script.php");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>YouCode | Gestion des instruments de musique</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="style.css">

	<!-- ================== END core-css ================== -->
</head>
<body>
	<!-- BEGIN #loader -->
	<!-- <div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div> -->
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
		<!-- BEGIN #header -->
		<?php include("./includes/header.php"); ?>
		<!-- END #header -->
	    <?php include("./includes/sidebar.php"); ?>
		<!-- BEGIN #sidebar -->
		
		<!-- END #sidebar -->
		
	
      <!-- BEGIN #content -->
		<div id="content" class="app-content">
		

        
						<!-- <div class="row d-flex">
							<div class="w-100"> -->
								<div class="row d-flex justify-content-between">

										<div class="card col-12 col-md-6 col-lg-3 card-dash p-3 bg-transparent">
											<div class="card-body bg-white custome-card">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">admin</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="truck"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php  countAdmins(); ?></h1>
												<div class="mb-0">
													<span class="badge badge-primary-light"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>

										<div class="card col-12 col-md-6 col-lg-3 card-dash p-3 bg-transparent">
											<div class="card-body bg-white custome-card">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">instrument</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php  countInstruments(); ?></h1>
												<div class="mb-0">
													<span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
										<div class="card col-12 col-md-6 col-lg-3 card-dash p-3 bg-transparent">
											<div class="card-body bg-white custome-card">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">categories</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="dollar-sign"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php  countDashboard("categories"); ?></h1>
												<div class="mb-0">
													<span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
													<span class="text-muted">quantite</span>
												</div>
											</div>
										</div>
										<div class="card col-12 col-md-6 col-lg-3 card-dash p-3 bg-transparent">
											<div class="card-body bg-white custome-card">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Quantite</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="shopping-cart"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php countsumQu(); ?></h1>
												<div class="mb-0">
													<span class="badge badge-danger-light"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
								</div>
							<!-- </div>
						</div> -->
					



		</div>
		
		
	</div>
		<!-- END #content -->

	<!-- </div> --> 
				
	</div>
	<!-- END #app -->
	
	<!-- TASK MODAL -->
	
	
	
	



	<!-- ================== BEGIN core-js ================== -->
	<script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	<script src="scripts.js"></script>
	<script src="parsley.js"></script>
	


</body>
</html>