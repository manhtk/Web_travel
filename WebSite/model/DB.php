<?php

class Database
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "webtravel";

    private $conn = null;
    private $result = null;

    public function connect()
    {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            echo "Connect failed";
            exit();
        } else {
            mysqli_set_charset($this->conn, 'utf8');
        }
        return $this->conn;
    }

    public function excute($query)
    {
        $this->result = $this->conn->query($query);
        return $this->result;
    }

    public function getData()
    {
        if ($this->result) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }

    public function getAllData($table)
    {
        $query = "SELECT * FROM $table";
        $this->excute($query);
        if ($this->numRows() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
    }

    public function numRows()
    {
        if ($this->result) {
            $num = mysqli_num_rows($this->result);
        } else {
            $num = 0;
        }
        return $num;
    }

    
        public function insertData($table, $data)
        {

            $columns = implode(", ", array_keys($data));
            $escaped_values = array_map(array($this->connect(), 'real_escape_string'), array_values($data));
            $values = implode(", ", $escaped_values);
            $query = "INSERT INTO $table($columns) VALUES ($values)";
            return (array)$this->excute($query);

        }
    /*
    public function insertData($city_id, $hotel_name, $owner, $description, $images, $starnum, $address)
    {
        $sql = "INSERT INTO 'hotel'('hotel_id', 'city_id','hotel_name','owner','description','images','starnum','address') VALUES(NULL, $city_id, $hotel_name, $owner, $description, $images, $starnum, $address)";
        return $this->excute($sql);
    }
    */
    public
    function updateData()
    {
        //
    }

    public
    function deleteData()
    {
        //
    }


}