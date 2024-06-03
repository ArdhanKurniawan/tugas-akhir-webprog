<!DOCTYPE html>
<html lang="en">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/favicon-152x152.png">
    <link rel="apple-touch-icon" sizes="192x192" href="images/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="512x512" href="images/favicon-512x512.png">

    <base href="<?= $base_url; ?>">
    <title>Pesanan Saya - Delovery Bisnis</title>
    <meta name="description" content="Order">

    <!-- Meta Open Graph -->
    <meta property="og:locale" content="id_ID" />
    <meta property="og:title" content="Order">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.delovery.com/">
    <meta property="og:image" content="https://www.delovery.com/wp-content/uploads/2016/06/logo_florist.png">
    <meta property="og:image:secure_url" content="https://www.delovery.com/wp-content/uploads/2016/06/logo_florist.png">
    <meta property="og:description" content="Order" />

    <meta property="og:site_name" content="TOKO KARANGAN BUNGA ONLINE #1 INDONESIA" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Order" />
    <meta name="twitter:description" content="Pesan Bunga Mudah dan Cepat" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
    <link rel="preconnect" href="http://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        p {
            margin-top: -5px;
            margin-bottom: -5px;
            font-size: 0.875em;
        }

        .clearfix {
            overflow: auto;
        }

        p.thicker {
            font-weight: bold;
        }
        
        #pengirim_penerima {
            table-layout: fixed;
            width: 100%;
        }
        
        #pengirim_penerima th, #pengirim_penerima td {
            width: 50%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <table class="table table-borderless mt-0 mb-0">
            <tbody>
                <tr>
                    <td class="text-left"><img src="assets/images/static/delovery-logo.webp" alt="logo delovery"></td>
                    <td class="text-right">
                        <p class="mt-0 mb-0 bold">CV Melindo Digitama</p>
                        <p class="mt-0 mb-0 bold">Ruko Mataram Plaza</p>
                        <p class="mt-0 mb-0 bold">Jl. MT. Haryono No.427-429, Jagalan</p>
                        <p class="mt-0 mb-0 bold">Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50136</p>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <p class="bold mt-0 mb-0">Pesanan</p>
        
        <table class="table table-borderless mt-0 mb-0">
            <tbody>
                <tr>
                    <td class="text-left">
                        <p class="bold mt-0 mb-0">Status Pesanan</p>
                        <span class="btn btn-danger">BELUM LUNAS</span>
                    </td>

                    <td class="text-right">
                        <small>Last Update</small>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <table class="table mt-0 mb-0 text-left" id="pengirim_penerima">
            <thead>
                <tr>
                    <td>
                        <p class="bold">Pengiriman</p>
                    </td>
                    <td>
                        <p class="bold">Penerima</p>
                    </td>
                </tr>
            </thead>
            
            <tbody class="table-borderless">
                <tr>
                    <td>
                        <p class="mb-1 o-c">[Nama Pengirim]</p>
                        <p class="mb-1 o-c">[Nama Perusahaan]</p>
                        <p class="mb-1 o-c">[Email Pemesan]</p>
                        <p class="mb-1 o-c">[Telp Pemesan]</p>
                        <p class="mb-1 o-c">[Tanggal Kirim]</p>
                    </td>
                    
                    <td>
                        <p class="mb-1 o-c">[Nama Penerima]</p>
                        <p class="mb-1 o-c">[Telp Penerima]</p>
                        <p class="mb-1 o-c">[Alamat Penerima]</p>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <table class="table mt-0 mb-0">
            <thead>
                <tr>
                    <td>
                        <p class="bold">Produk</p>
                    </td>

                    <td>
                        <p class="bold">Quantity</p>
                    </td>

                    <td>
                        <p class="bold">Ucapan</p>
                    </td>
                </tr>
            </thead>
            
            <tbody class="table-borderless">
                <?php foreach ($data as $itemProduk) { ?>
                    <tr>
                        <td>
                            <div class="media clearfix">
                                <img class="mr-3" src="<?php $base_url; ?>images/produk/thumb/150-<?= $itemProduk["image"]; ?>" style="max-width: 100px; float: left;" alt="<?= $itemProduk["nameproduct"]; ?>">
                                <div class="media-body">
                                    <p class="bold"><?= $itemProduk["nameproduct"]; ?></p>
    
                                    <small>Kota Tujuan</small>
                                    <p class="bold">[Tempat Tujuan]</p>
                                </div>
                            </div>
                        </td>

                        <td><?= $itemProduk['quantity'] ?> Pcs</td>
    
                        <td>
                            <p class="text-left">[Ucapan]</p>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <table class="table mt-0 mb-0" style="clear: both;">
            <thead>
                <tr>
                    <td>
                        <p class="bold">Pembayaran</p>
                    </td>
                    <td>
                    </td>
                </tr>
            </thead>
            
            <tbody class="table-borderless">
                <tr>
                    <td>
                        <p>Metode Pembayaran</p>
                    </td>

                    <td>
                        <p class="bold">Payment Not Set</p>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <p class="">Harga</p>
                    </td>
                    <td>
                        <p class="">[Harga ke-2 Produk]</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="">Ongkos Kirim</p>
                    </td>
                    <td>
                        <p class="">Free</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="">Convenience Fee</p>
                    </td>
                    <td>
                        <p class="">Free</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="bold thicker">Total</p>
                    </td>
                    <td>
                        <p class="bold thicker">[Harga Total]</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Mulish:400,700', 'Karma:400,700']
            },
            custom: {
                families: ['Font Awesome\ 5 Pro:300,400', 'Font Awesome\ 5 Brands:400'],
                urls: ['assets/css/fontawesome-home.css']
            }

        });
    </script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>