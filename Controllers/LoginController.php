<?php 

if (isset($_SESSION['user']) && $_SESSION['user'] != null)
{
	header('Location: http://localhost:403/Guitar/index.php?controller=home');
	exit();
}

class LoginController extends BaseController
	{
		public $categoryModel;
		public $productModel;
		public $loginModel;
		public function __construct()
		{
			$this->loadModel('CategoryModel');
			$this->loadModel('ProductModel');
			$this->loadModel('LoginModel');

			$this->categoryModel = new CategoryModel;
			$this->productModel  = new ProductModel;
			$this->loginModel    = new LoginModel;
		}

		// form đăng nhập
		public function index()
		{	
			$categoriesMenu = $this->categoryModel->getcategoryForMenu();

			$this->view('frontend.login.show', [
				'menus' => $categoriesMenu,
			]);
		}

		// đăng nhập
		public function login()
		{
			$params = $_POST;
			$message = '';
			if (isset($params['btnLogin']))
			{
				$User_Name = $params['User_Name'];
				$Password  = $params['Password'];

				$users = $this->loginModel->login($User_Name, $Password);

				if ($users != null && isset($users['id'])){
					$_SESSION['user'] = $users;

					if($_SESSION['user']['level'] == 0){
						header('Location: http://localhost:403/Guitar/index.php?controller=admin');
						exit();
					}else {
						header('Location: http://localhost:403/Guitar/index.php?controller=home');
						exit();
					}
				}else{
					$message = 'Nhập sai tài khoản hoặc mật khẩu';
					$this->view('frontend.login.show', [
						'message' => $message,
					]);
				}
				header('Location: http://localhost:403/Guitar/index.php?controller=login');
			}
		}
	}
?>