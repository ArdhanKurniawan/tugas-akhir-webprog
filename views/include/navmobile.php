<?php

$data['rawkatalog'] = $this->katalogModel->SemuaKatalogAktif();

$data['solutions'] = $this->solutionModel->allSolution();
?>

<div class="navbar bisnis">
    <div id="offCanvasNavBar" class="offcanvas offcanvas-start" style="--bs-offcanvas-width: 100%;">
        <div class="offcanvas-header px-6 py-2">
            <h3 class="offcanvas-title text-uppercase">
                <img class="light-mode-img lazy-image" src="assets/images/static/delovery-logo-lz.webp" data-src="assets/images/static/delovery-logo.webp" width="155" height="40" alt="Delovery Bisnis">
            </h3>
            
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
        <hr class="mt-0" />
        
        <div class="offcanvas-body pt-0 mb-2">
            <ul class="navbar-nav">
                <li class="nav-item transition-all-xl-1 py-0">
                    <a
                        class="nav-link d-flex justify-content-between position-relative text-uppercase fw-semibold ls-1 fs-15px"
                        href="./"
                        id="menu-item-home-canvas"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        Home
                    </a>
                </li>
                <li class="nav-item transition-all-xl-1 py-0 dropdown">
                    <a class="nav-link d-flex justify-content-between position-relative text-uppercase fw-semibold ls-1 fs-15px dropdown-toggle"  href="#" data-bs-toggle="dropdown"
                        id="menu-item-pages-canvas"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        Solutions
                    </a>
                    <ul class="dropdown-menu py-6" aria-labelledby="menu-item-pages-canvas">
                        
                        <?php foreach ($data['solutions'] as $solutions) { ?>
                        <li>
                            <a class="dropdown-item pe-6 border-hover" href="solution/slug/<?= $solutions->slug; ?>?utm_source=nav&utm_medium=sm">
                                <span class="border-hover-target">
                                    <?= $solutions->name; ?>
                                </span>
                            </a>
                        </li>
                        <?php } ?>
                        
                    </ul>
                </li>
                
                <li class="nav-item transition-all-xl-1 py-0 dropdown">
                    <a class="nav-link d-flex justify-content-between position-relative text-uppercase fw-semibold ls-1 fs-15px dropdown-toggle"  href="#" data-bs-toggle="dropdown"
                        id="collections-menu"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        Collections
                    </a>
                    <ul class="dropdown-menu py-6" aria-labelledby="collections-menu">
                        <?php foreach ($data['rawkatalog'] as $katalog) { ?>
                        
                        <li>
                            <a class="dropdown-item pe-6 border-hover" href="collection/<?= $katalog->slug; ?>">
                                <span class="border-hover-target">
                                    <?= $katalog->name; ?>
                                </span>
                            </a>
                        </li>
                            
                        <?php } ?>
                        
                    </ul>
                </li>
                <li class="nav-item transition-all-xl-1 py-0">
                    <a
                        class="nav-link d-flex justify-content-between position-relative text-uppercase fw-semibold ls-1 fs-15px"
                        href="projects"
                    >
                        Projects
                    </a>
                </li>
                <li class="nav-item transition-all-xl-1 py-0">
                    <a
                        class="nav-link d-flex justify-content-between position-relative text-uppercase fw-semibold ls-1 fs-15px"
                        href="about-us"
                    >
                        About Us
                    </a>
                </li>
                
                
            </ul>
        </div>
        <hr class="mb-0" />
        <div class="offcanvas-footer bg-body-tertiary">
            © Delovery. <br />
            All rights reserved.
        </div>
    </div>
</div>