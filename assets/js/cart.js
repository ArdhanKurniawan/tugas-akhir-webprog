let totalprice = 0,
    productwa = "",
    price,
    ctData;

// Fungsi untuk mengatur cookie
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + encodeURIComponent(value) + expires + "; path=/";
}

// Fungsi untuk mendapatkan cookie berdasarkan namanya
function getCookie(name) {
    var cookieValue = null;
    if (document.cookie && document.cookie !== "") {
        var cookies = document.cookie.split(";");

        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].trim();

            if (cookie.substring(0, name.length + 1) === name + "=") {
                cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                break;
            }
        }
    }
    return cookieValue;
}

// Fungsi untuk memeriksa perubahan cookie
function checkCookieChange(cookieName, callback) {
    var previousValue = getCookie(cookieName);

    setInterval(function () {
        var currentValue = getCookie(cookieName);
        if (currentValue !== previousValue) {
            callback(currentValue);
            previousValue = currentValue;
        }
    }, 800); // Ubah nilai 1000 sesuai dengan kebutuhan interval (dalam milidetik)
}

function Harga(a) {
    let r = a
        .toString()
        .split("")
        .reverse()
        .join("")
        .match(/\d{1,3}/g);
    return (r = r.join(".").split("").reverse().join("")), r;
}

ctData = JSON.parse(getCookie("c__t"));
if (ctData != null) {
    checkCookieChange("c__t", function (newValue) {
        totalprice = 0;

        $.each(JSON.parse(newValue), function (a, check) {
            if (check.saleprice == 0) {
                var uang = check.price;
            } else {
                var uang = check.saleprice;
            }

            var quantitycart = check.quantity;
            var subtotal = uang * quantitycart;
            totalprice += subtotal;
        });

        $("#total-price-cart").text("Rp " + Harga(totalprice));
    });

    $.each(ctData, function (a, product) {
        if (product.saleprice == 0) {
            price = `<span class="fs-15px fw-bold text-body-emphasis">Rp ` + Harga(product.price) + `</span>`;
            var uang = product.price;

        } else {
            price = `<span class="fs-13px fw-500 text-decoration-line-through pe-3">Rp ` + Harga(product.price) + `</span>
                	<span class="fs-15px fw-bold text-body-emphasis">Rp ` + Harga(product.saleprice) + `</span>`;
            var uang = product.saleprice;
        }

        $("#shoppingCart #listcart").append(
            `<tr class="position-relative">
				<td class="align-middle text-center" id="array-remove" data-slug="` + product.slug + `">
					<a class="d-block clear-product"><i class="far fa-times"></i></a>
				</td>

				<td class="shop-product">
					<div class="d-flex align-items-center">
						<div class="me-6">
							<img src="images/produk/` + product.image + `" width="60" height="80" alt="` + product.nameproduct + `">
						</div>

						<div class="">
							<p class="card-text mb-1"> ` + price + ` </p>
							<p class="fw-500 text-body-emphasis">` + product.nameproduct + `</p>
						</div>
					</div>
				</td>

				<td class="align-middle p-0">
					<div class="input-group position-relative shop-quantity" data-ordermin="` + product.minorder + `" data-slug="` + product.slug + `">
						<a href="#" class="shop-down position-absolute z-index-2 disable"><i class="far fa-minus"></i></a>
						<input name="number[]" id="quantity" type="number" class="form-control form-control-sm px-6 py-4 fs-6 text-center border-0" value="` + product.quantity + `" min="` + product.minorder + `" required readonly>
						<a href="#" class="shop-up position-absolute z-index-2"><i class="far fa-plus"></i></a>
					</div>
				</td>
			</tr>`
		);

        var quantitycart = product.quantity;
        var subtotal = uang * quantitycart;
        totalprice += subtotal;
    });

    $("#total-price-cart").text("Rp " + Harga(totalprice));

    // Untuk popup cart
    $(".shop-down").on("click", function (s) {
        s.preventDefault();
        var o = $(this).parent(".input-group"),
            z = o.attr("data-ordermin"),
            slug = o.attr("data-slug"),
            n = o.find("input:not([disabled])"),
            t = parseInt(n.val());

        t - 1 < z && ((t += 1), n.val(t));

        if (t == parseInt(z) + 1) {
            $("#quantityModal").modal("show");
            var modalBody = $("#quantityModal").find(".modal-dialog .modal-content .modal-body");
            modalBody.text("Tidak bisa ya, minimum " + z + " pcs");
        }

        ctData = JSON.parse(getCookie("c__t"));
		if (ctData) {
			var foundProduct = ctData.find(function (product) {
				return product.slug === slug;
			});

			if (foundProduct) {
				foundProduct.quantity = t - 1;
				setCookie("c__t", JSON.stringify(ctData), 180);
			}
		}
    });

    $(".shop-up").on("click", function (s) {
        s.preventDefault();
        var o = $(this).parent(".input-group"),
            slug = o.attr("data-slug"),
            n = o.find("input:not([disabled])"),
            t = n.val();
        t !== "" ? ((t = parseInt(t)), t, n.val(t)) : n.val(1);

        ctData = JSON.parse(getCookie("c__t"));
        var foundProduct = ctData.find(function (product) {
            return product.slug === slug;
        });

        if (foundProduct) {
            foundProduct.quantity = t + 1;
            setCookie("c__t", JSON.stringify(ctData), 180);
        }
    });

    $("a.clear-product").on("click", function () {
        var parent = $(this).parent("#array-remove"),
            arrayslug = parent.attr("data-slug"),
            rowDelete = this.parentNode.parentNode;

        if (JSON.parse(getCookie("c__t")).length == 1) {
            $("#jmlcart").remove();
            document.cookie = "c__t=; expires=Thu, 01 Jan 2000 00:00:00 UTC; path=/;";
        } else {
            $("#jmlcart").text(JSON.parse(getCookie("c__t")).length - 1);

            // Menghapus elemen array dengan properti 'slug' bernilai 'havra-sayra'
            var cookie = JSON.parse(getCookie("c__t")).filter(function (item) {
                return item.slug !== arrayslug;
            });

            setCookie("c__t", JSON.stringify(cookie), 180);
        }

        rowDelete.parentNode.removeChild(rowDelete);
    });
}