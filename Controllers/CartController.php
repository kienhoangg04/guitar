<?php 

if (!isset($_SESSION['user']) || $_SESSION['user'] == null)
{
	header('Location: http://localhost:403/Guitar/index.php?controller=login');
	exit();
}

class CartController extends BaseController
{		
	protected $productModel;
	protected $categoryModel;
	protected $orderModer;

	public function __construct()
	{
		$this->loadModel('ProductModel');
		$this->loadModel('CategoryModel');
		$this->loadModel('OrderModel');

		$this->productModel = new ProductModel();
		$this->categoryModel = new CategoryModel();
		$this->orderModer = new OrderModel();
	}

	// giỏ hàng
	public function index()
	{
		$categoriesMenu = $this->categoryModel->getcategoryForMenu();
		// Sản phẩm trong giỏ hàng
		$products       = $_SESSION['cart'] ?? [];	

		// Thông tin người đăng nhập
		if (isset($_SESSION['user']))
		{
			$user['fullname'] = $_SESSION['user']['fullname'];
			$user['phone'] = $_SESSION['user']['phone'];
			$user['email'] = $_SESSION['user']['email'];
			$user['address'] = $_SESSION['user']['address'];
		}

		return $this->view('frontend.carts.index', [
			'menus'    => $categoriesMenu,
			'products' => $products,
			'user'     => $user ?? null,
		]);
	}

	// thêm vào giỏ hàng
	public function store()
	{	
		$productId = $_GET['id'] ?? null;
		$product = $this->productModel->findById($productId);

		if (empty($_SESSION['cart']) || !array_key_exists($productId, $_SESSION['cart'])) {
			$product['qty'] = 1;
			$_SESSION['cart'][$productId] = $product;
		}else{
			$product['qty'] = $_SESSION['cart'][$productId]['qty'] + 1;
			$_SESSION['cart'][$productId] = $product;
		}
		header('Location: index.php?controller=cart');
	}

	// update số lượng trong giả & hoàn tất mua hàng
	public function update()
	{	
		// Lấy menu
		$categoriesMenu = $this->categoryModel->getcategoryForMenu();
		$products       = $_SESSION['cart'] ?? [];	

		// update số lượng sản phẩm
		if (isset($_POST['btnUp'])){
			foreach ($_POST['qty'] as $productId => $qty) {
				$_SESSION['cart'][$productId]['qty'] = $qty;
			}
		}

		// hoàn tất mua hàng
		if (isset($_POST['btnMua'])){
			if (!empty($_SESSION['cart'])) {
				// Tạo user mua

				$order = $this->orderModer->store($_POST);

				// Lấy user mua ra order khi thanh toán xong
				$user['fullname']   = $_POST['fullname'];
				$user['address']   = $_POST['address'];
				$user['phone']   = $_POST['phone'];
				$user['payment'] = $_POST['payment'] ?? null;
			
				foreach ($_SESSION['cart'] as $product)
				{
					$this->orderModer->storeOrderDetail([
						'order_id'      => $order['id'],
						'product_id'    => $product['id'],
						'product_name'  => $product['title'],
						'product_price' => $product['price'],
						'product_qty'   => $product['qty'],
					]);

					// update lại số lượng:
					$this->productModel->updateQuantity($product['id'], $product['qty']);
				}

				$this->view('frontend.order.show',[
					'menus'    => $categoriesMenu,
					'user' => $user ?? null,
					'products' => $products,

				]);
				$_SESSION['cart'] = null;
			}
		}
		header('Location: index.php?controller=cart');
	}

	public function delete()
	{
		$productId = $_GET['id'] ?? null;
		unset($_SESSION['cart'][$productId]);
		header('Location: index.php?controller=cart');
	}

	public function destroy()
	{
		// unset($_SESSION['cart']);
		$_SESSION['cart'] = null;
		header('Location: index.php?controller=cart');
	}
}