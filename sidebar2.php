<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body style="margin:0%;padding:0%">

        <nav class="navbar navbar-light navbar-expand-lg  bg-light">
                <div class="container">
                    <a class="navbar-brand fw-bold">Musicaly store</a>
                        <ul class="navbar-nav ">
                            <li class="nav-item navbar-user dropdown">
                                    <!-- <a class="navbar-brand mx-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="https://th.bing.com/th/id/OIP.VC7tAzmWv36N_-DxTd2p0wAAAA?pid=ImgDet&rs=1" alt="" width="40" height="40">
                                        HIBA
                                    </a> -->
                                    <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                                        <img src="assets/img/user/user-9.jpg" alt="" /> 
                                        <span>
                                            <span class="d-none d-md-inline"></span>
                                            <b class="caret"></b>
                                        </span>
						           </a>
                                <!-- <ul class="dropdown-menu" style="left:-100px;position:absolute" aria-labelledby="dropdownMenuLink"> -->
                                <ul class="dropdown-menu dropdown-menu-end" style="position:absolute"  aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#"></a></li>
                                    <form action="script.php" method="POST" class="ps-4">
                                        <button class="btn btn-ligth main-btn rounded-3 ms-3" type="submit" name="logout">
                                          Log out
                                        </button>
                                    </form>
                                </ul>
                            </li>
                        </ul>
                </div>
        </nav>
    
            <div class="side" style="height:100vh ; width:10%; background:black;margin:0;padding:0; ">
                    <div class="menu-item text-white  ">
                                            <a href="index.php" class="menu-link d-flex ">
                                                <div class="menu-icon mb-3 mt-5">
                                                <i class="fa-solid fa-music  me-2"></i>
                                                </div>
                                                <div class="menu-text mt-5">Products</div>
                                            </a>
                                        </div>
                                        
                                        <div class="menu-item mb-3">
                                            <a href="Dashboard.php" class="menu-link d-flex">
                                                <div class="menu-icon">
                                                    <i class="fa fa-list-check  me-2"></i>
                                                </div>
                                                <div class="menu-text">Dashboard</div>
                                            </a>
                                        </div>

                                        

                        <div class="menu-item mb-3">
                            <a href="Dashboard.php" class="d-flex">
                            <div class="menu-icon">
                                    <i class="fa-solid fa-music  me-2"></i>
                                </div>
                                    <div class="menu-text">Products admin</div>
                            </a>
                        </div>


            </div> 
  
    



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>
    <!-- ================== END core-js =============  
</body>

</html>
