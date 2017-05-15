<?php 
set_time_limit(0);
ini_set('memory_limit', '-1');
error_reporting(E_ALL);

class WipAppModel{

private $sql;
private $query;
private $limit;
private $conn;
private $result = false;

	function __construct(){
		$dns = "odbc_datawh"; 
		$this->conn = $conn = odbc_connect($dns, "apps", "apps") or die(odbc_error());
	}
	
	function select($sql){
		$this->sql = $sql;
		return $this;
	}
	
	function query($sql){
		try {
			
			$this->query = $query = odbc_exec($this->conn,$sql) or die (odbc_error());
			return $this;	
			} catch (Exception $e) {
		 echo 'Caught exception: ',  $e->getMessage(), "\n";
		} 
	}
	
	function result(){
		try {
			$this->query = $query = odbc_exec($this->conn,$this->sql) or die (odbc_error());
				return $this;	
		} catch (Exception $e) {
		 echo 'Caught exception: ',  $e->getMessage(), "\n";
		} 

	}
	function limit($limit){
		$this->limit = $limit;
		return $this;
	}
	
	
	function fetchAll(){
	$counter=0;
		while($result = odbc_fetch_array($this->query)){
		$counter++;
			$this->result[] = $result;
			if(isset($this->limit)){
				if($this->limit == $counter){
					break;		
				}
			}
		}
		if(!empty($this->result)){
			return $this->result; 		
		}
		
	}
	function fetchRow(){
		$result = odbc_fetch_array($this->query);
		$this->result = $result;
		return $this->result;
	}
}

?>