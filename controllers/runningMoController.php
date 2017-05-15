<?php
class RunningMoController extends WipAppModel{

	private $params;

	public function __construct($params = null){
		parent::__construct();
		$this->params = $params;
	}

	//get SOT running data
	public function getSotRunningData(){
		$sql 	= "	SELECT 
						PKG,
						DEVICE,
						MO,
						CUSTOMER,
						QUANTITY_RUNNING,
						DESCRIPTION,
						SOD
					FROM
						WIP_CURR_STATUS_RUN
					WHERE CLASS_CODE = 'SOT-PLAS'
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get PLASTICS running data
	public function getPlasticRunningData(){
		$sql 	= "	SELECT 
						PKG,
						DEVICE,
						MO,
						CUSTOMER,
						QUANTITY_RUNNING,
						DESCRIPTION,
						SOD
					FROM
						WIP_CURR_STATUS_RUN
					WHERE CLASS_CODE = 'P-Discret'
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get HERMETICS running data
	public function getHermeticsRunningData(){
		$sql 	= "	SELECT 
						PKG,
						DEVICE,
						MO,
						CUSTOMER,
						QUANTITY_RUNNING,
						DESCRIPTION,
						SOD
					FROM
						WIP_CURR_STATUS_RUN
					WHERE CLASS_CODE = 'H-Discrete'
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

}
