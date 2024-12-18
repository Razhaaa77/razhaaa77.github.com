
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
					<li><a href="<?= base_url('detail/kategori/'.$rr['id_kategori']); ?>"><?= $rr['nama_kategori'] ?></a></li>
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
					<h2><?= $rr['judul'];?></h2>
					<ol>
						<li><a href="<?= base_url( ); ?>">Home</a></li>
						<li>blog</li>
					</ol>
				</div>
			</div><!-- End Breadcrumbs -->
			 <?php } ?>

			<!-- ======= Blog Details Section ======= -->
				<section id="blog" class="blog">
				<div class="container" data-aos="fade-up" data-aos-delay="100">
					<div class="col-lg-12">
							<article class="blog-details">
								<div class="post-img">
									<img src="<?= base_url('assets/flat_able/upload/konten/'. $konten->foto);?>" class="img-fluid">
								</div>

								<h2 class="title"><?= $konten->judul;?>
								</h2>

								<div class="meta-top">
									<ul>
										<li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
												href="blog-details.html"><?= $konten->judul;?></a></li>
										<li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
												href="blog-details.html"><time datetime="2020-01-01"><?= $konten->tanggal;?></time></a>
										</li>
										
									</ul>
								</div><!-- End meta top -->

								<div class="content">
									<p>
									<?= $konten->keterangan;?>
									</p>

									<!--<p>
										Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in
										accusamus harum vel
										aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
									</p>-->

									<!-- <blockquote>
										<p>
											Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut.
											Aut eos aliquam
											doloribus minus autem quos.
										</p>
									</blockquote> -->

									<!-- <p>
										Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore
										tempore provident
										voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est
										suscipit
										perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
										Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti
										velit quisquam rerum.
										Omnis dolorum exercitationem harum qui qui blanditiis neque.
										Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto
										voluptatem magni. Vel
										magnam quod et tempora deleniti error rerum nihil tempora.
									</p> -->

									<!-- <h3>Et quae iure vel ut odit alias.</h3>
									<p>
										Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut
										rerum atque. Optio
										provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum
										omnis ullam
										quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid
										qui.
										Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia
										aut ratione
										aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem
										omnis asperiores
										natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur
										quidem ea.
										Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem.
										Cum quibusdam
										voluptatem voluptatem accusamus mollitia aut atque aut.
									</p>
									<img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt=""> -->

									<!-- <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
									<p>
										Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In
										assumenda quia quae
										a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur
										sed excepturi sint
										non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
										Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis
										quibusdam esse. Ex
										libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam
										vitae.
									</p>
									<p>
										Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas
										incidunt. Nulla
										sit eaque mollitia nisi asperiores est veniam.
									</p> -->

								</div><!-- End post content -->

								<div class="meta-bottom">
									<!-- <i class="bi bi-folder"></i>
									<ul class="cats">
										<li><a href="#">Business</a></li>
									</ul> -->

									<i class="bi bi-tags"></i>
									<ul class="tags">
										<li><?= $ktr->nama_kategori;?></li>
										
									</ul>
									
								</div><!-- End meta bottom -->
								
							</article><!-- End blog post -->
							
							
						</div>
						
						
					</div>
					
				</section><!-- End Blog Details Section -->
				
		</main>
		<!-- End #main -->

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
