<?php 
	
/**
 * 
 */
class UserModel extends BaseModel
{
	const TABLE = 'users';

	public function getAll($select = ['*'], $orderBy = [],$limit = 200)
	{	
		return $this->getUser(self::TABLE);
	}

	public function deleteUser($id)
	{
		return $this->delete(self::TABLE, $id);
	}

	public function getDetail($id)
	{
		$sql = "SELECT * FROM " . self::TABLE . " WHERE id = ${id} AND level = '1'";
		return $this->getFirstByQuery($sql);
	}

	public function updateUser($id, $data)
	{
		$this->update(self::TABLE, $id, $data);
	}
}

?>