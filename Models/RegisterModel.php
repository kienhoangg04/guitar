<?php 

/**
 * 
 */
class RegisterModel extends BaseModel
{
	const TABLE = 'users';

	public function register($data)
	{	
		$sql = "SELECT * FROM " . self::TABLE . " WHERE user_name = '${data['user_name']}' OR email = '${data['email']}'";
		$row = $this->getByQuery($sql);

		if($row == null){
			$this->create(self::TABLE, $data);
			return true;
		}else{
			return false;
		}
	}
}
?>