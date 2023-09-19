<?php 

if (isset($_SESSION['user']) && $_SESSION['user'] != null)
{
	header('Location: http://localhost:403/Guitar/index.php?controller=home');
	exit();
}	

class RegisterController extends BaseController
	{
		
		public function __construct()
		{
			$this->loadModel('CategoryModel');
			$this->loadModel('ProductModel');
			$this->loadModel('RegisterModel');

			$this->categoryModel = new CategoryModel;
			$this->productModel  = new ProductModel;
			$this->registerModel = new RegisterModel;
		}

		// form đăng ký
		public function index()
		{
			$categoriesMenu = $this->categoryModel->getcategoryForMenu();

			$this->view('frontend.register.show', [
				'menus' => $categoriesMenu,
			]);
		}

		// đăng ký
		public function register()
		{	
			$params = $_POST;
			$error  = [];
			if(isset($params['btnRegister']))
			{	
				$user['user_name'] = $params['User_Name'];
				$user['email'] = $params['Email'];
				$user['password'] = $params['Password'];
				$user['fullname'] = $params['FullName'];
				$user['phone'] = $params['Phone'];

				// Bắt lỗi
				$pos = strpos($user['email'], '@');
				if($pos == false){
					$error['email'] = 'Bạn nhập chưa phải email';
				}

				if($user['password'] != $_POST['RePassword']){
					$error['password'] = 'Mật khẩu không khớp';
				}

				if(is_numeric($user['fullname'])){
					$error['fullname'] = 'Không nên có ký tự là số';
				}

				if(!is_numeric($user['phone'])){
					$error['phone'] = 'Bạn nhập chưa phải số điện thoại';
				}

				if($error == null){
					$users = $this->registerModel->register($user);
					if($users == true)
					{	
						header('Location: http://localhost:403/Guitar/index.php?controller=login');
						exit();
					}
				}

				$this->view('frontend.register.show', [
					'error' => $error,
				]);

				header('Location: http://localhost:403/Guitar/index.php?controller=register');
			}
		}
	}

?>