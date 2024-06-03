<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <base href="<?= $base_url; ?>">

        <title>Jual <?= $data['dataproduct']->name ?> | Delovery Bisnis</title>

        <meta name="description" content="Beli <?= $data['dataproduct']->name ?> Corporate Gift & Souvenir Perusahaan & Komunitas. Rekomendasi hadiah sesuai budget. Konsultasi Sekarang!">
        
        <meta property="og:locale" content="id_ID" />
        <meta property="og:title" content="Delovery Bisnis - Corporate Gift & Souvenir Perusahaan">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Beli <?= $data['dataproduct']->name ?> Corporate Gift & Souvenir Perusahaan & Komunitas. Rekomendasi hadiah sesuai budget. Konsultasi Sekarang!" />
        <meta property="og:site_name" content="Delovery Bisnis - Corporate Gift & Souvenir Perusahaan" />
        <meta property="og:image" content="<?= $base_url; ?>assets/images/static/preview_img.jpg">
        <meta property="og:image:secure_url" content="<?= $base_url; ?>assets/images/static/preview_img.jpg">

        <link rel="icon" href="assets/images/static/favicon.png">

        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link rel="stylesheet" href="assets/vendors/lightgallery/css/lightgallery-bundle.min.css" />
        <link rel="preload" href="assets/vendors/lightgallery/css/lightgallery-bundle.min.css" fetchpriority="high" as="style">

        <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
        <link rel="preload" href="assets/vendors/fontawesome/css/all.min.css" fetchpriority="high" as="style">

        <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
        <link rel="preload" href="assets/vendors/animate/animate.min.css" fetchpriority="high" as="style">

        <link rel="stylesheet" href="assets/vendors/slick/slick.min.css">
        <link rel="preload" href="assets/vendors/slick/slick.min.css" fetchpriority="high" as="style">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap">
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap" fetchpriority="medium" as="style">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;600;700&display=swap">
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400;600;700&display=swap" fetchpriority="medium" as="style">

        <link rel="stylesheet" href="assets/css/themes.css">
        <link rel="preload" href="assets/css/themes.css" fetchpriority="medium" as="style">
    </head>

    <body>
        <main id="content" class="wrapper layout-page">
            <?php include 'views/include/navdesktop.php'; ?>

            <section class="container pt-6 pb-14 pb-lg-20">
                <div class="row">
                    <div class="col-md-6 pe-lg-13">
                        <div class="position-relative">
                            <div
                                id="slider"
                                class="slick-slider slick-slider-arrow-inside slick-slider-dots-inside slick-slider-dots-light g-0"
                                data-slick-options="{&#34;arrows&#34;:false,&#34;asNavFor&#34;:&#34;#slider-thumb&#34;,&#34;dots&#34;:false,&#34;slidesToShow&#34;:1}"
                            >
                                <?php foreach ($data['images'] as $image) { ?>
                                    <a href="images/produk/<?= $image ?>" data-gallery="gallery1">
                                        <img src="assets/images/placeholder.webp" data-src="images/produk/<?= $image ?>" class="h-auto lazy-image" width="540" height="720" alt="<?= $data['dataproduct']->name ?>" />
                                    </a>
                                <?php } ?>

                            </div>
                        </div>

                        <div class="mt-6">
                            <div
                                id="slider-thumb"
                                class="slick-slider slick-slider-thumb ps-1 ms-n3 me-n4"
                                data-slick-options="{&#34;arrows&#34;:false,&#34;asNavFor&#34;:&#34;#slider&#34;,&#34;dots&#34;:false,&#34;focusOnSelect&#34;:true,&#34;slidesToShow&#34;:5,&#34;vertical&#34;:false}"
                            >
                                <?php foreach ($data['images'] as $image) { ?>
                                    <img src="assets/images/placeholder.webp" data-src="images/produk/<?= $image ?>" class="mx-3 px-0 h-auto cursor-pointer lazy-image" width="75" height="100" alt="<?= $data['dataproduct']->name ?>" />
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 pt-md-0 pt-10">
                        <h1 class="mb-8 pb-2 fs-4 fs-xl-3 font-primary"><?= $data['dataproduct']->name ?></h1>
                        <p class="d-flex align-items-center mb-6">
                            <?php if ($data['dataproduct']->saleprice == 0) { ?>
                                <span class="fs-18px text-body-emphasis ps-6 fw-bold">Rp <?= number_format($data['dataproduct']->price,0,',','.'); ?></span>
                                
                            <?php } else { ?>
                                <span class="text-decoration-line-through">Rp <?= number_format($data['dataproduct']->price,0,',','.'); ?></span>
                                <span class="fs-18px text-body-emphasis ps-6 fw-bold">Rp <?= number_format($data['dataproduct']->saleprice,0,',','.'); ?></span>
                                <span class="badge text-bg-danger fs-6 fw-semibold ms-7 px-6 py-3"><?= number_format((float)100 * ($data['dataproduct']->price - $data['dataproduct']->saleprice) / $data['dataproduct']->price, 0, ',', '.'); ?>%</span>
                            <?php } ?>
                        </p>
						
                        <p class="fs-15px"><?= $data['dataproduct']->description; ?></p>
                        
                        <div class="mb-6">
                            <a class="btn btn-link p-0 fw-bold text-decoration-none text-danger" href="#" data-bs-toggle="offcanvas" data-bs-target="#Spesifikasi" aria-controls="Spesifikasi" aria-expanded="false">
                                Full Specification
								<svg class="icon"><use xlink:href="#icon-arrow-right"></use></svg>
                            </a>
                        </div>

                        <form class="mb-9 pb-2">
                            <div class="row align-items-end">
                                <div class="form-group col-sm-6">
                                    <label class="text-body-emphasis fw-semibold fs-15px pb-6" for="quantity-product">Jumlah :</label>
                                    <div class="input-group position-relative w-100 input-group-lg" data-ordermin="<?= $data['dataproduct']->min_order; ?>">
                                        <a href="#" class="shop-down position-absolute translate-middle-y top-50 start-0 ps-7 product-info-2-minus"><i class="far fa-minus"></i></a>
                                        <input name="number" type="number" id="quantity-product" class="product-info-2-quantity form-control w-100 px-6 text-center" value="<?= $data['dataproduct']->min_order; ?>" min="<?= $data['dataproduct']->min_order; ?>" readonly required/>
                                        <a href="#" class="shop-up position-absolute translate-middle-y top-50 end-0 pe-7 product-info-2-plus"><i class="far fa-plus"></i> </a>
                                    </div>
                                </div>
                            </div>

                            <div class="border-top w-100 my-7 h-1px"></div>

                            <div class="row align-items-end mt-9">
                                <div class="col-sm-6 pt-5 pt-lg-2 mt-2 mt-sm-0 pt-sm-0">
                                    <a href="<?= $data['link']; ?>" class="btn-hover-bg-success btn-hover-border-success btn btn-lg btn-success w-100" id="pesan-whatsapp">
                                        <i class="fab fa-whatsapp me-3"></i>
                                        Chat Whatsapp
                                    </a>
                                </div>
                                
                                <input type="hidden" id="productid" value="<?= $data['dataproduct']->id ?>">

                                <input type="hidden" id="producturl" value="<?= $base_url . "produk/slug/" . $data['dataproduct']->slug; ?>">
                                <input type="hidden" id="slug" value="<?= $data['dataproduct']->slug ?>">
                                <input type="hidden" id="image" value="<?= $data['dataproduct']->featured ?>">
                                <input type="hidden" id="nameproduct" value="<?= $data['dataproduct']->name ?>">
                                <input type="hidden" id="price" value="<?= $data['dataproduct']->price ?>">
                                <input type="hidden" id="saleprice" value="<?= $data['dataproduct']->saleprice ?>">
                                <input type="hidden" id="minorder" value="<?= $data['dataproduct']->min_order ?>">
                                
                                <div class="col-sm-6 pt-5 pt-lg-2 mt-2 mt-sm-0 pt-sm-0">
                                    <button type="button" onclick="getData()" class="btn-hover-bg-secondary btn-hover-border-secondary btn btn-lg btn-secondary w-100">Add to bags</button>
                                </div>
                            </div>
                        </form>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-4 pb-2">
                                    <span class="text-body-emphasis">
                                        <svg class="icon fs-28px me-2 pe-4">
                                            <use xlink:href="#icon-delivery-1"></use>
                                        </svg>
                                        Lama Pembuatan :
                                    </span>
                                    <span class="fw-bold"><?= $data['dataproduct']->lamapembuatan; ?> Hari</span>
                                </p>
                                <p class="mb-4 pb-2">
                                    <span class="text-body-emphasis ">
                                        <svg class="icon fs-28px me-2 pe-4">
                                            <use xlink:href="#icon-Package"></use>
                                        </svg>
                                        Minimum Pemesanan :
                                    </span>
                                    <span class="fw-bold"><?= $data['dataproduct']->min_order; ?> Pcs</span>
                                </p>
                            </div>
                            
                            <div class="col-md-6">
                                <?php if ($data['areakirim']) { ?>
                                    <p class="mb-4 pb-2">
                                        <span class="text-body-emphasis">
                                            <svg class="icon fs-28px me-2 pe-4">
                                                <use xlink:href="#icon-box-07"></use>
                                            </svg>
                                            Pengiriman ke :
                                        </span>
                                        <span class="fw-bold"><?= $data['areakirim'] ?></span>
                                    </p>
                                <?php } ?>
    
                                <p class="mb-4 pb-2">
                                    <span class="text-body-emphasis ">
                                        <svg class="icon fs-28px me-2 pe-4">
                                            <use xlink:href="#icon-map"></use>
                                        </svg>
                                        Dikirim dari :
                                    </span>
                                    <span class="fw-bold"><?= $data['city']; ?></span>
                                </p>
                            </div>
                        </div>
                        
                        <ul class="single-product-meta list-unstyled border-top pt-7 mt-7">
                            <li class="d-flex mb-4 pb-2 align-items-center">
                                <span class="text-body-emphasis fw-semibold fs-14px">Kategori :</span>
                                <span class="ps-4"><?= $data['katalog'] ?></span>
                            </li>
                            
                            <li class="d-flex mb-4 pb-2 align-items-center">
                                <span class="text-body-emphasis fw-semibold fs-14px">Share:</span>
                                <ul class="list-inline d-flex align-items-center mb-0 col-8 col-lg-10 ps-4">
                                    <li class="list-inline-item me-7">
                                        <a href="#" class="fs-14px text-body product-info-share" data-bs-toggle="tooltip" data-bs-title="whatsapp">
                                            <i class="fab fa-whatsapp"></i> Whatsapp
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <div class="border-top w-100 h-1px"></div>
            <div class="border-top w-100 h-1px"></div>
            
            <section class="container pt-15 pb-15 pt-lg-10 pb-lg-20" id="section-rekomendasi-anda">
                <div class="text-center"><h3 class="mb-12 fs-4 fs-xl-3 font-primary">Rekomendasi Untuk Anda</h3></div>

                <div
                    id="rekomendasi-anda"
                    class="slick-slider"
                    data-slick-options='{"arrows":true,"centerMode":true,"centerPadding":"calc((100% - 1440px) / 2)","dots":true,"infinite":true,"responsive":[{"breakpoint":1200,"settings":{"arrows":false,"dots":false,"slidesToShow":3}},{"breakpoint":992,"settings":{"arrows":false,"dots":false,"slidesToShow":2}},{"breakpoint":576,"settings":{"arrows":false,"dots":false,"slidesToShow":2}}],"slidesToShow":4}'
                >
                </div>
            </section>

            <section class="z-index-2 position-relative pb-2">
                <div class="bg-body-secondary">
                    <div class="container">
                        <nav class="py-4 lh-30px" aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center py-1 mb-0">
                                <li class="breadcrumb-item"><a title="Home" href="<?= $base_url; ?>">Home</a></li>
                                <li class="breadcrumb-item"><a title="Shop" href="<?= $base_url . "collection"; ?>">Collection</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $data['dataproduct']->name ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>

            <div class="border-top w-100 h-1px"></div>
        </main>
        
        <div id="Spesifikasi" data-bs-scroll="false" class="offcanvas offcanvas-end">
            <div class="offcanvas-header fs-4">
                <h4 class="fs-5 font-primary offcanvas-title">Spesifikasi Produk</h4>
                <button type="button" class="btn-close btn-close-bg-none" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="far fa-times"></i>
                </button>
            </div>
            <div class="offcanvas-body lh-2 me-xl-auto pt-0 mb-2 mb-xl-0">
                <?= $data['dataproduct']->summary; ?>
            </div>
        </div>
        
        <!-- Footer -->
        <?php include 'views/include/footer.php'; ?>

        <?php include 'views/include/icons.php'; ?>

        <?php include 'views/include/cart.php'; ?>

        <!-- Nav Mobile -->
        <?php include 'views/include/navmobile.php'; ?>

        <script src="assets/js/jquery.min.js"></script>
    	<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendors/clipboard/clipboard.min.js"></script>
        <script src="assets/vendors/vanilla-lazyload/lazyload.min.js"></script>
        <script src="assets/vendors/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/vendors/lightgallery/lightgallery.min.js"></script>
        <script src="assets/vendors/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
        <script src="assets/vendors/lightgallery/plugins/thumbnail/lg-thumbnail.min.js"></script>
        <script src="assets/vendors/slick/slick.min.js"></script>
        <script src="assets/js/theme.min.js"></script>
        
        <script>
            let productid = $("#productid").val();

            // Fungsi untuk mengatur cookie
            function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + encodeURIComponent(value) + expires + "; path=/";
            }

            // Fungsi untuk mendapatkan cookie berdasarkan namanya
            function getCookie(name) {
                var cookieValue = null;
                if (document.cookie && document.cookie !== '') {
                    var cookies = document.cookie.split(';');

                    for (var i = 0; i < cookies.length; i++) {
                        var cookie = cookies[i].trim();

                        if (cookie.substring(0, name.length + 1) === (name + '=')) {
                            cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                            break;
                        }
                    }
                }
                return cookieValue;
            }

            function Harga(a) {
                let r = a.toString().split("").reverse().join("").match(/\d{1,3}/g);
                return r = r.join(".").split("").reverse().join(""), r
            }

            // Fungsi untuk memeriksa perubahan cookie
            function checkCookieChange(cookieName, callback) {
                var previousValue = getCookie(cookieName);

                setInterval(function() {
                    var currentValue = getCookie(cookieName);
                    if (currentValue !== previousValue) {
                        callback(currentValue);
                        previousValue = currentValue;
                    }
                }, 800); // Ubah nilai 1000 sesuai dengan kebutuhan interval (dalam milidetik)
            }

            $(".shop-down").on("click", (function(a) {
                a.preventDefault();
                var r = $(this).parent(".input-group"),
                    t = r.attr("data-ordermin"),
                    e = r.find("input:not([disabled])"),
                    s = parseInt(e.val());
                s - 1 < t && (s += 1, e.val(s))
            }));

            // START ADD TO BAG
            function getData() {
                let tanggal = new Date();

                let productid = $('#productid').val(),
                    slug = $('#slug').val(),
                    image = $('#image').val(),
                    nameproduct = $('#nameproduct').val(),
                    price = $('#price').val(),
                    saleprice = $('#saleprice').val(),
                    minorder = $('#minorder').val(),
                    quantity = $('#quantity-product').val(),
                    expiredct = tanggal.setTime(tanggal.getTime() + (180 * 24 * 60 * 60 * 1000));

                if (ctData != null) {
                    var cookie = {
                        productid: productid,
                        nameproduct: nameproduct,
                        price: price,
                        saleprice: saleprice,
                        minorder: minorder,
                        quantity: quantity,
                        image: image,
                        slug: slug,
                        expiredct: expiredct
                    };

                    var isDuplicate = false;
                    $.each(JSON.parse(getCookie("c__t")), function(a, product) {
                        if (product.slug === slug) {
                            isDuplicate = true;
                            return;
                        }
                    });

                    if (isDuplicate) {
                        alert("Produk sudah ada di Cart");
                        
                    } else {
                        ctData = JSON.parse(getCookie("c__t"));

                        ctData.push(cookie);
                        setCookie("c__t", JSON.stringify(ctData), 180);

                        $("#jmlcart").text(JSON.parse(getCookie("c__t")).length);

                        window.location.href = "produk/slug/" + slug; // navigate to new URL
                    }

                } else {
                    var cookie = [{
                        productid: productid,
                        nameproduct: nameproduct,
                        price: price,
                        saleprice: saleprice,
                        minorder: minorder,
                        quantity: quantity,
                        image: image,
                        slug: slug,
                        expiredct: expiredct
                    }];
                    setCookie("c__t", JSON.stringify(cookie), 180);

                    $("#CartList").append(`
                        <span class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square" id="jmlcart" style="--square-size: 18px">1</span>
                    `);

                    window.location.href = "produk/slug/" + slug; // navigate to new URL
                }
            };
            // END ADD TO BAG
            
            $.ajax({
                type: "POST",
                url: "product/rekomendasi_anda",
                cache: !0,
                dataType: "json",
                data: {
                    productid: productid
                },
                success: function(a) {
                    a ? ($.each(a, (function(a, r) {
                        if (r) {
                            if (0 != r.saleprice) var t = '<span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">\n                                                <del class="text-body fw-500 me-4 fs-13px">Rp ' + Harga(r.price) + '</del>\n                                                <ins class="text-decoration-none">Rp ' + Harga(r.saleprice) + "</ins>\n                                            </span>";
                            else t = '<span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">Rp ' + Harga(r.price) + "</span>";
                            $("#rekomendasi-anda").append('\n                                    <div class="mb-6">\n                                        <div class="card card-product grid-2 bg-transparent border-0">\n                                            <figure class="card-img-top position-relative mb-7 overflow-hidden">\n                                                <a href="produk/' + r.slug + '" class="hover-zoom-in d-block" title="' + r.pname + '">\n                                                    <img src="assets/images/placeholder.webp" data-src="images/produk/' + r.featured + '" class="img-fluid lazy-image w-100" alt="' + r.pname + '" width="330" height="440" />\n                                                </a>\n                                            </figure>\n                                            <div class="card-body text-center p-0">\n                                                ' + t + '\n                                                <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3"><a class="text-decoration-none text-reset" href="produk/' + r.slug + '">' + r.pname + "</a></h4>\n                                            </div>\n                                        </div>\n                                    </div>\n                                ")
                        }
                    }))) : $("#section-rekomendasi-anda").addClass("d-none"), $(".slick-slider").slick("refresh")
                },
                error: function(a) {
                    $("#section-rekomendasi-anda").addClass("d-none")
                }
            });
        </script>
    </body>
</html>