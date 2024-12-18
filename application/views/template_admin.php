
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $judul_halaman ?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url('assets/flat_able/') ?>assets/images/favicon.ico" type="image/x-icon">
    <!-- vendor css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/flat_able/') ?>assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<div class="user-details">
							<span><?= $this->session->userdata('nama');?></span>
							<div id="more-details">Kreator <i class="bi bi-person-fill"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.html"><i class="bi bi-view-list"></i> View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i class="bi bi-gear-wide"></i></i> Settings</a></li>
							<li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="bi bi-box-arrow-left"></i></i> Logout</a></li>
						</ul>
					</div>
				</div>
				<ul class="nav pcoded-inner-navbar ">
					<?php $menu =  $this->uri->segment(2); ?>
					<li class="nav-item <?php if($menu=='home'){ echo "active";}?>">
					    <a href="<?= base_url('admin/home') ?>" class="nav-link "><span class="pcoded-micon"><i class="bi bi-house"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item <?php if($menu=='konten'){ echo "active";}?>">
							<a href="<?= base_url('admin/konten') ?>" class="nav-link "><span class="pcoded-micon"><i class="bi bi-cloud-upload"></i></i></span><span class="pcoded-mtext">Konten</span></a>
						</li>
					<?php if($this->session->userdata('level')=='admin'){ ?>
						<li class="nav-item <?php if($menu=='user'){ echo "active";}?>">
							<a href="<?= base_url('admin/user') ?>" class="nav-link "><span class="pcoded-micon"><i class="bi bi-person"></i></i></span><span class="pcoded-mtext">User</span></a>
						</li>
						<li class="nav-item <?php if($menu=='kategori'){ echo "active";}?>">
							<a href="<?= base_url('admin/kategori') ?>" class="nav-link "><span class="pcoded-micon"><i class="bi bi-bookmark"></i></i></span><span class="pcoded-mtext">Kategori</span></a>
						</li>
						
						<li class="nav-item <?php if($menu=='galeri'){ echo "active";}?>">
							<a href="<?= base_url('admin/Galeri') ?>" class="nav-link "><span class="pcoded-micon"><i class="bi bi-cloud-upload"></i></i></span><span class="pcoded-mtext">Gallery</span></a>
						</li>
						<li class="nav-item <?php if($menu=='konfigurasi'){ echo "active";}?>">
							<a href="<?= base_url('admin/konfigurasi') ?>" class="nav-link "><span class="pcoded-micon"><i class="bi bi-pencil-square"></i></span><span class="pcoded-mtext">Konfigurasi</span></a>
						</li>
						<li class="nav-item <?php if($menu=='caraousel'){ echo "active";}?>">
							<a href="<?= base_url('admin/caraousel') ?>" class="nav-link "><span class="pcoded-micon"><i class="bi bi-card-text"></i></span><span class="pcoded-mtext">Caraousel</span></a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">	
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="<?= base_url('assets/flat_able/');?>" class="b-brand">
						<!-- ========   change your logo hear   ============ -->"
						<img src="<?= base_url('assets/flat_able/') ?>assets/images/logo.png" alt="" class="logo">
						<img src="<?= base_url('assets/flat_able/') ?>assets/images/logo-icon.png" alt="" class="logo-thumb">
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
									
								</a>
								<div class="dropdown-menu profile-notification ">
									<ul class="pro-body">
										<li><a href="user-profile.html" class="dropdown-item"><i class="fas fa-circle"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="fas fa-circle"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="fas fa-circle"></i> Lock Screen</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown mega-menu">
								<a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
									
								</a>
								<div class="dropdown-menu profile-notification ">
									<div class="row no-gutters">
										<div class="col">
											<h6 class="mega-title">UI Element</h6>
											<ul class="pro-body">
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Alert</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Button</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Badges</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Cards</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Modal</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Tabs & pills</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Forms</h6>
											<ul class="pro-body">
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Elements</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Validation</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Masking</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Wizard</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Picker</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Select</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Application</h6>
											<ul class="pro-body">
												<li><a href="#!" class="dropdown-item"><i class="feather icon-mail"></i> Email</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-clipboard"></i> Task</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-check-square"></i> To-Do</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-image"></i> Gallery</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-help-circle"></i> Helpdesk</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Extension</h6>
											<ul class="pro-body">
												<li><a href="#!" class="dropdown-item"><i class="feather icon-file-plus"></i> Editor</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-file-minus"></i> Invoice</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-calendar"></i> Full calendar</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-upload-cloud"></i> File upload</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-scissors"></i> Image cropper</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li>
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="bi bi-person-circle"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<?= $this->session->userdata('nama');?>
										<a href="<?= base_url('auth/logout') ?>" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="<?= base_url('auth/logout') ?>" class="dropdown-item"><i class="feather icon-mail"></i>Login</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
	</header>
	
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <?= $contents; ?>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src="<?= base_url('assets/flat_able/') ?>assets/js/vendor-all.min.js"></script>
    <script src="<?= base_url('assets/flat_able/') ?>assets/js/plugins/bootstrap.min.js"></script>
	<script>
        $('#menghilang').delay('slow').slideDown('slow').delay(5000).slideUp(500);
    </script>
</body>
</html>