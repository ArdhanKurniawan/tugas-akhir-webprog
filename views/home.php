<title>Delovery Bisnis - Corporate Gift & Souvenir Perusahaan</title>

<meta name="description" content="Pesan Corporate Gift & Souvenir Perusahaan Mudah dan Cepat! Rekomendasi hadiah sesuai budget. Konsultasi Sekarang!">

<meta property="og:locale" content="id_ID" />
<meta property="og:title" content="Delovery Bisnis - Corporate Gift & Souvenir Perusahaan">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $base_url; ?>">
<meta property="og:description" content="Pesan Corporate Gift & Souvenir Perusahaan Mudah dan Cepat! Rekomendasi hadiah sesuai budget. Konsultasi Sekarang!" />
<meta property="og:site_name" content="Delovery Bisnis - Corporate Gift & Souvenir Perusahaan" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="preload" fetchpriority="high" as="image" href="assets/images/static/main-img.webp" type="image/webp">

<link rel="stylesheet" href="assets/css/themes.min.css">
<link rel="preload" href="assets/css/themes.min.css" fetchpriority="high" as="style">

<link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
<link rel="preload" href="assets/vendors/animate/animate.min.css" fetchpriority="high" as="style">

<link rel="stylesheet" href="assets/vendors/slick/slick.min.css">
<link rel="preload" href="assets/vendors/slick/slick.min.css" fetchpriority="high" as="style">

<style>#kategori .slick-list:not(.slick-center) {padding-left: 0px!important;}</style>

</head>

