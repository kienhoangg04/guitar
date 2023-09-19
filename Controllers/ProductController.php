<?php 

if (!isset($_SESSION['user']) || $_SESSION['user'] == null)
{
	header('Location: http://localhost:403/Guitar/index.php?controller=login');
	exit();
}

?>

<?php 

class ProductController extends BaseController
{	
	private $productModel;

	// Hàm khởi tạo, chạy đầu tiên
	public function __construct()
	{
		// Model
		$this->loadModel('ProductModel');
		$this->loadModel('CategoryModel');
		$this->productModel  = new ProductModel;
		$this->categoryModel = new CategoryModel;
	}

	// không dùng
	public function index()
	{
		$selectColumn = ['*'];
		$orders = ['column' => 'id', 'order' => 'asc'];
		$limit  = '15';
		// Model
		$products = $this->productModel->getAll($selectColumn, $orders, $limit);

		// View
		// $this->view('frontend.products.index', []);
	}

	// chi tiết 1 sản phẩm
	public function show()
	{
		$productId = $_GET['id'] ?? null;
		// Model
		// Lấy menu
		$categoriesMenu = $this->categoryModel->getcategoryForMenu();
		// Lấy ra 1 sản phẩm
		$product        = $this->productModel->getDetail($productId);
		// Sản phẩm liên quan
		$products     	= $this->productModel->getProductHome($product['category_id'],8,$productId);

		// View
		return $this->view('frontend.products.show', [
			'menus'   => $categoriesMenu,
			'product' => $product,
			'products'=> $products,
		]);
	}

	// insert dữ liệu từ view
	public function store()
	{
		$data = [
			'name'        => 'Iphone 20',
			'price'       => '100000000',
			'image'       => null,
			'category_id' => 2,
		];

		$this->productModel->store($data);
	}

	// update dữ liệu
	public function update()
	{
		$id = $_GET['id'];

		$data = [
			'name'        => 'Iphone 3',
			'price'       => '900000',
			'image'       => null,
			'category_id' => 2,
		];

		$this->productModel->updateData($id, $data);
	}

	// Xóa dữ liệu
	public function delete()
	{
		$id = $_GET['id'];
		$this->productModel->destroy($id);
	}
}