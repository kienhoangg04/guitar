<?php 

class CategoryModel extends BaseModel
{
	const TABLE = 'categories';

	public function getAll($select = ['*'], $orderBy = [],$limit = 200)
	{
		return $this->all(self::TABLE, $select, $orderBy, $limit);
	}

	// 
	public function findById($id)
	{
		return $this->find(self::TABLE, $id);
	}

	// 
	public function getCategoryForMenu()
	{
		return $this->getByQuery("SELECT * FROM " . self::TABLE);
	}

	// không cần
	public function getCategoryPickHome()
	{
		return $this->getByQuery("SELECT * FROM " .self::TABLE . " WHERE id = 1");
	}

	// 
	public function updateData($id, $data)
	{
		$this->update(self::TABLE, $id, $data);
	}

	// 
	public function destroy($id)
	{
		$this->delete(self::TABLE, $id);
	}
}