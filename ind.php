<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
<!-- Navbar -->
<nav
        id="main-navbar"
        class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
        >
        <!-- Container wrapper -->
        <div class="container-fluid">
        <!-- Toggle button -->
        <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#sidebarMenu"
                aria-controls="sidebarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
            <img src="./mus.png" height="40" alt="" loading="lazy" />
        </a>
        <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto">
            <input autocomplete="off" type="search" class="form-control rounded" placeholder='Search' style="min-width: 225px" />
            <span class="input-group-text border-0"
                ><i class="fas fa-search"></i
            ></span>
        </form>
        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row align-items-center">
            <li class="nav-item dropdown">
            <a
                class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
                >
                <i class="fas fa-bell"></i>
                <span class="badge rounded-pill badge-notification bg-danger"
                    >1</span
                >
            </a>
            <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
                >
                <li><a class="dropdown-item" href="#">#</a></li>
            </ul>
            </li>
            <!-- Avatar -->
            
            <li class="nav-item dropdown">
            <a
                class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center position-relative"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
                >
                <div class="d-inline-flex position-relative">
                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                    <img class="rounded-4 shadow-4" src="https://mdbootstrap.com/img/Photos/Avatars/man2.jpg" alt="Avatar" style="width: 30px; height: 30px;">
                </div>
                <div class="name p-2">
                   
                </div>
            </a>
            <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
                >
                <li><a class="dropdown-item" href="profil.php?id=<?php echo $_SESSION['id'];?>">My profile</a></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
            </li>
        </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    </header>
    <!--Main Navigation-->
    




    <!-- JavaScript Bundle with Popper -->
    <script src="script2.js"></script>
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>