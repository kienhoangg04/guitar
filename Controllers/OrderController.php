<?php 

if (!isset($_SESSION['user']) || $_SESSION['user'] == null)
{
	header('Location: http://localhost:403/Guitar/index.php?controller=login');
	exit();
}

class OrderController extends BaseController
{	

	protected $orderModer;

	public function __construct()
	{
		$this->loadModel('OrderModel');

		$this->orderModer = new OrderModel();
	}
	// Hiển thị order admin
	public function index()
	{	
		$selectColumn = ['*'];
		$orders = ['column' => 'id', 'order' => 'DESC'];
		$customers = $this->orderModer->customer($selectColumn, $orders);

		$this->view('frontend.admin.order',[
			'customers' => $customers,
		]);
	}

	// Hiển thị order_detail admin
	public function show()
	{	
		$orderId = $_GET['id'];
		$products = $this->orderModer->order_details($orderId);

		$this->view('frontend.admin.order_detail',[
			'products' => $products,
		]);

		// update status
		if (isset($orderId)){
			$this->orderModer->updateStatus($orderId);
		}
	}

	// In đơn hàng
	public function print()
	{	
		$orderId = $_GET['id'];
		$prints = $this->orderModer->getOrderPrint($orderId);

		$this->view('frontend.admin.printOrder',[
			'prints' => $prints,
		]);
	}
}