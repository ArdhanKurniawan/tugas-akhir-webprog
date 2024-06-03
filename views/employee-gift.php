<title><?= $page->seo_title; ?> | Delovery Bisnis</title>

<meta name="description" content="<?= $page->seo_meta; ?>">

<meta property="og:locale" content="id_ID" />
<meta property="og:title" content="<?= $page->seo_title; ?> | Delovery Bisnis">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $base_url; ?>">
<meta property="og:description" content="<?= $page->seo_meta; ?>" />
<meta property="og:site_name" content="Delovery Bisnis - Corporate Gift & Souvenir Perusahaan" />

<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="preload" fetchpriority="high" as="image" href="assets/images/static/main-img.webp" type="image/webp">

<link rel="stylesheet" href="assets/css/all-page-style.min.css">
<link rel="preload" href="assets/css/all-page-style.min.css" fetchpriority="high" as="style">

</head>

<body>
	<main id="content" class="wrapper layout-page">
        <?php include 'views/include/navdesktop.php'; ?>

		<section class="bg-primary overflow-hidden">
			<div class="container container-xxl">
				<div class="row">
					<div class="col-lg-7 px-6 px-xl-10 order-1 order-lg-0">
						<div class="py-lg-22 py-14 pe-xl-14 mt-lg-3 mb-lg-5 ms-lg-auto content-wrap">
							<div class="text-left">
								<p data-animate="fadeInUp" class="text-white fs-18px mb-0">OUR SOLUTIONS</p>
								<h1 data-animate="fadeInUp" class="mx-auto font-primary text-white fs-30px fs-xl-1 mb-8">Employee Gift</h1>

								<p data-animate="fadeInUp" class="text-white fs-18px mb-0">
									Tingkatkan retensi karyawan perusahaan Anda dengan gift yang berkesan, cocok untuk ulang tahun, pensiun, apresiasi kinerja, dan penghargaan lainnya.
								</p>
							</div>
		
							<a data-animate="fadeInUp" href="https://api.whatsapp.com/send?phone=628122883155&text=Halo%20Debi%2C%20saya%20ingin%20tanya%20mengenai%20employee gift perusahaan saya. Bisa dibantu?" class="btn btn-lg btn-secondary mt-8 hover-shine">Konsultasi Sekarang</a>
						</div>
					</div>

					<div class="col-lg-5 py-25 py-lg-0 position-relative order-0 order-lg-1">
						<div class="card-img-overlay d-flex align-items-center justify-content-center w-lg-half-screen">
							<div class="lazy-bg bg-overlay position-absolute z-index-0 w-100 h-100 bg-col-lg-half-screen-right light-mode-img" data-bg-src="assets/images/static/main-img.webp"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include 'views/include/section_experience.php'; ?>

		<?php if ($catalogproduk) { ?>
			<section id="feature_products_1" class="container container-xxl pb-lg-20 pb-14 pt-11 mb-lg-4">
				<h2 class="text-center mb-10 pb-3 font-primary fs-30px fs-xl-3" data-animate="fadeInUp">Wide Selection of Corporate Gifts</h2>

				<ul class="nav nav-tabs border-0 d-flex justify-content-center mb-14" role="tablist">
					<?php $active = false; foreach ($catalogproduk as $key) { if ($key['produk']) { ?>
						<li class="nav-item" role="presentation" data-animate="fadeInUp">
							<h5 class="mb-0 px-sm-7 px-5 py-2">
								<button
									class="nav-link text-hover-underline p-0 border-0 text-body-emphasis opacity-50 <?= (!$active) ? "active" : ""; $active = true; ?>"
									data-bs-toggle="tab"
									data-bs-target="#<?= $key['slug'] ?>"
									type="button"
									role="tab"
									aria-controls="<?= $key['slug'] ?>"
									aria-selected="true"
								>
									<?= $key['name'] ?>
								</button>
							</h5>
						</li>
					<?php }} ?>
				</ul>
				
				<div class="tab-content">
					<?php $active = false; foreach ($catalogproduk as $key) { if ($key['produk']) { ?>
						
						<div class="tab-pane fade show <?= (!$active) ? "active" : ""; $active = true; ?>" id="<?= $key['slug'] ?>" role="tabpanel" tabindex="0">
                            <div class="row gy-50px">
                                <?php foreach ($key['produk'] as $produk) { ?>
									<div class="col-lg-3 col-md-4 col-sm-6 col-6">
										<div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
											<figure class="card-img-top position-relative mb-7 overflow-hidden">
												<a href="produk/slug/<?= $produk->slug ?>" class="hover-zoom-in d-block" title="<?= $produk->pname ?>">
												    <img data-sizes="(min-width: 320px) 100vw, 320px" alt="<?= $produk->pname ?>" 
                                                        data-src="images/produk/thumb/286-<?= $produk->featured ?>"
                                                        data-srcset="images/produk/thumb/150-<?= $produk->featured ?> 480w,
                                                                    images/produk/thumb/286-<?= $produk->featured ?> 640w,
                                                                    images/produk/thumb/286-<?= $produk->featured ?> 1200w"
                                                        src="assets/images/placeholder.webp" class="img-fluid lazy-image w-100" loading="lazy" width="330" height="440"/>
												</a>

												<div class="position-absolute product-flash z-index-2">
													<?php 
														$produkCreated = new DateTime($produk->product_created);
                                                        $now = new DateTime();
                                                        $rangewaktu = $produkCreated->diff($now)->format("%R%a");
													?>
													<?php if ($rangewaktu <= 5) { ?>
														<div class="position-absolute product-flash z-index-2"><span class="badge badge-product-flash on-new">New</span></div>

													<?php } else if ($produk->saleprice != 0) { ?>
														<span class="badge badge-product-flash on-sale bg-primary">
															<?= number_format((float) 100 * ($produk->price - $produk->saleprice) / $produk->price, 0, ',', '.'); ?>%
														</span>
													<?php } ?>
												</div>
											</figure>

											<div class="card-body text-center p-0">
												<?php if ($produk->saleprice != 0) { ?>
													<span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
														<del class="text-body fw-500 me-4 fs-13px">Rp <?= number_format($produk->price, 0, ',', '.'); ?></del>
														<ins class="text-decoration-none">Rp <?= number_format($produk->saleprice, 0, ',', '.'); ?></ins>
													</span>

												<?php } else { ?>
													<span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">Rp <?= number_format($produk->price, 0, ',', '.'); ?></span>
												<?php } ?>

												<h4 class="product-title card-title text-primary-hover text-body-emphasis fw-bold fs-15px fw-500 mb-3">
													<a class="text-decoration-none text-reset" href="produk/slug/<?= $produk->slug ?>"><?= $produk->pname ?></a>
												</h4>
											</div>
										</div>
									</div>
								<?php } ?>
                            </div>
                        </div>
					<?php }} ?>

					<div class="tab-pane fade" id="bodycare-tab-pane" role="tabpanel" tabindex="0">
						<div class="row gy-50px">
						</div>
					</div>
				</div>
			</section>
		<?php } ?>
		
        <!-- List Client -->
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
		                
    					<a href="https://api.whatsapp.com/send?phone=628122883155&text=Halo%20Debi%2C%20saya%20ingin%20tanya%20mengenai%20gift%20dan%20merchandise%20perusahaan" 
    					class="btn btn-lg btn-secondary mt-8 btn-hover-text-light btn-hover-bg-primary btn-hover-border-primary hover-shine">Dapatkan Penawaran <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg></a>
					</div>
					
					<div class="col-lg-6 py-lg-12 pt-15 order-0 order-lg-0" data-animate="fadeInUp">
						<img data-src="assets/images/static/cta-img2.webp" alt="Delovery Bisnis Contact" class="img-fluid lazy-image" width="628" height="650" src="assets/images/placeholder.webp">
					</div>
				</div>
			</div>
		</section>	
		
        <!-- Press Release -->
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
										Delovery Bisnis adalah layanan Delovery yang membantu perusahaan mengirim gift dan merchandise untuk customer dan relasi bisnis dengan mudah dan cepat. 
										Dengan Delovery Bisnis, Anda juga bisa melakukan penjadwalan pengiriman hadiah. Delovery akan mengatur urusan gift dan merchandise sesuai kebutuhan hingga ke proses pengiriman. Dijamin aman dan praktis.
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
    
    <script type='text/javascript' src="assets/js/webfont.js"></script>
    <script>
	    document.addEventListener("DOMContentLoaded", function() {
	        WebFont.load({
                custom: {
                    families: ['bootstrap-icons', 'DM Serif Text', 'Wix Madefor Display'],
                    urls: [
                        'assets/vendors/bootstrap-icon/font/bootstrap-icons.min.css',
                        'https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap',
                        'https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;600;700&display=swap'
                    ]
                }
            });
        });
	</script>
    
    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendors/clipboard/clipboard.min.js"></script>
	<script src="assets/vendors/vanilla-lazyload/lazyload.min.js"></script>
	<script src="assets/vendors/waypoints/jquery.waypoints.min.js"></script>
	<script src="assets/vendors/slick/slick.min.js"></script>
	<script src="assets/js/theme.min.js"></script>
</body>
</html>