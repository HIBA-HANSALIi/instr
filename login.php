
<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap Font Icon CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body class="overflow-hidden bgimage">
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card cardsignup border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <!-- <h2 class="card-title text-center mb-5 fw-light fs-5">Sign In</h2> -->
            <h5 class=" card-title text-uppercase fw-light text-center mb-5">Sign In</h5>


            <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Success!</strong>
					<?php 
						echo $_SESSION['message'];
            unset($_SESSION['message']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php endif ?>
			<!-- erreur -->
			<?php if (isset($_SESSION['error'])): ?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				
					<?php 
						echo $_SESSION['error']; 
						unset($_SESSION['error']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php endif ?>
            <form action="script.php" method="post" id="formIn">
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>


              <div class="form-floating mb-4">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="signin">Sign in</button>
              </div>
              
             <hr class="my-4">
             
             <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-dark"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-dark"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-dark"><i class="fab fa-google fa-lg"></i></a>
              </div> -->

             
               
              
            </form>
            <div>
              <p class="mb-0 mt-5 text-center">Don't have an account? <a href="signup.php" class=" fw-bold">Sign Up</a>
              </p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
    
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>