<?php 
	
/**
 * 
 */
class LoginModel extends BaseModel
{
	const TABLE = 'users';

	public function login($user_name, $password)
	{
		$sql = "SELECT * FROM " . self::TABLE . " WHERE user_name = '${user_name}'";
		$row = $this->getFirstByQuery($sql);

		if (isset($row['id']) && $row['password'] == $password)
		{
			$item['id'] = $row['id'];
			$item['user_name'] = $row['user_name'];
			$item['email'] = $row['email'];
			$item['password'] = $row['password'];
			$item['fullname'] = $row['fullname'];
			$item['phone'] = $row['phone'];
			$item['address'] = $row['address'];
			$item['level'] = $row['level'];

			return $item;
		}
		return false;
	}	
}

?>