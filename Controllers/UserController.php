<?php 

/**
 * 
 */
class UserController extends BaseController
{
	protected $userModel;
	protected $categoryModel;

	function __construct()
	{
		$this->loadModel('UserModel');
		$this->loadModel('CategoryModel');

		$this->userModel = new UserModel;
		$this->categoryModel = new CategoryModel();
	}

	// quản lý tài khoản
	public function index()
	{
		$categoriesMenu = $this->categoryModel->getcategoryForMenu();

		// 
		$idUser = $_SESSION['user']['id'];
		$user = $this->userModel->getDetail($idUser);

		$this->view('frontend.user.show',[
			'menus'    => $categoriesMenu,
			'user' => $user,
		]);
	}

	public function update()
	{
		$idUser = $_SESSION['user']['id'];
		$u = $this->userModel->getDetail($idUser);

		if(isset($_POST['sbm'])){
			$user['user_name'] = $u['user_name'];
			$user['email'] = $_POST['Email'];
			$user['password'] = $u['password'];
			$user['fullname'] = $_POST['Name'];
			$user['phone'] = $_POST['Phone'];
			$user['address'] = $_POST['Address'];

			$this->userModel->updateUser($idUser, $user);
			header('Location: http://localhost:403/Guitar/index.php?controller=user');
		}
	}
}

?>