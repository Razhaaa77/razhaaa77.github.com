<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?= $judul; ?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="<?= base_url('assets/flat_able/front/'); ?>https://fonts.googleapis.com">
	<link rel="preconnect" href="<?= base_url('assets/flat_able/front/'); ?>https://fonts.gstatic.com" crossorigin>
	<link
		href="<?= base_url('assets/flat_able/front/'); ?>https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets/flat_able/front/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css"
		rel="stylesheet">
	<link href="<?= base_url('assets/flat_able/front/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css"
		rel="stylesheet">
	<link href="<?= base_url('assets/flat_able/front/'); ?>assets/vendor/fontawesome-free/css/all.min.css"
		rel="stylesheet">
	<link href="<?= base_url('assets/flat_able/front/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url('assets/flat_able/front/'); ?>assets/vendor/glightbox/css/glightbox.min.css"
		rel="stylesheet">
	<link href="<?= base_url('assets/flat_able/front/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url('assets/flat_able/front/'); ?>assets/css/main.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="header d-flex align-items-center">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

			<a href="index.html" class="logo d-flex align-items-center">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<!-- <img src="assets/img/logo.png" alt=""> -->
				<h1><?= $konfig->judul_website; ?><span>.</span></h1>
			</a>

			<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
			<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
			<nav id="navbar" class="navbar">
				<ul>
					<li><a href="<?= base_url( ); ?>">Home</a></li>
					<?php foreach($kategori as $rr){?>
					<li><a
							href="<?= base_url('detail/kategori/'.$rr['id_kategori']); ?>"><?= $rr['nama_kategori'] ?></a>
					</li>
					<?php } ?>
					<li class="dropdown"><a href="#"><span>Dropdown</span> <i
								class="bi bi-chevron-down dropdown-indicator"></i></a>
						<ul>
							<li><a href="<?= base_url('home/galeri' ); ?>">Gallery</a></li>
						</ul>
					</li>
					<li><a href="<?= base_url('auth') ?>">login</a></li>
				</ul>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<main id="main">

		<!-- ======= Breadcrumbs ======= -->
		<?php $no=1; foreach($carousel as $rr){?>
		<div class="breadcrumbs d-flex align-items-center"
			style="background-image: url('<?= base_url('assets/flat_able/upload/caraousel/'. $rr['foto'])?>'); height: 120px;">
			<div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
				<?php $no++; } ?>
				<h2><?= $rr['judul'];?></h2>
				<ol>
					<li><a href="<?= base_url( ); ?>">Home</a></li>
					<li>Blog</li>
				</ol>
			</div>
		</div><!-- End Breadcrumbs -->
		<!-- ======= Our Projects Section ======= -->
		<section id="projects" class="projects">
			<div class="container" data-aos="fade-up">

				<div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
					data-portfolio-sort="original-order">

					<ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
						<li data-filter="*" class="filter-active">Gallery</li>
					</ul><!-- End Projects Filters -->
					<div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
						<?php $no=1; foreach($galeri as $rr){?>
						<div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
							<div class="portfolio-content h-100">
								<img src="<?= base_url('assets/flat_able/upload/galeri/'. $rr['foto_galeri'])?>" class="img-fluid" >
								<div class="portfolio-info">
									<h4><?= $rr['judul_galeri'];?></h4>
									<a href="<?= base_url('assets/flat_able/upload/galeri/'. $rr['foto_galeri'])?>" title="<?= $rr['judul_galeri'];?>"
										data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
											class="bi bi-zoom-in"></i></a>
								</div>
							</div>
						</div><!-- End Projects Item -->
						<?php $no++; } ?>
					</div><!-- End Projects Container -->
				</div>
			</div>
		</section><!-- End Our Projects Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">

		<div class="footer-content position-relative">
			<div class="container">
				<div class="row">

					<div class="col-lg-5 col-md-6">
						<div class="footer-info">
							<h3><?= $konfig->judul_website; ?></h3>
							<p>
								<?= $konfig->profil_website; ?><br><br>
								<strong>Phone:</strong> <?= $konfig->no_wa; ?><br>
								<strong>Email:</strong><?= $konfig->email; ?><br>
								<strong>Email:</strong><?= $konfig->alamat; ?><br>
							</p>
							<div class="social-links d-flex mt-3">
								<a href="<?= $konfig->x; ?>" class="d-flex align-items-center justify-content-center"><i
										class="bi bi-twitter"></i></a>
								<a href="<?= $konfig->facebook; ?>"
									class="d-flex align-items-center justify-content-center"><i
										class="bi bi-facebook"></i></a>
								<a href="<?= $konfig->instagram; ?>"
									class="d-flex align-items-center justify-content-center"><i
										class="bi bi-instagram"></i></a>
							</div>
						</div>
					</div><!-- End footer info column-->

					<div class="col-lg-6 col-md-3 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><a href="#">Home</a></li>
						</ul>
					</div><!-- End footer links column-->
				</div>
			</div>
		</div>

		<div class="footer-legal text-center position-relative">
			<div class="container">
				<div class="copyright">
					&copy; Copyright <strong><span>Razhaaa</span></strong>. All Rights Reserved
				</div>
				<div class="credits">
					<!-- All the links in the footer should remain intact. -->
					<!-- You can delete the links only if you purchased the pro version. -->
					<!-- Licensing information: https://bootstrapmade.com/license/ -->
					<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
					<!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
						href="https://themewagon.com">ThemeWagon</a>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->

					<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
							class="bi bi-arrow-up-short"></i></a>

					<div id="preloader"></div>

					<!-- Vendor JS Files -->
					<script
						src="<?= base_url('assets/flat_able/front/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js">
					</script>
					<script src="<?= base_url('assets/flat_able/front/'); ?>assets/vendor/aos/aos.js"></script>
					<script
						src="<?= base_url('assets/flat_able/front/'); ?>assets/vendor/glightbox/js/glightbox.min.js">
					</script>
					<script
						src="<?= base_url('assets/flat_able/front/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js">
					</script>
					<script src="<?= base_url('assets/flat_able/front/'); ?>assets/vendor/swiper/swiper-bundle.min.js">
					</script>
					<script
						src="<?= base_url('assets/flat_able/front/'); ?>assets/vendor/purecounter/purecounter_vanilla.js">
					</script>
					<script src="<?= base_url('assets/flat_able/front/'); ?>assets/vendor/php-email-form/validate.js">
					</script>

					<!-- Template Main JS File -->
					<script src="<?= base_url('assets/flat_able/front/'); ?>assets/js/main.js"></script>

</body>

</html>
