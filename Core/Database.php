<?php 

class Database
{	
	const LOCAHOST = 'localhost:3307';
	const USERNAME = 'root';
	const PASSWORD = '';
	const DB_NAME = 'guitar';

	public function connect()
	{
		$connect = mysqli_connect(self::LOCAHOST,self::USERNAME,self::PASSWORD,self::DB_NAME);

		// mysqli_set_charset($connect, "utf-8");

		if (mysqli_connect_errno() === 0){
			return $connect;
		}
		return false;
	}
}

?>