<body>
	<main id="content" class="wrapper layout-page">
        <?php include 'views/include/navdesktop.php'; ?>

		<section class="bg-section-8 overflow-hidden">
			<div class="container container-xxl">
				<div class="row">
					<div class="col-lg-6 px-6 px-xl-10 order-1 order-lg-0">
						<div class="py-lg-22 py-14 pe-xl-14 mt-lg-3 mb-lg-5 ms-lg-auto content-wrap">
							<div class="text-left">
								<h1 data-animate="fadeInUp" class="mx-auto font-primary fs-30px fs-xl-2 fs-xxl-1 mb-8">Solusi Praktis Kirim Merchandise & Gift</h1>
								<p data-animate="fadeInUp" class="fs-18px mb-0"><i class="far fa-check me-5 mb-6"></i>Kustomisasi sesuai brand Anda</p>
								<p data-animate="fadeInUp" class="fs-18px mb-0"><i class="far fa-check me-5 mb-6"></i>Rekomendasi hadiah sesuai budget</p>
								<p data-animate="fadeInUp" class="fs-18px mb-0"><i class="far fa-check me-5 mb-6"></i>Garansi kualitas & pengiriman tepat waktu</p>
							</div>
		
							<a data-animate="fadeInUp" href="#collections" class="btn btn-lg btn-secondary mt-8 hover-shine">Selengkapnya</a>
						</div>
					</div>
					<div class="col-lg-6 py-25 py-lg-0 position-relative order-0 order-lg-1">
						<div class="card-img-overlay d-flex align-items-center justify-content-center w-lg-half-screen">
							<div class="lazy-bg bg-overlay position-absolute z-index-0 w-100 h-100 bg-col-lg-half-screen-right" data-bg-src="assets/images/static/main-img.webp"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

    	<?php if ($datakatalog) { ?>
    		<section id="collections">
    			<div class="container container-xxl pt-10 pb-10">
    				<div class="row align-items-center text-center mb-12 pb-3 mt-2">
    					<div class="col-sm-12" data-animate="fadeInUp">
    						<h2 class="mb-5 fs-30px fs-xl-3 font-primary">Wide Selection of Corporate Gifts</h2>
    						<p class="fs-18px mb-0">Our products are designed for everyone.</p>
    					</div>
    				</div>
    				
    				<div class="slick-slider"
    					data-slick-options='{"arrows":true,"dots":false,"centerMode":true,"centerPadding":"60px",
    					"slidesToScroll": "4",
    					"infinite": true,
    					"responsive":[{
    						"breakpoint":1560,
    						"settings":{
    							"arrows":false,
    							"dots":false,
    							"slidesToShow":5}
    						},
    						{"breakpoint":1200,
    						"settings":{
    							"arrows":false,
    							"dots":false,
    							"slidesToShow":3
    						}
    					},
    					{"breakpoint":992,"settings":{"arrows":false,"slidesToShow":3}},
    					{"breakpoint":576,"settings":{"arrows":false,"centerMode":true,"centerPadding":"30px","slidesToShow":2,"slidesToScroll": 3}}],
    					"slidesToShow":6}'
    					data-animate="fadeInUp"
    				>
    					<?php foreach ($datakatalog as $katalog) { ?>
    						<div>
    							<div class="card grid-1 bg-transparent border-0">
    								<a href="#" class="rounded-circle mx-auto hover-zoom-in w-100 image-box-2">
    									<img class="lazy-image img-fluid card-img light-mode-img" src="assets/images/placeholder.webp" data-src="images/katalog/<?= $katalog->image ?>" width="180" height="180" alt="<?= $katalog->name ?>">
    								</a>
    	
    								<div class="card-body pt-9 pb-0 d-flex justify-content-center px-0">
    									<h4 class="fs-15px fs-xl-5 text-center position-relative">
    										<a href="#" class="text-decoration-none"><?= $katalog->name ?></a>
    									</h4>
    								</div>
    							</div>
    						</div>
    					<?php } ?>
    				</div>
    			</div>
    		</section>
		<?php } ?>

		<?php include 'views/include/client.php'; ?>

		<section class="mt-lg-6 position-relative py-15">
			<div class="container container-xxl">
				<div class="row align-items-center mb-lg-4 pb-3">
					<div class="col-xl-5 col-lg-6 mb-lg-0 order-1 order-lg-1 ps-10" data-animate="fadeInUp">
						<div class="text-left">
							<h3 class="mx-auto pt-lg-2 pt-12 mb-8 fs-30px fs-xl-2 font-primary">
								Konsultasikan Kebutuhan Gift & Merchandise Anda
							</h3>
							<p class="fs-18px mb-0">
								Beri tahu kami apa yang Anda cari, tim kami akan merespons sesegera mungkin. Kami senang mendengar dari Anda dan berharap dapat membantu Anda.
							</p>
						</div>
		
						<a href="#" class="btn btn-lg btn-secondary btn-hover-text-light mt-8 btn-hover-bg-primary btn-hover-border-primary hover-shine">Dapatkan Penawaran <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg></a>
					</div>

					<div class="col-lg-6 py-lg-12 pt-15 order-0 order-lg-0" data-animate="fadeInUp">
						<img data-src="assets/images/static/cta-img2.webp" alt="Delovery Bisnis Contact" class="img-fluid lazy-image" width="628" height="650" loading="lazy" src="assets/images/placeholder.webp">
					</div>
				</div>
			</div>
		</section>	
		
        <?php include 'views/include/press.php'; ?>

		<section>
			<div class="container">
				<div class="row py-15 py-lg-17">
					<div class="col-md-4">
						<h2 class="fs-28px fs-xl-2 font-primary">
							Frequently Asked Questions
						</h2>
					</div>
					
					<div class="col-md-8">
						<div class="accordion accordion-flush" id="FAQ">
							<div class="accordion-item pb-5 pt-11 pt-md-0">
								<h2 class="accordion-header" id="flush-headingReturnsOne">
									<a
										class="product-info-accordion collapsed text-decoration-none"
										href="#"
										data-bs-toggle="collapse"
										data-bs-target="#flush-collapseReturnsOne"
										aria-expanded="false"
										aria-controls="flush-collapseReturnsOne"
									>
										<span class="fs-18px">Apa itu Delovery Bisnis?</span>
									</a>
								</h2>
							</div>
							
							<div id="flush-collapseReturnsOne" class="accordion-collapse collapse" aria-labelledby="flush-headingReturnsOne" data-bs-parent="#FAQ">
								<div class="py-8">
									<p>
										Delovery Bisnis adalah layanan Delovery yang membantu perusahaan mengirim gift dan merchandise untuk customer dan relasi bisnis dengan mudah 
										dan cepat. Dengan Delovery Bisnis, Anda juga bisa melakukan penjadwalan pengiriman hadiah. Delovery akan mengatur urusan gift dan merchandise 
										sesuai kebutuhan hingga ke proses pengiriman. Dijamin aman dan praktis.
									</p>
								</div>
							</div>

							<div class="accordion-item pb-4 pt-11">
								<h2 class="accordion-header" id="flush-headingReturnsTwo">
									<a
										class="product-info-accordion collapsed text-decoration-none"
										href="#"
										data-bs-toggle="collapse"
										data-bs-target="#flush-collapseReturnsTwo"
										aria-expanded="false"
										aria-controls="flush-collapseReturnsTwo"
									>
										<span class="fs-18px">Bagaimana cara menggunakan layanan Delovery Bisnis untuk memesan gift & merchandise perusahaan?</span>
									</a>
								</h2>
							</div>
							
							<div id="flush-collapseReturnsTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#FAQ">
								<div class="py-8">
									<p>
										Anda dapat memesan gift corporate atau mendaftar Delovery Bisnis dengan menghubungi staff corporate kami di halaman ini. Tim kami akan menghubungi Anda segera setelah menerima permintaan.
									</p>
								</div>
							</div>

							<div class="accordion-item pb-4 pt-11">
								<h2 class="accordion-header" id="flush-headingReturnsThree">
									<a
										class="product-info-accordion collapsed text-decoration-none"
										href="#"
										data-bs-toggle="collapse"
										data-bs-target="#flush-collapseReturnsThree"
										aria-expanded="false"
										aria-controls="flush-collapseReturnsThree"
									>
										<span class="fs-18px">Apakah Ada Minimal Pembelian?</span>
									</a>
								</h2>
							</div>
							
							<div id="flush-collapseReturnsThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#FAQ">
								<div class="py-8">
									<p>
										Ya. Setiap kategori produk mempunyai minimal pemesanan yang berbeda- beda. Delovery Bisnis menyediakan jumlah pemesanan terendah untuk setiap kategori yang berbeda.
									</p>
								</div>
							</div>

							<div class="accordion-item pb-4 pt-11">
								<h2 class="accordion-header" id="flush-headingReturns4">
									<a
										class="product-info-accordion collapsed text-decoration-none"
										href="#"
										data-bs-toggle="collapse"
										data-bs-target="#flush-collapseReturns4"
										aria-expanded="false"
										aria-controls="flush-collapseReturns4"
									>
										<span class="fs-18px">Saya ingin merchandise dikemas dengan logo dan larna yang disesuaikan dengan branding perusahaan. Apakah bisa?</span>
									</a>
								</h2>
							</div>
							
							<div id="flush-collapseReturns4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#FAQ">
								<div class="py-8">
									<p>
										Ya, Tentu saja! Delovery Bisnis bisa menyesuaikan desain setiap gift dan merchandise secara personalize sesuai dengan kebutuhan perusahaan.	
									</p>
								</div>
							</div>

							<div class="accordion-item pb-4 pt-11">
								<h2 class="accordion-header" id="flush-headingReturns5">
									<a
										class="product-info-accordion collapsed text-decoration-none"
										href="#"
										data-bs-toggle="collapse"
										data-bs-target="#flush-collapseReturns5"
										aria-expanded="false"
										aria-controls="flush-collapseReturns5"
									>
										<span class="fs-18px">Apakah merchandise bisa disesuaikan dengan budget perusahaan kami?</span>
									</a>
								</h2>
							</div>

							<div id="flush-collapseReturns5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#FAQ">
								<div class="py-8">
									<p>
										Ya, Anda dapat mendiskusikan budget perusahaan dan staff kami akan memberikan beberapa pilihan sesuai dengan budget perusahaan.
									</p>
								</div>
							</div>

							<div class="accordion-item pb-4 pt-11">
								<h2 class="accordion-header" id="flush-headingReturns7">
									<a
										class="product-info-accordion collapsed text-decoration-none"
										href="#"
										data-bs-toggle="collapse"
										data-bs-target="#flush-collapseReturns7"
										aria-expanded="false"
										aria-controls="flush-collapseReturns7"
									>
										<span class="fs-18px">Bagaimana untuk metode pembayarannya?</span>
									</a>
								</h2>
							</div>
							
							<div id="flush-collapseReturns7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#FAQ">
								<div class="py-8">
									<p>
										Perusahaan bisa melakukan pembayaran dengan 2x termin. Termin pertama dilakukan sebagai DP (Down Payment) untuk proses pesanan dan termin kedua adalah pelunasan saat gift & merchandise siap dikirim.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	
    <!-- Footer -->
    <?php include 'views/include/footer.php'; ?>

    <?php include 'views/include/icons.php'; ?>

    <?php include 'views/include/cart.php'; ?>
    
    <!-- Nav Mobile -->
    <?php include 'views/include/navmobile.php'; ?>
    
	<script src="assets/js/jquery.min.js"></script>
    <script type='text/javascript' src="assets/js/webfont.js"></script>
    <script>
	    WebFont.load({
            custom: {
                families: ['bootstrap-icons', 'DM Serif Text', 'Wix Madefor Display'],
                urls: [
                    'assets/vendors/bootstrap-icon/font/bootstrap-icons.min.css',
                    'https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap',
                    'https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;600;700&display=swap',
                    'assets/vendors/fontawesome/css/all.min.css'
                ]
            }
        });
    </script>
    
	<script src="assets/js/jquery.inview.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendors/clipboard/clipboard.min.js"></script>
	<script src="assets/vendors/vanilla-lazyload/lazyload.min.js"></script>
	<script src="assets/vendors/waypoints/jquery.waypoints.min.js"></script>
	<script src="assets/vendors/slick/slick.min.js"></script>
	<script src="assets/js/theme.min.js"></script>
	
	<script>
	    $(document).ready(function() {
	    });
	</script>
</body>
</html>