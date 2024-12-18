<!DOCTYPE html>
<html lang="en">

<head>
	<title>Chiropractic - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link
		href="<?= base_url('assets/flat_able/front/'); ?>https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap"
		rel="stylesheet">

	<link rel="stylesheet"
		href="<?= base_url('assets/flat_able/front/'); ?>https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= base_url('assets/flat_able/front/'); ?>css/animate.css">

	<link rel="stylesheet" href="<?= base_url('assets/flat_able/front/'); ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/flat_able/front/'); ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/flat_able/front/'); ?>css/magnific-popup.css">

	<link rel="stylesheet" href="<?= base_url('assets/flat_able/front/'); ?>css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url('assets/flat_able/front/'); ?>css/jquery.timepicker.css">

	<link rel="stylesheet" href="<?= base_url('assets/flat_able/front/'); ?>css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('assets/flat_able/front/'); ?>css/style.css">
</head>

<body>
	<div class="top py-1">
		<div class="container">
			<div class="row">
				<div class="col d-flex align-items-center">
					<p class="mb-0"><a href="#">chiropractic@email.com</a> | <a href="#">Help Desk</a> | </p>
				</div>
				<div class="col-4 d-flex justify-content-end">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-3 mb-md-0 mb-4 d-flex align-items-center">
					<a class="navbar-brand" href="index.html"><?= $konfig->judul_website; ?></a>
				</div>
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-8 mb-md-0 mb-3">
							<div class="top-wrap d-flex">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-location-arrow"></span></div>
								<div class="text"><span>Address</span><span>198 West 21th Street, Suite 721 New York NY
										10016</span></div>
							</div>
						</div>
						<div class="col">
							<div class="top-wrap d-flex">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-phone"></span></div>
								<div class="text"><span>Call us</span><span>(+01) 123 456 7890</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="order-lg-last">
				<a href="<?= base_url('auth') ?>" class="btn btn-primary">Login</a>
			</div>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a href="<?= base_url( ); ?>" class="nav-link">Home</a></li>
					<?php foreach($kategori as $rr){?>
					<li class="nav-item"><a href="<?= base_url('home/kategori/'.$rr['id_kategori']); ?>"
							class="nav-link">
							<?= $rr['nama_kategori'] ?></a>
					</li>
					<?php } ?>
					<li class="nav-item"><a href="<?= base_url(''); ?>gallery.html" class="nav-link">Gallery</a></li>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	<?php $no=1; foreach($carousel as $rr){?>
	<section class="hero-wrap hero-wrap-2"
		style="background-image: url('<?= base_url('assets/flat_able/upload/caraousel/'. $rr['foto'])?>');"
		data-stellar-background-ratio="0.5">
		<?php $no++; } ?>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end">
				<div class="col-md-9 ftco-animate pb-5">
					<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
									class="fa fa-chevron-right"></i></a></span> <span>Blog <i
								class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread"><?= $rr['judul'];?></h1>
				</div>
			</div>
		</div>
	</section>
	<!-- 
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');"
		data-stellar-background-ratio="0.5">
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
			<div class="carousel-inner">
				<?php $no=1; foreach($carousel as $rr){?>
				<div class="carousel-item <?php if($no==1){echo 'active'; }?>">
					<img src="<?= base_url('assets/flat_able/upload/caraousel/'. $rr['foto'])?>" class="d-block w-100">
				</div>
				<?php $no++; } ?>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-end">
					<div class="col-md-9 ftco-animate pb-5">
						<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
										class="fa fa-chevron-right"></i></a></span> <span>Blog <i
									class="fa fa-chevron-right"></i></span></p>
						<h1 class="mb-0 bread"><?= $rr['judul'];?></h1>
					</div>
				</div>
			</div>
	</section> -->

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<?php foreach ($konten as $rr) {?>
				<div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20 rounded"
							style="background-image: url(<?= base_url('assets/flat_able/upload/konten/'. $rr['foto'])?>);">
						</a>
						<div class="text mt-3">
							<div class="posted mb-3 d-flex">
								<div class="img author"
									style="background-image: url(<?= base_url('assets/flat_able/upload/konten/'. $rr['foto'])?>);">
								</div>
								<div class="desc pl-3">
									<span>Posted by John doe</span>
									<span><?= $rr['tanggal'];?></span>
								</div>
							</div>
							<h3 class="heading"><a href="#"><?= $rr['judul'];?></a>
							</h3>
							<p><a href="<?= base_url('home/artikel/'. $rr['slug'])?>" class="btn btn-primary">Read
									more</a></p>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</section>

	<footer class="footer ftco-section ftco-no-pt">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg">
					<div class="ftco-footer-widget py-4 py-md-5">
						<h2 class="logo"><a href="#"><?= $konfig->judul_website; ?></a></h2>
						<p><?= $konfig->profil_website; ?></p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
							<li class="ftco-animate"><a href="#"><i class="bi bi-twitter-x"></i></a></li>
							<li class="ftco-animate"><a href="#"><i class="bi bi-facebook"></i></a></li>
							<li class="ftco-animate"><a href="<?= $konfig->instagram; ?>"><i
										class="bi bi-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg">
					<div class="ftco-footer-widget ml-md-5 py-5">
						<h2 class="ftco-heading-2">Quick Links</h2>
						<ul class="list-unstyled">
							<li class="nav-item"><a href="<?= base_url( ); ?>" class="nav-link">Home</a></li>
							<?php foreach($kategori as $rr){?>
							<li class="nav-item"><a href="<?= base_url('home/kategori/'.$rr['id_kategori']); ?>"
									class="nav-link">
									<?= $rr['nama_kategori'] ?></a>
							</li>
							<?php }?>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg">
					<div class="ftco-footer-widget py-4 py-md-5">
						<h2 class="ftco-heading-2">Contact us</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon fa fa-map-marker"></span><span class="text"><?= $konfig->alamat; ?></span></li>
								<li><a href="#"><span class="icon fa fa-phone"></span><span class="text"><?= $konfig->no_wa; ?></span></a></li>
								<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text"><?= $konfig->email; ?></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg">
					<div class="ftco-footer-widget bg-primary p-4 py-5">
						<h2 class="ftco-heading-2">Business Hours</h2>
						<div class="opening-hours">
							<h4>Opening Days:</h4>
							<p class="pl-3">
								<span>Monday – Friday : 9am to 20 pm</span>
								<span>Saturday : 9am to 17 pm</span>
							</p>
							<h4>Vacations:</h4>
							<p class="pl-3">
								<span>All Sunday Days</span>
								<span>All Official Holidays</span>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());

						</script> All rights reserved | This template is made with <i class="fa fa-heart"
							aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="<?= base_url('assets/flat_able/front/'); ?>js/jquery.min.js"></script>
	<script src="<?= base_url('assets/flat_able/front/'); ?>js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?= base_url('assets/flat_able/front/'); ?>js/popper.min.js"></script>
	<script src="<?= base_url('assets/flat_able/front/'); ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/flat_able/front/'); ?>js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url('assets/flat_able/front/'); ?>js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url('assets/flat_able/front/'); ?>js/jquery.stellar.min.js"></script>
	<script src="<?= base_url('assets/flat_able/front/'); ?>js/jquery.animateNumber.min.js"></script>
	<script src="<?= base_url('assets/flat_able/front/'); ?>js/bootstrap-datepicker.js"></script>
	<script src="<?= base_url('assets/flat_able/front/'); ?>js/jquery.timepicker.min.js"></script>
	<script src="<?= base_url('assets/flat_able/front/'); ?>js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/flat_able/front/'); ?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url('assets/flat_able/front/'); ?>js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="<?= base_url('assets/flat_able/front/'); ?>js/google-map.js"></script>
	<script src="<?= base_url('assets/flat_able/front/'); ?>js/main.js"></script>

</body>

</html>
