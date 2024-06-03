<?php
    $slugcategory = null;
    if(isset($_GET['category'])) {
        if ($_GET['category']) $slugcategory = $_GET['category'];
    }
    
    $budgetproduk = null;
    if(isset($_GET['range'])) {
        if ($_GET['range']) $budgetproduk = $_GET['range'];
    }
?>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title fs-3 font-primary" id="offcanvasExampleLabel">Filter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <aside class="primary-sidebar">
            <?php if (isset($relatedkatalog) && $relatedkatalog) { ?>
                <div class="widget widget-product-category">
                    <h4 class="widget-title fs-5 mb-6">Kategori</h4>
                    <?php foreach ($relatedkatalog as $key) { ?>
                        <?php foreach ($key as $value) { if ($value) { ?>
                            <ul class="navbar-nav navbar-nav-cate" id="widget_product_category">
                                <li class="nav-item">
                                    <input type="checkbox" data-category="<?= $value->slug; ?>" id="product_category" name="product_category" <?= $slugcategory ? in_array($value->slug, $slugcategory) !== false ? "checked" : "" : ""; ?>>
                                    <label for="product_category">
                                        <a href="#" data-category="<?= $value->slug; ?>" title="<?= $value->name; ?>" class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center text-uppercase fs-14px fw-semibold letter-spacing-5">
                                            <span class="text-hover-underline"><?= $value->name; ?></span>
                                        </a>
                                    </label>
                                </li>
                            </ul>
                        <?php }} ?>
                    <?php } ?>
                </div>
            <?php } ?>

            <?php if (isset($subkatalog) && $subkatalog) { ?>
                <div class="widget widget-product-hightlight">
                    <h4 class="widget-title fs-5 mb-6">Occasion</h4>
                    <?php foreach ($subkatalog as $val) { ?>
                        <ul class="navbar-nav navbar-nav-cate" id="widget_product_hightlight">
                            <li class="nav-item">
                                <input type="checkbox" data-category="<?= $val->slug; ?>" id="product_category" name="product_category" <?= $slugcategory ? in_array($val->slug, $slugcategory) !== false ? "checked" : "" : ""; ?>>
                                <label for="product_category">
                                    <a href="#" data-category="<?= $val->slug; ?>" title="<?= $val->name ?>" class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center">
                                        <span class="text-hover-underline"><?= $val->name ?></span>
                                    </a>
                                </label>
                            </li>
                        </ul>
                    <?php } ?>
                </div>
            <?php } ?>

            <div class="widget widget-product-price">
                <h4 class="widget-title fs-5 mb-6">Harga</h4>
                <ul class="navbar-nav navbar-nav-cate" id="widget_product_price">
                    <li class="nav-item">
                        <input type="checkbox" id="product_price" name="product_price" <?= $budgetproduk == "all" ? "checked" : ""; ?>>
                        <label for="product_price">
                            <a href="#" data-budget="all" class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center">
                                <span class="text-hover-underline">All</span>
                            </a>
                        </label>
                    </li>
                    <li class="nav-item">
                        <input type="checkbox" id="product_price" name="product_price" <?= $budgetproduk == "<500 Ribu" ? "checked" : ""; ?>>
                        <label for="product_price">
                            <a href="#" data-budget="<500 Ribu" class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center">
                                <span class="text-hover-underline">< 500 Ribu</span>
                            </a>
                        </label>
                    </li>
                    <li class="nav-item">
                        <input type="checkbox" id="product_price" name="product_price" <?= $budgetproduk == "500 Ribu - 700 Ribu" ? "checked" : ""; ?>>
                        <label for="product_price">
                            <a href="#" data-budget="500 Ribu - 700 Ribu" class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center">
                                <span class="text-hover-underline">500 Ribu - 700 Ribu</span>
                            </a>
                        </label>
                    </li>
                    <li class="nav-item">
                        <input type="checkbox" id="product_price" name="product_price" <?= $budgetproduk == "700 Ribu - 1 Juta" ? "checked" : ""; ?>>
                        <label for="product_price">
                            <a href="#" data-budget="700 Ribu - 1 Juta" class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center">
                                <span class="text-hover-underline">700 Ribu - 1 Juta</span>
                            </a>
                        </label>
                    </li>
                    <li class="nav-item">
                        <input type="checkbox" id="product_price" name="product_price" <?= $budgetproduk == ">1 Juta" ? "checked" : ""; ?>>
                        <label for="product_price">
                            <a href="#" data-budget=">1 Juta" class="text-reset position-relative d-block text-decoration-none text-body-emphasis-hover d-flex align-items-center">
                                <span class="text-hover-underline">>1 Juta</span>
                            </a>
                        </label>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const budgetLinks = document.querySelectorAll('#widget_product_price a[data-budget]');
        
        const category1Links = document.querySelectorAll('#widget_product_category a[data-category]');
        const category1Checkbox = document.querySelectorAll('#widget_product_category input#product_category');
        
        const category2Links = document.querySelectorAll('#widget_product_hightlight a[data-category]');
        const category2Checkbox = document.querySelectorAll('#widget_product_hightlight input#product_hightlight');

        category1Links.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const category1 = this.dataset.category;
                toggleUrlParameterCatalogOccasion('category[]', category1);
            });
        });
        
        category1Checkbox.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const category1 = this.dataset.category;
                toggleUrlParameterCatalogOccasion('category[]', category1);
            });
        });

        category2Links.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const category2 = this.dataset.category;
                toggleUrlParameterCatalogOccasion('category[]', category2);
            });
        });
        
        category2Checkbox.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const category2 = this.dataset.category;
                toggleUrlParameterCatalogOccasion('category[]', category2);
            });
        });

        budgetLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const budget = this.dataset.budget;
                toggleUrlParameterBudget('range', budget);
            });
        });

        // Untuk budget
        function toggleUrlParameterBudget(key, value) {
            const url = new URL(window.location.href);
            const params = new URLSearchParams(url.search);

            if (params.get(key) === value) {
                // Jika parameter dengan value yang sama sudah ada, hapus parameter tersebut
                params.delete(key);
            } else {
                // Jika parameter belum ada, tambahkan parameter baru
                params.set(key, value);
            }

            url.search = params.toString();
            window.history.replaceState(null, '', url.toString());
            location.reload();
        }

        // Untuk catalog dan occasion
        function toggleUrlParameterCatalogOccasion(key, value) {
            const url = new URL(window.location.href);
            const params = new URLSearchParams(url.search);

            const selectedBudgets = params.getAll(key);

            if (selectedBudgets.includes(value)) {
                // Jika parameter dengan value yang sama sudah ada, hapus semua parameter tersebut
                // selectedBudgets.forEach(val => params.delete(key, val));

                params.delete(key);
                selectedBudgets.filter(val => val !== value).forEach(val => params.append(key, val));
            } else {
                // Jika parameter belum ada, tambahkan parameter baru
                params.append(key, value);
            }

            url.search = params.toString();
            window.history.replaceState(null, '', url.toString());
            location.reload();
        }
    });
</script>