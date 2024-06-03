<?php

$data['rawkatalog'] = $this->katalogModel->SemuaKatalogAktif();
if ($data['rawkatalog']) {
	$data['katalog1'] = array_slice($data['rawkatalog'], 0, round(count($data['rawkatalog']) / 2));

	if ($data['katalog1'] == 1 && count($data['rawkatalog']) == 2) {
		$data['katalog2'] = array_slice($data['rawkatalog'], 1, 1);

	} else if (count($data['rawkatalog']) > 2) {
		$data['katalog2'] = array_slice($data['rawkatalog'], round(count($data['rawkatalog']) / 2));
	}
}

$data['solutions'] = $this->solutionModel->allSolution();

?>

<header id="header" class="header header-sticky-smart disable-transition-all z-index-5 bisnis">
    <div class="sticky-area">
        <div class="main-header nav navbar bg-body navbar-light navbar-expand-xl py-5 py-xl-0">
            <div class="container-wide container flex-nowrap">
                <div class="d-flex d-xl-none">
                    <button class="navbar-toggler align-self-center border-0 shadow-none px-0 canvas-toggle p-4" type="button"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offCanvasNavBar"
                            aria-controls="offCanvasNavBar"
                            aria-expanded="false"
                            aria-label="Toggle Navigation">
                        <span class="fs-24 toggle-icon"></span>
                    </button>
                </div>

                <div class="w-xl-50 ms-6">
                    <a href="./" class="navbar-brand px-0 py-4 mx-auto">
                        <img class="light-mode-img lazy-image" src="assets/images/static/delovery-logo-lz.webp" data-src="assets/images/static/delovery-logo.webp" width="155" height="40" alt="Delovery Bisnis">
                    </a>
                </div>
                
                <ul class="d-none d-xl-flex navbar-nav">
                    <li class="nav-item transition-all-xl-1 py-xl-10 py-0 mx-xl-6 dropdown dropdown-hover text-nowrap">
                        <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-bold fs-6"
                            href="./">Home
                        </a>
                        
                    </li>
                    <li class="nav-item transition-all-xl-1 py-xl-10 py-0 mx-xl-6 dropdown dropdown-hover dropdown-fullwidth position-static">
                        <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-bold fs-6 dropdown-toggle"
                            href="#"
                            data-bs-toggle="dropdown"
                            id="menu-item-pages"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            Solutions
                        </a>

                        <ul class="dropdown-menu p-0" aria-labelledby="menu-item-pages">
                            <?php foreach ($data['solutions'] as $solutions) { ?>
                                <li>
                                    <a class="dropdown-item py-6 pe-10 ps-8 border-hover" href="solution/slug/<?= $solutions->slug; ?>?utm_source=nav-menu&utm_medium=lg">
                                        <span class="border-hover-target">
                                            <?= $solutions->name; ?>
                                        </span>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    
                    <li class="nav-item transition-all-xl-1 py-xl-10 py-0 mx-xl-6 dropdown dropdown-hover dropdown-fullwidth">
                        <a
                            class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-bold fs-6 dropdown-toggle"
                            href="#"
                            data-bs-toggle="dropdown"
                            id="menu-item-blocks"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            Collections
                        </a>
                        <div class="dropdown-menu mega-menu start-0" aria-labelledby="menu-item-blocks" style="width: 600px;">
                            <div class="megamenu-home container py-2 px-12">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="fs-18px">
                                            <a href="collection" class="text-secondary-hover text-decoration-none py-3 d-block">
                                                <span class="border-hover-target">Shop All Products <svg class="icon"><use xlink:href="#icon-arrow-right"></use></svg></span>
                                            </a><div class="dropdown-divider"></div>
                                            
                                        </h6>
                                    </div>
                                    
                                    <div class="col mt-5">
                                        <ul class="list-unstyled">
                                            <?php foreach ($data['katalog1'] as $katalog1) { ?>
                                            <li>
                                                <a href="collection/<?= $katalog1->slug; ?>" class="fs-15px fw-bold border-hover text-decoration-none py-4 d-block">
                                                    <span class="border-hover-target"><?= $katalog1->name; ?></span>
                                                </a>
                                            </li>
                                                    
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    
                                    <div class="col mt-5">
                                        <ul class="list-unstyled">
                                            
                                            <?php foreach ($data['katalog2'] as $katalog2) { ?>
                                            <li>
                                                <a href="collection/<?= $katalog2->slug; ?>" class="fs-15px fw-bold border-hover text-decoration-none py-4 d-block">
                                                    <span class="border-hover-target"><?= $katalog2->name; ?></span>
                                                </a>
                                            </li>
                                                    
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li class="nav-item transition-all-xl-1 py-xl-10 py-0 mx-xl-6 dropdown dropdown-hover text-nowrap">
                        <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-bold fs-6"
                            href="projects">Projects
                        </a>
                    </li>
                    <li class="nav-item transition-all-xl-1 py-xl-10 py-0 mx-xl-6 dropdown dropdown-hover text-nowrap">
                        <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 fw-bold fs-6"
                            href="about-us">About Us
                        </a>
                    </li>
                </ul>
                
                <div class="icons-actions d-flex justify-content-end w-xl-50 fs-23px text-body-emphasis">
                    <div class="px-xl-5 d-inline-block d-sm-none">
                        <a href="#" class="lh-1 color-inherit text-decoration-none">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                    <div class="px-5 d-none d-xl-inline-block">
                        <a href="#" class="btn btn-secondary hover-shine">Request Quote
                            <svg class="icon"><use xlink:href="#icon-arrow-right"></use></svg>
                        </a>
                    </div>
                    
                    <div class="px-5 d-xl-inline-block">
                        <a class="position-relative lh-1 color-inherit text-decoration-none" id="CartList" href="#" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-expanded="false">
                            <svg class="icon icon-star-light">
                                <use xlink:href="#icon-shopping-bag-open-light"></use>
                            </svg>

                            <?php if (isset($_COOKIE['c__t'])) { ?>
                                <span class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square" id="jmlcart" style="--square-size: 18px">
                                    <?= count(json_decode($_COOKIE['c__t'], true)); ?>
                                </span>
                            <?php } ?>
                        </a>
                    </div>
                    
                    <!-- <div class="px-5 d-none fs-28px d-xl-inline-block">
                        <a class="position-relative lh-1 color-inherit text-decoration-none" href="#" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-expanded="false">
                            <svg class="icon icon-star-light">
                                <use xlink:href="#icon-shopping-bag-open-light"></use>
                            </svg>
                            <span class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square" style="--square-size: 18px">0</span>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</header>