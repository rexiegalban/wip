<?php
class Dashboard_time_update extends WipAppModel{

	private $params;

	public function __construct($params = null){
		parent::__construct();
		$this->params = $params;
	}

	//get count active mo's
	public function getWIPupdate(){
		$sql 	= "	SELECT 
							to_char(MAX(WH_DATE),'Day Mon DD, YYYY HH:MI AM') as UPDATED_TIME
					FROM
							WH_DATE_TIME
				";

		$this->select($sql)->query($sql);
		return $this->fetchRow();
	}

}
