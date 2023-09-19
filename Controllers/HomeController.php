<?php 

if (!isset($_SESSION['user']) || $_SESSION['user'] == null)
{
	header('Location: http://localhost:403/Guitar/index.php?controller=login');
	exit();
}

?>

<?php 

class HomeController extends BaseController
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

	// trang chủ
	public function index()
	{	
		// Lấy categories và products 
		$categoriesMenu = $this->categoryModel->getcategoryForMenu();
		$products     = $this->productModel->getProductHome(1,12);
		$productBooks = $this->productModel->getProductHome(8,16);

		$this->view('frontend.home.index', [
			'menus'        => $categoriesMenu,
			'products'     => $products,
			'productBooks' => $productBooks,
		]);
	}
}

?>