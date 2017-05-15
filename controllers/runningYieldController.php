<?php
class RunningYieldController extends WipAppModel{

	private $params;

	public function __construct($params = null){
		parent::__construct();
		$this->params = $params;
		//echo "<pre />";
		//var_dump($this->params);
	}

	//get SOT running yield data
	public function getSotRunningYieldData(){
		$sql 	= "	SELECT 
						PKG,
						DEVICE,
						sum(SCHEDULED_QUANTITY) AS SCHEDULED_QUANTITY,
						sum(QUANTITY_RUNNING) AS QUANTITY_RUNNING,
						sum(QUANTITY_COMPLETED) AS QUANTITY_COMPLETED,
						(sum(YIELD)/count(YIELD)) AS YIELD,
						count(YIELD) AS YIELD_COUNT
					FROM
						WIP_YIELD
					WHERE CLASS_CODE = 'SOT-PLAS'
					GROUP BY 
						PKG,
						DEVICE
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get PLASTIC running yield data
	public function getPlasticRunningYieldData(){
		$sql 	= "	SELECT 
						PKG,
						DEVICE,
						sum(SCHEDULED_QUANTITY) AS SCHEDULED_QUANTITY,
						sum(QUANTITY_RUNNING) AS QUANTITY_RUNNING,
						sum(QUANTITY_COMPLETED) AS QUANTITY_COMPLETED,
						(sum(YIELD)/count(YIELD)) AS YIELD
					FROM
						WIP_YIELD
					WHERE CLASS_CODE = 'P-Discret'
					GROUP BY 
						PKG,
						DEVICE
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get HERMETICS running yield data
	public function getHermeticsRunningYieldData(){
		$sql 	= "	SELECT 
						PKG,
						DEVICE,
						sum(SCHEDULED_QUANTITY) AS SCHEDULED_QUANTITY,
						sum(QUANTITY_RUNNING) AS QUANTITY_RUNNING,
						sum(QUANTITY_COMPLETED) AS QUANTITY_COMPLETED,
						(sum(YIELD)/count(YIELD)) AS YIELD
					FROM
						WIP_YIELD
					WHERE CLASS_CODE = 'H-Discrete'
					GROUP BY 
						PKG,
						DEVICE
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	#RUNNING YIELD DETAILS - SOT
	//get package data
	public function getSotPackage(){
		$sql 	= "	SELECT 
						PKG,
						sum(SCHEDULED_QUANTITY) AS SCHEDULED_QUANTITY,
						sum(QUANTITY_IN_QUEUE) AS QUANTITY_IN_QUEUE,
						sum(QUANTITY_RUNNING) AS QUANTITY_RUNNING,
						sum(QUANTITY_COMPLETED) AS QUANTITY_COMPLETED,
						(sum(YIELD)/count(YIELD)) AS YIELD
					FROM
						PKG_YIELD
					WHERE CLASS_CODE = 'SOT-PLAS'
					GROUP BY 
						PKG
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}
	//get device data
	public function getSotDevice(){
		$sql 	= "	SELECT 
						DEVICE,
						sum(START_QUANTITY) AS START_QUANTITY,
						sum(QTY_OUT) AS QTY_OUT,
						sum(REJECT) AS REJECT,
						(sum(YIELD)/count(YIELD)) AS YIELD
					FROM
						DEVICE_YIELD
					WHERE CLASS_CODE = 'SOT-PLAS'
					AND PKG = '".@$this->params['pkg']."'
					GROUP BY 
						DEVICE

				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}
	//get mo data
	public function getSotMo(){
		$sql 	= "	SELECT 
						MO,
						CUSTOMER,
						sum(START_QUANTITY) AS START_QUANTITY,
						sum(QTY_OUT) AS QTY_OUT,
						sum(REJECT) AS REJECT,
						(sum(YIELD)/count(YIELD)) AS YIELD
					FROM
						MO_YIELD
					WHERE CLASS_CODE = 'SOT-PLAS'
					AND PKG = '".@$this->params['pkg']."'
					AND DEVICE = '".@$this->params['dvc']."'
					GROUP BY 
						MO,
						CUSTOMER

				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}
	//get prime data
	public function getSotPrime(){
		$sql 	= "	SELECT 
						OPERATIONS,
						QTY_IN,
						REJECT,
						REWORK_QTY,
						PRIME_YIELD,
						FINAL_YIELD
					FROM
						PRIME_YIELD
					WHERE CLASS_CODE = 'SOT-PLAS'
					AND PKG = '".@$this->params['pkg']."'
					AND DEVICE = '".@$this->params['dvc']."'
					AND MO = '".@$this->params['mo']."'

				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	#RUNNING YIELD DETAILS - PLASTICS
	//get package data
	public function getPlasticPackage(){
		$sql 	= "	SELECT 
						PKG,
						sum(SCHEDULED_QUANTITY) AS SCHEDULED_QUANTITY,
						sum(QUANTITY_IN_QUEUE) AS QUANTITY_IN_QUEUE,
						sum(QUANTITY_RUNNING) AS QUANTITY_RUNNING,
						sum(QUANTITY_COMPLETED) AS QUANTITY_COMPLETED,
						(sum(YIELD)/count(YIELD)) AS YIELD
					FROM
						PKG_YIELD
					WHERE CLASS_CODE = 'P-Discret'
					GROUP BY 
						PKG
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}
	//get device data
	public function getPlasticDevice(){
		$sql 	= "	SELECT 
						DEVICE,
						sum(START_QUANTITY) AS START_QUANTITY,
						sum(QTY_OUT) AS QTY_OUT,
						sum(REJECT) AS REJECT,
						(sum(YIELD)/count(YIELD)) AS YIELD
					FROM
						DEVICE_YIELD
					WHERE CLASS_CODE = 'P-Discret'
					AND PKG = '".@$this->params['pkg']."'
					GROUP BY 
						DEVICE

				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}
	//get mo data
	public function getPlasticMo(){
		$sql 	= "	SELECT 
						MO,
						CUSTOMER,
						sum(START_QUANTITY) AS START_QUANTITY,
						sum(QTY_OUT) AS QTY_OUT,
						sum(REJECT) AS REJECT,
						(sum(YIELD)/count(YIELD)) AS YIELD
					FROM
						MO_YIELD
					WHERE CLASS_CODE = 'P-Discret'
					AND PKG = '".@$this->params['pkg']."'
					AND DEVICE = '".@$this->params['dvc']."'
					GROUP BY 
						MO,
						CUSTOMER

				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}
	//get prime data
	public function getPlasticPrime(){
		$sql 	= "	SELECT 
						OPERATIONS,
						QTY_IN,
						REJECT,
						REWORK_QTY,
						PRIME_YIELD,
						FINAL_YIELD
					FROM
						PRIME_YIELD
					WHERE CLASS_CODE = 'P-Discret'
					AND PKG = '".@$this->params['pkg']."'
					AND DEVICE = '".@$this->params['dvc']."'
					AND MO = '".@$this->params['mo']."'

				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	#RUNNING YIELD DETAILS - HERMETICS
	//get package data
	public function getHermeticsPackage(){
		$sql 	= "	SELECT 
						PKG,
						sum(SCHEDULED_QUANTITY) AS SCHEDULED_QUANTITY,
						sum(QUANTITY_IN_QUEUE) AS QUANTITY_IN_QUEUE,
						sum(QUANTITY_RUNNING) AS QUANTITY_RUNNING,
						sum(QUANTITY_COMPLETED) AS QUANTITY_COMPLETED,
						(sum(YIELD)/count(YIELD)) AS YIELD
					FROM
						PKG_YIELD
					WHERE CLASS_CODE = 'H-Discrete'
					GROUP BY 
						PKG
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}
	//get device data
	public function getHermeticsDevice(){
		$sql 	= "	SELECT 
						DEVICE,
						sum(START_QUANTITY) AS START_QUANTITY,
						sum(QTY_OUT) AS QTY_OUT,
						sum(REJECT) AS REJECT,
						(sum(YIELD)/count(YIELD)) AS YIELD
					FROM
						DEVICE_YIELD
					WHERE CLASS_CODE = 'H-Discrete'
					AND PKG = '".@$this->params['pkg']."'
					GROUP BY 
						DEVICE

				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}
	//get mo data
	public function getHermeticsMo(){
		$sql 	= "	SELECT 
						MO,
						CUSTOMER,
						sum(START_QUANTITY) AS START_QUANTITY,
						sum(QTY_OUT) AS QTY_OUT,
						sum(REJECT) AS REJECT,
						(sum(YIELD)/count(YIELD)) AS YIELD
					FROM
						MO_YIELD
					WHERE CLASS_CODE = 'H-Discrete'
					AND PKG = '".@$this->params['pkg']."'
					AND DEVICE = '".@$this->params['dvc']."'
					GROUP BY 
						MO,
						CUSTOMER

				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}
	//get prime data
	public function getHermeticsPrime(){
		$sql 	= "	SELECT 
						OPERATIONS,
						QTY_IN,
						REJECT,
						REWORK_QTY,
						PRIME_YIELD,
						FINAL_YIELD
					FROM
						PRIME_YIELD
					WHERE CLASS_CODE = 'H-Discrete'
					AND PKG = '".@$this->params['pkg']."'
					AND DEVICE = '".@$this->params['dvc']."'
					AND MO = '".@$this->params['mo']."'

				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

}
