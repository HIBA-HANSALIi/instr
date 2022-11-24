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

    <div id="header" class="app-header">
                <!-- BEGIN navbar-header -->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <!-- <span class="navbar-logo"></span>  -->
                    <b class="me-1">musicaly store</b></a>
                    <!-- <a href="index.php" class="navbar-brand"><b class="me-1">Library</b></a> -->
                    <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- END navbar-header -->
                <!-- BEGIN header-nav -->
                <div class="navbar-nav">
                    <!-- <div class="navbar-item navbar-form">
                        <form action="../script.php" method="POST" name="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter keyword" />
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    -->
                    
                    <div class="navbar-item navbar-user dropdown">
                            <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                                <img src="assets/img/user/user-9.jpg" alt="" /> 
                                <span>
                                    <span class="d-none d-md-inline">hi</span>
                                    <b class="caret"></b>
                                </span>
                            </a>
                        <div class="dropdown-menu dropdown-menu-end me-1">
                            <!-- <a href="javascript:;" class="dropdown-item" name="logout">Log Out</a> -->
                            
                            <!-- <a href="javascript:void(0)"  class="dropdown-item"
                                onclick="if(confirm('Are You sure to logout?')){document.querySelector('#logout').submit();} else {return false}"
                                id="logout-btn">
                                Log Out
                            </a> -->
                            <form action="script.php" method="POST" class="ps-4">
                                <button class="btn btn-light text-dark main-btn rounded-3 ms-3 bg-transparent border-0" type="submit" name="logout">
                                Log out
                                </button>
                            </form>
                        </div>
                        
                        <!-- <form action="script.php" method="post" class="d-none" id="logout" >
                            <input type="hidden" name="logout">
                        </form> -->
                    </div>
                </div>
                <!-- END header-nav -->
    </div>
		
		
    
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
