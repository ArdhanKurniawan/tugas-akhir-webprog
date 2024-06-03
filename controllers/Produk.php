<?php

require_once 'models/KatalogModel.php';
require_once 'models/ProdukModel.php';
require_once 'models/SolutionModel.php';

require_once 'libraries/Constants.php';

class Produk {
	private $katalogModel;
    private $produkModel;
    private $solutionModel;

    private $constants;
    
    public function slug($slug)
    {
		$this->katalogModel = new KatalogModel();
        $this->produkModel = new ProdukModel();
        $this->solutionModel = new SolutionModel();

        $this->constants = new Constants();
		$base_url = $this->constants->base_url();

        if ($slug == null) {
			header("Location: " . $base_url); exit();
		}

		
        $dataproduct = $this->produkModel->ProductBySlug($slug);
        if ($dataproduct) {
            $data = $this->prepareProductData($dataproduct);

			// var_dump($data);
			// die();

			include 'views/include/header.php';
			include 'views/produk.php';
			
        } else {
            header("Location: " . $base_url); exit();
        }
    }

    private function prepareProductData($dataproduct)
    {
		$this->produkModel = new ProdukModel();

		$this->constants = new Constants();
		$base_url = $this->constants->base_url();

        if (count(unserialize($dataproduct->images)) > 1) {
            $list_image = unserialize($dataproduct->images);
            $imagefeatured[] = $dataproduct->featured;

            $indexArray = array_search($imagefeatured[0], $list_image);
            
            if ($indexArray !== false) {
                unset($list_image[$indexArray]);
            }
            
            $images = array_merge($imagefeatured, $list_image);
        } else {
            $images = unserialize($dataproduct->images);
        }

        $katalog = $this->produkModel->product_catalog($dataproduct->id);
        foreach ($katalog as $katalogitem) {
            $kategori[] = '<a href="collection/' . $katalogitem->slug . '">' . $katalogitem->name . '</a>';
        }

        $city = $this->produkModel->product_city($dataproduct->id);
        foreach ($city as $cityitem) {
            $city_arr[] = $cityitem->city_name;
        }

        $listareakirim = $this->produkModel->product_area($dataproduct->id);
        if ($listareakirim) {
            foreach ($listareakirim as $dtareakirim) {
                $areakirim[] = $dtareakirim->area;
            }
            $areakirim = implode(", ", $areakirim);
        } else {
            $areakirim = false;
        }

        $link = "https://api.whatsapp.com/send?phone=628122883155&text=Halo%20Debi%2C%20Saya%20ingin%20pesan%20%3A%0A" . urlencode($base_url . "produk/" . $dataproduct->slug) . "%0A%0ATanggal%3A%0A%0AKota%3A%0A%0ALokasi%3A%0A%0ABisa%20dibantu%3F";

        return [
            'dataproduct' => $dataproduct,
            'images' => $images,
            'katalog' => implode(", ", $kategori),
            'city' => implode(", ", $city_arr),
            'areakirim' => $areakirim,
            'link' => $link
        ];
    }
    
    public function rekomendasi_anda()
    {
		$idproduct = $_POST['productid'];
        
		$this->constants = new Constants();
		$base_url = $this->constants->base_url();

        if (isset($idproduct)) {
			$this->produkModel = new ProdukModel();
			$this->solutionModel = new SolutionModel();

            $datacatalogproduct = $this->produkModel->product_catalog($idproduct);
            $datasolutionproduct = $this->produkModel->product_solution($idproduct);
            
            if ($datasolutionproduct != false) {
                $catalog = [];
                foreach ($datasolutionproduct as $key) {
                    $catalog[] = $this->solutionModel->catalog_solution(null, $key->id);
                }

                $mergedArrayCatalog = $this->mergeCatalogArrays($catalog);

                if ($mergedArrayCatalog) {
                    $listproduct = $this->getRekomendasiProducts($mergedArrayCatalog, $datacatalogproduct);

                    $finalArray = $this->prepareFinalArray($listproduct);
                    echo json_encode($finalArray);
                } else {
                    echo json_encode(false);
                }
            } else {
                echo json_encode(false);
            }

        } else {
            header("Location: " . $base_url); exit();
        }
    }

    private function mergeCatalogArrays($catalog)
    {
        $mergedArrayCatalog = [];
        foreach ($catalog as $array) {
            if (is_array($array)) {
                $mergedArrayCatalog = array_merge_recursive($mergedArrayCatalog, $array);
            }
        }
        return $mergedArrayCatalog;
    }

    private function getRekomendasiProducts($mergedArrayCatalog, $datacatalogproduct)
    {
		$this->produkModel = new ProdukModel();

        $catalog_arr = [];
        foreach ($datacatalogproduct as $catalog) {
            $catalog_arr[] = $catalog->catalog_id;
        }

        $listproduct = [];
        foreach ($mergedArrayCatalog as $catalog) {
            if (!in_array($catalog->catalog_id, $catalog_arr)) {
                $listproduct[] = $this->produkModel->product_rekomendasi_anda($catalog->catalog_id, $catalog_arr, 2);
            }
        }
        return $listproduct;
    }

    private function prepareFinalArray($listproduct)
    {
        $mergedArrayProduct = [];
        $falseArrayProduct = [];
        foreach ($listproduct as $dataproduct) {
            if (is_array($dataproduct)) {
                $mergedArrayProduct = array_merge_recursive($mergedArrayProduct, $dataproduct);
            } elseif ($dataproduct === false) {
                $falseArrayProduct[] = $dataproduct;
            }
        }
        $finalArray = array_merge_recursive($mergedArrayProduct, $falseArrayProduct);
        return array_reverse(array_values(array_column(array_reverse($finalArray), null, 'slug')));
    }
}