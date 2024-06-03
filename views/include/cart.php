<div id="shoppingCart" data-bs-scroll="false" class="offcanvas offcanvas-end">
    <div class="offcanvas-header fs-4">
        <h4 class="offcanvas-title fw-semibold font-primary">Pilihan Anda</h4>
        <button type="button" class="btn-close btn-close-bg-none" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="far fa-times"></i>
        </button>
    </div>
    <div class="offcanvas-body me-xl-auto pt-0 mb-2 mb-xl-0">
        <form class="table-responsive-md shopping-cart pb-8 pb-lg-10">
            <table class="table table-borderless">
                <thead>
                    <tr class="fw-500">
                        <td colspan="3" class="border-bottom pb-6"></td>
                    </tr>
                </thead>
                <tbody id="listcart"></tbody>
            </table>
        </form>
    </div>

    <div class="offcanvas-footer flex-wrap">
        <!-- <a href="whatsapp/chatWA" class="btn btn-dark w-100 mb-7" title="Chat Whatsapp">Chat Whatsapp</a> -->
        
        <?php if (isset($_COOKIE['c__t'])) { ?>
            <a href="whatsapp/chatWA" class="btn btn-dark w-50 mb-7 px-2" title="Chat Whatsapp">Chat Whatsapp</a>
            <a href="<?= $base_url ?>home/pdf" class="btn btn-success w-50 mb-7" title="Invoice">Invoice</a>
            
        <?php } else { ?>
            <a href="whatsapp/chatWA" class="btn btn-dark w-100 mb-7" title="Chat Whatsapp">Chat Whatsapp</a>
        <?php } ?>
    </div>
</div>

<div class="modal fade" id="quantityModal" tabindex="-1" aria-labelledby="quantityModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quantityModalLabel">Minimum Quantity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script defer src="assets/js/cart.js"></script>