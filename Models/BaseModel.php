<?php 

class BaseModel extends Database
{
	protected $connect;

	public function __construct()
	{
		$this->connect = $this->connect();
	}

	// Lấy ra tất cả dữ liệu trong bảng
	public function all($table, $select = ['*'], $orderBys = [], $limit = 200)
	{	
		$columns = implode(',', $select);

		$orderByString = implode(' ', $orderBys);

		if($orderByString){
			$sql = "SELECT ${columns} FROM ${table} ORDER BY ${orderByString} LIMIT ${limit}";
		}else {
			$sql = "SELECT ${columns} FROM ${table} LIMIT ${limit}";
		}

		$query = $this->_query($sql);

		$data = [];

		while ($row = mysqli_fetch_assoc($query)){
			array_push($data, $row);
		}

		return $data;
	}

	// Lấy ra một bản ghi dữ liệu
	public function find($table, $id)
	{
		$sql   = "SELECT * FROM ${table} WHERE id = ${id} LIMIT 1";
		$query = $this->_query($sql);
		return mysqli_fetch_assoc($query);
	}

	// Thêm dữ liệu vào bảng
	public function create($table, $data = [])
	{
		$columns = implode(',', array_keys($data));

		$values  = array_map(function($value) {
			return "'" . $value . "'";
		}, array_values($data));
		$values  = implode(',', $values);

		$sql = "INSERT INTO ${table} (${columns}) VALUES (${values})";

		$this->_query($sql);

		return $this->getFirstByQuery("SELECT * FROM ${table} ORDER BY id DESC LIMIT 1");
	}

	// Sửa dữ liệu vào bảng
	public function update($table, $id, $data)
	{	
		$dataSets = [];
		foreach ($data as $key => $val){
			array_push($dataSets, "${key} = '" . $val ."'");
		}
		$dataSetString = implode(',', $dataSets);

		$sql = "UPDATE ${table} SET ${dataSetString} WHERE id = ${id}";
		$this->_query($sql);
	}

	// Xóa dữ liệu của bảng
	public function delete($table, $id)
	{
		$sql = "DELETE FROM ${table} WHERE id = ${id}";
		$this->_query($sql);
	}

	// 
	public function getByQuery($sql)
	{
		$query = $this->_query($sql);
		$data  = [];

		while($row = mysqli_fetch_assoc($query)){
			array_push($data, $row);
		}
		return $data;
	}
	// 
	public function getFirstByQuery($sql)
	{
		$query = $this->_query($sql);
		return mysqli_fetch_assoc($query);
	}

	public function _query($sql)
	{
		return mysqli_query($this->connect, $sql);
	}

	// getUser
	public function getUser($table)
	{
		$sql = "SELECT * FROM ${table} WHERE level = '1'";

		$query = $this->_query($sql);

		$data = [];

		while ($row = mysqli_fetch_assoc($query)){
			array_push($data, $row);
		}

		return $data;
	}
}
?>