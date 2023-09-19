<?php

/**
 * 
 */
class OrderModel extends BaseModel
{
	const TABLE = 'orders';
	
	// Thêm thông tin vào order vs order_detail
	public function store($input)
	{
		return $orderId = $this->create(self::TABLE, [
			'code'             => rand(100, 100000),
			'customer_name'    => $input['fullname'],
			'customer_phone'   => $input['phone'],
			'customer_email'   => $input['email'],
			'customer_address' => $input['address'],
			'customer_note'    => $input['note'],
			'customer_payment' => $input['payment'] ?? null,
		]);
	}

	public function storeOrderDetail($input)
	{	
		$this->create('order_details', [
			'order_id'      => $input['order_id'],
			'product_id'    => $input['product_id'],
			'product_name'  => $input['product_name'],
			'product_price' => $input['product_price'],
			'product_qty'   => $input['product_qty'],
		]);
	}

	// admin lấy order
	public function customer($select = ['*'], $orderBy = [],$limit = 200)
	{
		return $this->all(self::TABLE, $select, $orderBy, $limit);
	}

	public function order_details($orderId)
	{
		$sql = "SELECT * FROM order_details WHERE order_id = ${orderId}";
		return $this->getByQuery($sql);
	}
	
	// update status
	public function updateStatus($id)
	{
		$sql = "UPDATE " . self::TABLE . " SET status = 0 WHERE id = ${id}";
		$this->_query($sql);
	}


	// Lấy sản phẩm để print
	public function getOrderPrint($id)
	{
		$sql = "SELECT orders.code,orders.customer_name,orders.customer_phone,orders.customer_address,orders.customer_note, order_details.* FROM " . self::TABLE . " INNER JOIN order_details ON orders.id = order_details.order_id WHERE orders.id = ${id}";

		return $this->getByQuery($sql);
	}
}
?>