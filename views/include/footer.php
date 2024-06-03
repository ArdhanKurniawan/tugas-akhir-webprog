<footer class="pt-14 pt-lg-14 pb-16 footer bg-body-tertiary">
    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-5 col-12 mb-12 mb-lg-0">
                <h3 class="mb-6">
                    <img
                        class="img-fluid light-mode-img loaded"
                        src="assets/images/static/delovery-logo.webp"
                        data-src="assets/images/static/delovery-logo.webp"
                        width="179"
                        height="26"
                        alt="Delovery Bisnis"
                        loading="lazy"
                        data-ll-status="loaded"
                    />
                </h3>
                <p class="pe-xl-23 mb-lg-11">Solusi praktis merchandise & gift untuk perusahaan Anda</p>
                <ul class="list-inline fs-18px mb-6">
                    <li class="list-inline-item me-6">
                        <a href="https://www.facebook.com/delovery.id" target="_blank"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="list-inline-item me-6">
                        <a href="https://www.instagram.com/delovery.id" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item me-6">
                        <a href="https://www.youtube.com/@delovery" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </li>
                    <li class="list-inline-item me-6">
                        <a href="https://www.youtube.com/@delovery" target="_blank"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="mailto:sales@delovery.com" target="_blank"><i class="fa fa-envelope"></i></a>
                    </li>
                </ul>
                
                <p class="mb-0">© Delovery</p>
            </div>
            <div class="col-lg col-md-4 col-6 mb-11 mb-lg-0">
                <h3 class="fs-5 mb-6 font-primary">Company</h3>

                <ul class="list-unstyled mb-0 fw-medium">
                    <li class="pt-3 mb-4">
                        <a href="about-us" title="Tentang Kami" class="text-body">Tentang Kami</a>
                    </li>

                    <li class="pt-3 mb-4">
                        <a href="https://karir.delovery.com" title="Karir" class="text-body">Karir</a>
                    </li>

                    <li class="pt-3 mb-4">
                        <a href="https://www.delovery.com/press-release" title="Press Release" class="text-body">Press Release</a>
                    </li>

                    <li class="pt-3 mb-4">
                        <a href="https://www.delovery.com/blog" title="Blog" class="text-body">Blog</a>
                    </li>

                </ul>
            </div>
            <div class="col-lg col-md-4 col-6 mb-11 mb-lg-0">
                <h3 class="fs-5 mb-6 font-primary">Information</h3>

                <ul class="list-unstyled mb-0 fw-medium">
                    <li class="pt-3 mb-4">
                        <a href="https://www.delovery.com/join-mitra" title="Join Mitra" class="text-body">Join Mitra</a>
                    </li>

                    <li class="pt-3 mb-4">
                        <a href="https://www.delovery.com/term-condition" title="Term & Condition" class="text-body">Term & Condition</a>
                    </li>

                    <li class="pt-3 mb-4">
                        <a href="https://www.delovery.com/privacy-policy" title="Privacy Policy" class="text-body">Privacy Policy</a>
                    </li>

                    <li class="pt-3 mb-4">
                        <a href="mailto:management@delovery.com" title="Layanan Pengaduan" class="text-body">Layanan Pengaduan</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg col-md-4 col-12 mb-11 mb-lg-0">
                <h3 class="fs-5 mb-6 font-primary">Business Inquiries</h3>

                <ul class="list-unstyled mb-0 fw-medium">
                    <li class="pt-3 mb-4">
                        <a href="https://wa.me/62811279577" aria-label="Phone"><i class="fab fa-whatsapp me-2"></i> 0811-279-577</a>
                    </li>

                    <li class="pt-3 mb-4">
                        <a href="mailto:corporate@delovery.com" aria-label="Email"><i class="fa fa-envelope me-2"></i> corporate@delovery.com</a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</footer>

<?php 
    if(isset($_GET['tsrc'])) { 
        
    $trafik = $this->TrafikModel->view($_GET['tsrc']);
    if($trafik) {
?>
<script type="text/javascript" src="https://gass.co.id/gassv3.min.js?v=3"></script><script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        </script><script async src="https://www.googletagmanager.com/gtag/js?id=AW-10991563103"></script><script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config', 'AW-10991563103');
        </script><script>gass.run({adw_tag:'AW-10991563103',campaign_id:<?= $trafik->idgass; ?>, subdomain:'chat.delovery.com', interval:2}, function(data){});</script>
<?php }} ?>