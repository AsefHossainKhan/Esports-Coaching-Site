<?php
class DBController {
	private $host = "127.0.0.1";
	private $user = "root";
	private $password = "";
	private $database = "esports";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	
	}
	
	private function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}


	function insert($table_name, $data){  
			$sql = "INSERT INTO ".$table_name." (";            
			$sql .= implode(",", array_keys($data)) . ') VALUES (';            
			$sql .= "'" . implode("','", array_values($data)) . "')";  
			
			if($this->conn->query($sql) === TRUE)  
			{  
				return true;  
			}  
			else  
			{  
				echo "Error: " . $sql . "<br>" . $this->conn->error;;  
			}  
	}
	
	function read($query) {
		
		mysqli_query($this->conn,'SET CHARACTER SET utf8'); 
		mysqli_query($this->conn,"SET SESSION collation_connection ='utf8_general_ci'");
		
		
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
		else{
			return array();
		}
	}



	function delete($query){

    	return $this->executeUpdate($query);
    }

    function update($query){

    	return $this->executeUpdate($query);
    }


	function count($query) {
		$result = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}


	private function executeUpdate($query) {
        $result = mysqli_query($this->conn,$query);        
		return $result;		
    }



	function getInsertID(){
		return $this->conn->insert_id;
	}

	function __destruct(){
		$this->conn->close();
		//echo "Disconnctd";
	}
	
}
?>