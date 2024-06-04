<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Dashboard - Glowing - Bootstrap 5 HTML Templates</title>
        <link rel="icon" href="assets/images/others/favicon.ico" />

        <base href="<?= $base_url; ?>" />

        <link rel="stylesheet" href="assets/vendors/lightgallery/css/lightgallery-bundle.min.css" />
        <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
        <link rel="stylesheet" href="assets/vendors/slick/slick.css" />
        <link rel="stylesheet" href="assets/vendors/mapbox-gl/mapbox-gl.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/theme.min.css" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    </head>

    <body>
    <div class="wrapper dashboard-wrapper">
            <div class="d-flex flex-wrap flex-xl-nowrap">
                <?php include 'views/dashboard/include/sidebar.php'; ?>

                <div class="page-content">
                    <?php include 'views/dashboard/include/navbar.php'; ?>

                    <main id="content" class="bg-body-tertiary-01 d-flex flex-column main-content">
                        <div class="dashboard-page-content">
                            <div class="row mb-9 align-items-center">
                                <div class="col-sm-6 mb-8 mb-sm-0">
                                    <h2 class="fs-4 mb-0">Dashboard</h2>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-sm-6 col-xxl-3 mb-7">
                                    <div class="card rounded-4">
                                        <div class="card-body p-7">
                                            <div class="d-flex">
                                                <div class="me-6">
                                                    <span class="square d-flex align-items-center justify-content-center fs-5 badge rounded-circle text-green bg-green-light" style="--square-size: 48px;">
                                                        <i class="far fa-qrcode"></i>
                                                    </span>
                                                </div>
    
                                                <div class="media-body">
                                                    <h6 class="mb-4 card-title">Jumlah Produk</h6>
                                                    <span class="fs-4 d-block font-weight-500 text-primary lh-12">0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-page-content">
                            <div class="row mb-9 align-items-center">
                                <div class="col-sm-6 mb-8 mb-sm-0">
                                    <h2 class="fs-4 mb-0">User</h2>
                                </div>

                                <div class="col-sm-6 mb-8 mb-sm-0">
                                    <div style="text-align: right;">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_user">
                                            <i class="bx bx-filter"></i> Add User
                                        </button>
                                    </div>
                                </div>

                                <form action="dashboard/user/add" method="post" enctype="multipart/form-data">
                                    <div class="modal fade" id="add_user" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="add_user" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Penambahan User</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="nama" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama ..." required>
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label for="whatsapp" class="form-label">WhatsApp</label>
                                                        <input type="number" class="form-control" id="whatsapp" name="whatsapp" placeholder="WhatsApp ...">
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email ..." required>
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label for="pwd" class="form-label">Password</label>
                                                        <input type="password" class="form-control" id="pwd" name="pwd" required>
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label for="status" class="form-label">Status</label>
                                                        <select class="form-control form-select" aria-label="pilih status" id="status" name="status">
                                                            <option value="1">Aktif</option>
                                                            <option value="0">Non-Aktif</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
    
                            <div class="row">
                                <?php foreach ($users as $user) { ?>
                                    <div class="col-sm-6 col-xxl-3 mb-7">
                                        <a href="dashboard/user/detail?id=<?= $user->id; ?>">
                                            <div class="card rounded-4">
                                                <div class="card-body p-7">
                                                    <div class="d-flex">
                                                        <div class="me-6">
                                                            <span class="square d-flex align-items-center justify-content-center fs-5 badge rounded-circle text-green bg-green-light" style="--square-size: 48px;">
                                                                <i class="far fa-user"></i>
                                                            </span>
                                                        </div>

                                                        <div class="media-body">
                                                            <h6 class="mb-4 card-title"><?= $user->nama; ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <?php include 'views/dashboard/include/footer.php'; ?>
                    </main>
                </div>
            </div>
        </div>

        <div class="position-fixed z-index-10 bottom-0 end-0 p-10">
            <a
                href="#"
                class="gtf-back-to-top text-decoration-none bg-body text-primary bg-primary-hover text-light-hover shadow square p-0 rounded-circle d-flex align-items-center justify-content-center"
                title="Back To Top"
                style="--square-size: 48px;"
            >
                <i class="fa-solid fa-arrow-up"></i>
            </a>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
        <script src="assets/vendors/chartjs/chart.min.js"></script>

        <script src="assets/vendors/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="assets/vendors/clipboard/clipboard.min.js"></script>
        <script src="assets/vendors/vanilla-lazyload/lazyload.min.js"></script>
        <script src="assets/vendors/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/vendors/lightgallery/lightgallery.min.js"></script>
        <script src="assets/vendors/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
        <script src="assets/vendors/lightgallery/plugins/thumbnail/lg-thumbnail.min.js"></script>
        <script src="assets/vendors/lightgallery/plugins/video/lg-video.min.js"></script>
        <script src="assets/vendors/lightgallery/plugins/vimeoThumbnail/lg-vimeo-thumbnail.min.js"></script>
        <script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="assets/vendors/slick/slick.min.js"></script>
        <script src="assets/vendors/gsap/gsap.min.js"></script>
        <script src="assets/vendors/gsap/ScrollToPlugin.min.js"></script>
        <script src="assets/vendors/gsap/ScrollTrigger.min.js"></script>
        <script src="assets/vendors/mapbox-gl/mapbox-gl.js"></script>
        <script src="assets/js/dashboard.min.js"></script>

        <script>
            $(document).ready(function() {
            });
        </script>
    </body>
</html>