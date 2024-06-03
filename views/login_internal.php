<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Login Dashboard</title>
        <link rel="icon" href="assets/images/others/favicon.ico" />

        <base href="<?= $base_url; ?>" />

        <link rel="stylesheet" href="assets/vendors/lightgallery/css/lightgallery-bundle.min.css" />
        <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
        <link rel="stylesheet" href="assets/vendors/slick/slick.css" />
        <link rel="stylesheet" href="assets/vendors/mapbox-gl/mapbox-gl.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/themes.min.css" />
    </head>

    <body>
        <main id="content" class="wrapper layout-page">
            <section class="pb-lg-20 pb-16">
                <div class="container">
                    <div class="text-center pt-13 mb-12 mb-lg-15">
                        <div class="text-center"><h2 class="fs-36px mb-11 mb-lg-14">Login Dashboard</h2></div>
                    </div>

                    <div class="row no-gutters">
                        <div class="col-lg-10 mx-auto">
                            <div class="no-gutters mb-15 mb-lg-0 pe-xl-2">
                                <h3 class="fs-4 mb-10">Log In</h3>
                                <form action="login/do_login" method="post" enctype="multipart/form-data">
                                    <div class="form-group mb-6">
                                        <label for="email" class="visually-hidden">Email address</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required />
                                    </div>

                                    <div class="form-group mb-6">
                                        <label for="password" class="visually-hidden">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required />
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100 mb-7">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
        <script src="assets/js/theme.min.js"></script>

    </body>
</html>