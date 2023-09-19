<?php 

if (!isset($_SESSION['user']) || $_SESSION['user'] == null)
{
	header('Location: http://localhost:403/Guitar/index.php?controller=login');
	exit();
}

?>

<?php 

class CategoryController extends BaseController
{
	private $categoryModel;

	public function __construct()
	{	
		// Model
		$this->loadModel('CategoryModel');
		$this->loadModel('ProductModel');
		$this->categoryModel = new CategoryModel;
		$this->productModel  = new ProductModel;
	}

	// không dùng
	public function index()
	{

		// Model
		$categories = $this->categoryModel->getAll(['*'],['column'=>'id','order'=>'asc'],11);

		// View
		return $this->view('frontend.categories.index', [
			'pageTitle'  => 'Danh sách danh mục sản phẩm (Category)',
			'categories' => $categories,
		]);
	}

	// lấy sản phẩm theo danh mục
	public function show()
	{	
		$category_id    = $_GET['id'] ?? null;
		$categoriesMenu = $this->categoryModel->getcategoryForMenu();
		// Sản phẩm theo category id (danh mục)
		$category = $this->categoryModel->findById($category_id);
		$products = $this->productModel->getByCategoryId($category_id);

		return $this->view('frontend.categories.show', [
			'menus'    => $categoriesMenu,
			'category' => $category,
			'products' => $products,

		]);
	}

	public function update()
	{
		$id = $_GET['id'];

		$data = [
			'name' => 'Oppo',
		];

		$this->categoryModel->updateData($id, $data);
	}

	public function delete()
	{
		$id = $_GET['id'];

		$this->categoryModel->destroy($id);
	}
}