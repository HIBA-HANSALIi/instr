<?php
session_start();

if(!isset($_SESSION['name'])){
   header("location:login.php");
}

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- ================== END core-css ================== -->
</head>
<body>
	
	 <!-- BEGIN #loader  -->
	 <div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div> 
	 <!-- END #loader  -->

	 <!-- BEGIN #app  -->
	 <div id="app" class="app app-header-fixed app-sidebar-fixed">
		 <!-- BEGIN #header  -->
		<?php include("./includes/header.php"); ?>
		<!-- END #header -->
	
		<!-- BEGIN #sidebar -->
		<?php include("./includes/sidebar.php"); ?>
		<!-- END #sidebar -->
		
	
      <!-- BEGIN #content -->
		<div id="content" class="app-content">


			 <div class="ms-auto mb-3" >
				<button type="button" class="btn btn-dark btn-rounded px-4 rounded-pill w-100"class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-instrument"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> ajouter un instrument</button>
			</div>

            <?php if (isset($_SESSION['message'])): ?>
				<div class="alert alert-green alert-dismissible fade show">
				<strong>Success!</strong>
					<?php 
						echo $_SESSION['message']; 
						unset($_SESSION['message']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?>
			<!-- erreur -->
			<?php if (isset($_SESSION['error'])): ?>
				<div class="alert alert-red alert-dismissible fade show">
				<strong>Error!</strong>
					<?php 
						echo $_SESSION['error']; 
						unset($_SESSION['error']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?>

			<div class="row col-12 mx-auto mt-3">
			<!-- <div class="col-lg-4 col-md-6 col-sm-12"></div> -->
			 <?php 
			
			 @include("./script.php");
			 getInstrument(); ?>
			</div>


		</div>
		
		
	</div> -->
		<!-- END #content -->

	<!-- </div> --> 
				
	</div>
	<!-- END #app -->
	
	<!-- TASK MODAL -->
	
	<div class="modal fade" id="modal-instrument">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="script.php" method="POST" id="form_task" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Add Instrument</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing instrument Index  -->
							<div class="mb-3">
								<label class="form-label">Image</label>
								<input type="file" class="form-control" id="instrument_image" name="image"  data-parsley-required/>
							</div>
							<input type="hidden" id="instrument_id" name="instrument_id" value="">
							<div class="mb-3">
								<label class="form-label">Nom</label>
								<input type="text" class="form-control" id="instrument_title" name="nom"  data-parsley-required/>
							</div>
							
							
							<div class="mb-3">
								<label class="form-label">Categorie</label>
								<select class="form-select" id="instrument_categorie" name="categorie" data-parsley-required>
									<option value="">Please select</option>
									<option value="1">piano</option>
									<option value="2">guitare</option>
									
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Prix</label>
								<input type="number" step="0.50" min="0" class="form-control" id="instrument_prix" name="prix"  data-parsley-required/>
							</div>
							<div class="mb-3">
								<label class="form-label">Quantité</label>
								<input type="text" class="form-control" id="instrument_quantite" name="quantite"  data-parsley-required/>
							</div>
							
							
			
							<div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control" rows="10" id="instrument_description" name="description" ></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="delete" class="btn btn-danger task-action-btn" id="instrument-delete-btn">Delete</a>
						<button type="submit" name="update" class="btn btn-warning task-action-btn" id="instrument-update-btn">Update</button>
						<button type="submit" name="save" class="btn btn-primary task-action-btn" id="instrument-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	



	<!-- ================== BEGIN core-js ================== -->
	<script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	<script src="scripts.js"></script>
	<script src="parsley.js"></script>
	


</body>
</html>