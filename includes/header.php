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
				<div class="navbar-item navbar-user dropdown">
						<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
							<img src="assets/img/user/user-9.jpg" alt="" /> 
							<span>
								<span class="d-none d-md-inline"><?php echo $_SESSION["name"]; ?></span>
								<b class="caret"></b>
							</span>
						</a>
					<div class="dropdown-menu dropdown-menu-end me-1">
						
						<form action="script.php" method="POST" class="ps-4">
                            <button class="btn btn-light text-dark main-btn rounded-3 ms-3 bg-transparent border-0" type="submit" name="logout">
                            Log out
                            </button>
                        </form>
					</div>
					
				</div>
			</div>
			<!-- END header-nav -->
</div>
		