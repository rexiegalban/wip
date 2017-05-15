<?php
class ForShipOutController extends WipAppModel{

	private $params;

	public function __construct($params = null){
		parent::__construct();
		$this->params = $params;
	}

	//get count for ship out
	public function getForShipOutCount(){
		$sql 	= "	SELECT 
						PKG
					FROM
						WIP_FOR_SHIPOUT
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get count for ship out inv value
	public function getForShipOutInvValue(){
		$sql 	= "	SELECT 
						SUM(INV_VALUE_USD) AS INV_VALUE
					FROM
						WIP_FOR_SHIPOUT
				";

		$this->select($sql)->query($sql);
		return $this->fetchRow();
	}

	//get data for ship out (package) table
	public function getForShipOutPackages(){
		$sql 	= "	SELECT 
						PKG,
						SUM(INV_VALUE_USD) AS INV_VALUE
					FROM
						WIP_FOR_SHIPOUT
				";

		$this->select($sql)->query($sql);
		return $this->fetchRow();
	}
}
