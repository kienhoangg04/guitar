<?php

if (!isset($_SESSION['user']) || $_SESSION['user'] == null)
{
	header('Location: http://localhost:403/Guitar/index.php?controller=login');
	exit();
}

class SearchController extends BaseController
{
	protected $categoryModel;
	protected $productModel;

	public function __construct()
	{
		$this->loadModel('CategoryModel');
		$this->loadModel('ProductModel');

		$this->categoryModel = new CategoryModel;
		$this->productModel  = new ProductModel;
	}

	// tìm kiếm
	public function index()
	{	
		$categoriesMenu = $this->categoryModel->getcategoryForMenu();

		// Search
		$params = $_POST;
		$productSearch = $this->productModel->search($params);
		
		$this->view('frontend.searchs.show', [
			'menus'        => $categoriesMenu,
			'products' => $productSearch,
		]);
	}
}

?>