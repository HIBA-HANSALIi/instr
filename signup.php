<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css"> 

<!-- BEGIN parsley css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
<!-- END parsley css-->
</head>

<body class="overflow-hidden bgimage">
<section class="vh-100 bg-image">
  <!-- style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');"> -->
  
 
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card bg-white text-dark" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h5 class="text-uppercase fw-light text-center mb-5">Create an account</h5>
              

              <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong class="bg-primary">Success!</strong>
                  <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                  ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif ?>
			<!-- erreur -->
			<?php if (isset($_SESSION['error'])): ?>
				<div class="alert alert-danger alert-dismissible fade show">
				
					<?php 
						echo $_SESSION['error']; 
						unset($_SESSION['error']);
            
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?>
      <!-- err -->


              <form action="script.php" method="post" id="formUp" data-parsley-validate>
              

                <div class="form-floating mb-4">
                  <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" placeholder="Your Name" required/>
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-floating mb-4">
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="Your Email" required/>
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-floating mb-4">
                  <input type="password"  name="password" id="form3Example4cg" class="form-control form-control-lg" placeholder="Password" required/>
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-floating mb-4">
                  <input type="password" name="cpasseword" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Repeat your password" required/>
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

              

                <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="signup">Register</button>
              </div>

                <p class="text-center mt-4 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold "><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
 
    
</section>
    
</body>

<!-- BEGIN jquery js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END jquery js-->

    <!-- BEGIN parsley js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END parsley js-->


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>