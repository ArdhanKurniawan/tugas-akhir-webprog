<?php
require_once 'models/KatalogModel.php';
require_once 'models/SolutionModel.php';

require_once 'libraries/Constants.php';

use Dompdf\Dompdf;
use Dompdf\Options;

class Home {
    private $katalogModel;
    private $solutionModel;

    private $constants;

    public function index() {
        $this->katalogModel = new KatalogModel();
        $this->solutionModel = new SolutionModel();

        $this->constants = new Constants();

        $datakatalog = $this->katalogModel->SemuaKatalogAktif();
        $base_url = $this->constants->base_url();

        include 'views/include/header.php';
        include 'views/home.php';
    }

    public function pdf() {
        require 'vendor/autoload.php';

        $this->constants = new Constants();

        $data = json_decode($_COOKIE['c__t'], true);
        $base_url = $this->constants->base_url();

        // Inisialisasi domPDF
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);

        // Ambil HTML dari file atau string
        ob_start();
        include 'views/invoice_pdf.php'; // Pastikan ini adalah jalur yang benar ke file HTML Anda
        $html = ob_get_clean();

        // Memuat HTML ke domPDF
        $dompdf->loadHtml($html);

        // (Opsional) Mengatur ukuran kertas dan orientasi
        $dompdf->setPaper('A4', 'portrait');

        // Merender HTML sebagai PDF
        $dompdf->render();

        // Output PDF ke browser
        $dompdf->stream("invoice.pdf", array("Attachment" => 0));
    }
}