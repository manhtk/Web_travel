<?php 
class Database 
{
	private $hostname = 'localhost';
	private $username = 'root';
	private $pass = '';
	private $dbname = 'webtravel';

	private $conn = NULL;
	private $result = NULL;
	public function connect()
	{
		$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
		if(!$this->conn)
		{
			echo "Kết nối thất bại";
			exit();
		}
		else{
			mysqli_set_charset($this->conn, 'utf8');
		}
		return $this->conn;
	}
	//Thực thi câu lệnh truy vấn
	public function execute($sql)
	{
		$this->result = $this->conn->query($sql);
		return $this->result;
	}
	//Phương thức lấy dữ liệu
	public function getData(){
		if($this->result){
			$data =  mysqli_fetch_array($this->result);
		}
		else{
			$data = 0;
		}
		return $data;
	}
	//Phương thức lấy toàn bộ dữ liệu
	public function getAllData()
	{
		if(!$this->result){
			return FALSE;
		}
		else{
			while ($datas = $this->getData()) {
				$data[]= $datas; 
			}
		}
		return $data;
	}
	//Phương thức đếm số bản ghi

	//Phương thức thêm dữ liệu :
	


 }
 ?>
