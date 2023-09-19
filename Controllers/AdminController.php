<?php 

if (isset($_SESSION['user']) && $_SESSION['user']['level'] == 1)
{
	header('Location: http://localhost:403/Guitar/index.php?controller=home');
	exit();
}

if (!isset($_SESSION['user']) || $_SESSION['user'] == null)
{
	header('Location: http://localhost:403/Guitar/index.php?controller=login');
	exit();
}

?>

<?php 

class AdminController extends BaseController
{
	protected $categoryModel;
	protected $productModel;
	protected $userModel;

	public function __construct()
	{
		$this->loadModel('CategoryModel');
		$this->loadModel('ProductModel');
		$this->loadModel('UserModel');
		$this->loadModel('RegisterModel');

		$this->categoryModel = new CategoryModel;
		$this->productModel  = new ProductModel;
		$this->userModel = new UserModel;
		$this->registerModel = new RegisterModel;
	}
	//
	public function index()
	{	
		$this->view('frontend.admin.index', []);
	}

	//
	public function viewInsert()
	{
		// Lấy danh mục
		$categories = $this->categoryModel->getAll();
		
		$this->view('frontend.admin.insertProduct', [
			'categories' => $categories,
		]);
	}
	// 
	public function insert()
	{	
		if(isset($_POST['sbm'])){
			$product['title'] = $_POST['Title'];

			$product['image'] = $_FILES['Image']['name'];
			$file = $_FILES['Image']['tmp_name'];
			$path = "./assets/img/imgProducts/" . $_FILES['Image']['name'];

			$product['price'] = $_POST['Price'];
			$product['price_sale'] = $_POST['Price_sale'];
			$product['quantity'] = $_POST['Quantity'];
			$product['category_id'] = $_POST['Category_id'];

			$this->productModel->store($product);
			move_uploaded_file($file, $path);
			header('Location: http://localhost:403/Guitar/index.php?controller=admin&action=viewInsert');
		}
	}
	//
	public function show()
	{
		$categoriesMenu = $this->categoryModel->getcategoryForMenu();

		$category_id    = $_GET['id'] ?? null;
		if ($category_id == 0){
			$products = $this->productModel->getAllAdmin();
		}else{
			$products = $this->productModel->getProductAdmin($category_id);
		}

		$this->view('frontend.admin.showProduct', [
			'menus'    => $categoriesMenu,
			'products' => $products,
		]);
	}

	// 
	public function viewUpdate()
	{
		$categories = $this->categoryModel->getAll();

		$idProduct = $_GET['id'] ?? null;
		$product = $this->productModel->getDetail($idProduct);

		$this->view('frontend.admin.update', [
			'categories' => $categories,
			'product' => $product,
			'idProduct' => $idProduct,
		]);
	}

	// 
	public function update()
	{	
		$idProduct = $_GET['id'];
		$pro = $this->productModel->getDetail($idProduct);

		if(isset($_POST['sbm'])){
			$product['title'] = $_POST['Title'];

			if($_FILES['Image']['name'] == ''){
				$product['image'] = $pro['image'];
			}else{
				$product['image'] = $_FILES['Image']['name'];
				$file = $_FILES['Image']['tmp_name'];
				$path = "./assets/img/imgProducts/" . $_FILES['Image']['name'];
				move_uploaded_file($file, $path);
			}

			$product['price'] = $_POST['Price'];
			$product['price_sale'] = $_POST['Price_sale'];
			$product['quantity'] = $_POST['Quantity'];
			$product['category_id'] = $_POST['Category_id'];

			$this->productModel->updateData($idProduct, $product);
			header('Location: http://localhost:403/Guitar/index.php?controller=admin&action=show&id=0');
		}
	}

	//
	public function deleteProduct()
	{
		$idProduct = $_GET['id'];
		if(isset($idProduct)){
			$this->productModel->destroy($idProduct);
			header('Location: http://localhost:403/Guitar/index.php?controller=admin&action=show');
		}
	}




	// Phần User 
	public function user()
	{	
		$users = $this->userModel->getAll();

		$this->view('frontend.admin.user', [
			'users'  => $users,
		]);
	}

	// 
	public function viewInsertUser()
	{
		$this->view('frontend.admin.insertUser', []);
	}

	// 
	public function insertUser()
	{
		$params = $_POST;

		if(isset($params['sbm']))
		{
			$user['user_name'] = $params['User_Name'];
			$user['email'] = $params['Email'];
			$user['password'] = $params['Password'];
			$user['fullname'] = $params['FullName'];
			$user['phone'] = $params['Phone'];
			$user['address'] = $params['Address'];

			$users = $this->registerModel->register($user);
			if($users == true)
			{
				header('Location: http://localhost:403/Guitar/index.php?controller=admin&action=user');
				exit();
			}else{
				header('Location: http://localhost:403/Guitar/index.php?controller=admin&action=viewInsertUser');
			}
		}
	}

	// 
	public function viewUpdateUser()
	{	
		$idUser = $_GET['id'];
		$user = $this->userModel->getDetail($idUser);

		$this->view('frontend.admin.updateUser', [
			'user'   => $user,
			'idUser' => $idUser,
		]);
	}

	// 
	public function updateUser()
	{
		$idUser = $_GET['id'];

		if(isset($_POST['sbm'])){
			$user['user_name'] = $_POST['User_Name'];
			$user['email'] = $_POST['Email'];
			$user['password'] = $_POST['Password'];
			$user['fullname'] = $_POST['FullName'];
			$user['phone'] = $_POST['Phone'];
			$user['address'] = $_POST['Address'];

			$this->userModel->updateUser($idUser, $user);
			header('Location: http://localhost:403/Guitar/index.php?controller=admin&action=user');
		}
	}

	//
	public function deleteUser()
	{
		$idUser = $_GET['id'];
		if(isset($idUser)){
			$this->userModel->deleteUser($idUser);
			header('Location: http://localhost:403/Guitar/index.php?controller=admin&action=user');
		}
	}
	
}

?>