<?php 

class ProductModel extends BaseModel
{
	const TABLE = 'products';

	public function getAll($select = ['*'], $orderBy = [],$limit = 200)
	{
		return $this->all(self::TABLE, $select, $orderBy, $limit);
	}
	// 
	public function getProductHome($categoryId, $limit = 20, $productId = null)
	{
		$sql = "SELECT * FROM " . self::TABLE . " WHERE category_id = ${categoryId} ORDER BY RAND() LIMIT ${limit}";

		if($productId){
			$sql = "SELECT * FROM " . self::TABLE . " WHERE category_id = ${categoryId} and id != ${productId} ORDER BY RAND() LIMIT ${limit}";
		}
		return $this->getByQuery($sql);
	}

	// 
	public function findById($id)
	{
		return $this->find(self::TABLE, $id);
	}

	// 
	public function getDetail($id)
	{
		$sql = "SELECT products.*, categories.name as category_name FROM " . self::TABLE . " JOIN categories ON categories.id = products.category_id WHERE products.id = ${id}";
		return $this->getFirstByQuery($sql);
	}

	// 
	public function getByCategoryId($categoryId)
	{
		$sql = "SELECT * FROM " . self::TABLE . " WHERE category_id = ${categoryId}";
		return $this->getByQuery($sql);
	}

	// insert
	public function store($data)
	{
		$this->create(self::TABLE, $data);
	}

	// update
	public function updateData($id, $data)
	{
		$this->update(self::TABLE, $id, $data);
	}

	// delete
	public function destroy($id)
	{
		$this->delete(self::TABLE, $id);
	}

	// Search
	public function search(array $input)
	{
		$sql = "SELECT * FROM " . self::TABLE . " WHERE title LIKE '%" . $input['search_products'] . "%'";
		return $this->getByQuery($sql);
	}

	// admin
	public function getProductAdmin($categoryId)
	{
		$sql = "SELECT products.*, categories.name as category_name FROM " . self::TABLE . " JOIN categories ON categories.id = products.category_id WHERE categories.id = ${categoryId}";
		return $this->getByQuery($sql);
	}
	public function getAllAdmin()
	{
		$sql = "SELECT products.*, categories.name as category_name FROM " . self::TABLE . " JOIN categories ON categories.id = products.category_id";
		return $this->getByQuery($sql);
	}

	// Update lại số lượng
	public function updateQuantity($productId, $productQyt)
	{
		$sql = "SELECT quantity FROM " . self::TABLE . " WHERE id = ${productId}";
		$arrQty = $this->getFirstByQuery($sql);
		foreach ($arrQty as $qty):
			$quantity = $qty - $productQyt;
			$s = "UPDATE " . self::TABLE . " SET quantity = '${quantity}' WHERE id = ${productId}";
			$this->_query($s);
		endforeach;
	}
}