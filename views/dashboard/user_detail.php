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
                                    <h2 class="fs-4 mb-0">Update User</h2>
                                </div>

                                <div class="col-sm-6 d-flex flex-wrap justify-content-sm-end">
                                    <a href="dashboard/user/delete?id=<?= $user->id; ?>">
                                        <button type="submit" class="btn btn-danger">
                                            Delete
                                        </button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="card rounded-4">
                                <div class="card-body p-7">
                                    <form action="dashboard/user/update" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-8 mb-5">
                                                <div class="edit-profile-content card-box-style">
                                                    <h3>Edit Profile Info</h3>
                                                    <input type="hidden" name="id" value="<?= $user->id; ?>">
                    
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-5">
                                                            <div class="form-group">
                                                                <label id="nama">Name</label>
                                                                <input type="text" class="form-control" placeholder="Name" name="nama" id="nama" value="<?= $user->nama; ?>">
                                                            </div>
                                                        </div>
                    
                                                        <div class="col-lg-12 mb-5">
                                                            <div class="form-group">
                                                                <label id="email">Email</label>
                                                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="<?= $user->email; ?>">
                                                            </div>
                                                        </div>
                    
                                                        <div class="col-lg-6 mb-5">
                                                            <div class="form-group">
                                                                <label id="whatsapp">Phone Number</label>
                                                                <input type="number" class="form-control" placeholder="Phone Number" name="whatsapp" id="whatsapp" value="<?= $user->whatsapp; ?>">
                                                            </div>
                                                        </div>
                    
                                                        <div class="col-lg-6 mb-5">
                                                            <div class="form-group">
                                                                <label id="status">Status</label>
                                                                <select class="form-control" name="status" id="status">
                                                                    <option <?= ($user->status == '0' ? 'selected' : ''); ?> value="0">Non-Aktif</option>
                                                                    <option <?= ($user->status == '1' ? 'selected' : ''); ?> value="1">Aktif</option>
                                                                </select>
                                                            </div>
                                                        </div>
                    
                                                        <div class="save-update mb-5">
                                                            <button type="submit" class="btn btn-primary me-2">Update</button>
                                                            <button type="button" class="btn btn-danger" onclick="window.location.href='<?= $_SERVER['HTTP_REFERER']; ?>'">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="col-lg-4">
                                                <div class="edit-profile-content card-box-style">
                                                    <h3>Change Password</h3>
                    
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-5">
                                                            <div class="form-group mb-5">
                                                                <label id="oldpwd">Old Password</label>
                                                                <input type="password" class="form-control" name="oldpwd" id="oldpwd">
                                                            </div>
                                                            <div class="col-lg-12 mb-5">
                                                                <div class="form-group">
                                                                    <label id="newpwd">New Password</label>
                                                                    <input type="password" class="form-control" name="newpwd" id="newpwd">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 mb-5">
                                                                <div class="form-group">
                                                                    <label id="conpwd">Confirm Password</label>
                                                                    <input type="password" class="form-control" name="conpwd" id="conpwd">
                                                                </div>
                                                            </div>
                    
                                                            <div class="save-update mb-5">
                                                                <button type="submit" class="btn btn-primary me-2">Update</button>
                                                                <button type="button" class="btn btn-danger" onclick="window.location.href='<?= $_SERVER['HTTP_REFERER']; ?>'">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
        
        <script src="assets/js/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
    			    families:  ['Figtree:400,600,700'], display: 'swap'
    			},
                custom: {
                    families: ['Font Awesome\ 5 Pro:300,400','Font Awesome\ 5 Brands:400'],
                    urls: ['assets/css/fontawesome-all.min.css']
                },
            });
        </script>
    </body>
</html>