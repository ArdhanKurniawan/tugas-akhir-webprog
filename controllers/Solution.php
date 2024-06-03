<?php
require_once 'models/KatalogModel.php';
require_once 'models/ProdukModel.php';
require_once 'models/SolutionModel.php';

require_once 'libraries/Constants.php';

class Solution {
    private $katalogModel;
    private $produkModel;
    private $solutionModel;

    private $constants;

    public function slug($slug)
	{
        $this->katalogModel = new KatalogModel();
        $this->solutionModel = new SolutionModel();
        $this->produkModel = new ProdukModel();

        $this->constants = new Constants();

		$datasolution = $this->solutionModel->SolutionBySlug($slug);
		$datacollection = $this->solutionModel->catalog_solution(null, $datasolution->id);
		if ($datasolution) {
			if ($datacollection) {
				foreach ($datacollection as $key) {
					$value = (array)$key;
					$produk = $this->produkModel->ProductByCatalogID($value['catalog_id'], 8);
					
					$items[$value['catalog_name']]['id']  = $value['catalog_id'];
					$items[$value['catalog_name']]['name']  = $value['catalog_name'];
					$items[$value['catalog_name']]['slug']  = $value['catalog_slug'];
					$items[$value['catalog_name']]['produk']  =  $produk;
				}
				$catalogproduk = $items;
				
			} else {
				$catalogproduk = false;
			}
			
			$page = $datasolution;
            $base_url = $this->constants->base_url();
			
            include 'views/include/header.php';

			if ($slug == 'event-merchandise') {
                include 'views/event-merchandise.php';
    
    		} elseif ($slug == 'corporate-gift') {
                include 'views/corporate-gift.php';
    
    		} elseif ($slug == 'employee-gift') {
                include 'views/employee-gift.php';
    			
    		} elseif ($slug == 'pr-package') {
                include 'views/pr-package.php';
    		}
		} 
	}
}