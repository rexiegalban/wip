<?php
class OnHoldController extends WipAppModel{

	private $params;

	public function __construct($params = null){
		parent::__construct();
		$this->params = $params;
	}

	//get count active mo's
	public function getOnHoldCount(){
		$sql 	= "	SELECT 
						PKG
					FROM
						WIP_CURR_STATUS_HOLD
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get count active mo's inv value
	public function getOnHoldInvValue(){
		$sql 	= "	SELECT 
						SUM(INV_VALUE_USD) AS INV_VALUE
					FROM
						WIP_CURR_STATUS_HOLD
				";

		$this->select($sql)->query($sql);
		return $this->fetchRow();
	}

	//get data for active mo (package) table
	public function getOnHoldPackages(){
		$sql 	= "	SELECT 
						PKG,
						SUM(CTR_MO) AS CTR_MO,
						SUM(SCHEDULED_QUANTITY) AS SCHEDULED_QUANTITY,
						SUM(QUANTITY_RUNNING) AS QUANTITY_RUNNING,
						SUM(QUANTITY_IN_QUEUE) AS QUANTITY_IN_QUEUE,
						SUM(QUANTITY_COMPLETED) AS QUANTITY_COMPLETED,
						SUM(INV_VALUE_USD) AS INV_VALUE_USD
					FROM
						COUNT_PKG_HOLD
					GROUP BY
						PKG

				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get data for active mo (device) table
	public function getOnHoldDevice(){
		$sql 	= "	SELECT 
						DEVICE,
						SUM(CTR_MO) AS CTR_MO,
						SUM(SCHEDULED_QUANTITY) AS SCHEDULED_QUANTITY,
						SUM(QUANTITY_RUNNING) AS QUANTITY_RUNNING,
						SUM(QUANTITY_IN_QUEUE) AS QUANTITY_IN_QUEUE,
						SUM(QUANTITY_COMPLETED) AS QUANTITY_COMPLETED,
						SUM(INV_VALUE_USD) AS INV_VALUE_USD
					FROM
						COUNT_DEVICE_HOLD
					WHERE PKG = '".@$this->params['pkg']."'
					GROUP BY
						DEVICE
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get data for active mo (mo) table
	public function getOnHoldMo(){
		$sql 	= "	SELECT 
						MO,
						CUSTOMER,
						SCHEDULED_QUANTITY,
						QUANTITY_RUNNING,
						QUANTITY_IN_QUEUE,
						QUANTITY_COMPLETED,
						DESCRIPTION,
						INV_VALUE_USD,
						ATTRIBUTE1 AS START_DATE,
						SOD,
						RSOD,
						REMARKS
					FROM
						WIP_CURR_STATUS_HOLD
					WHERE PKG = '".@$this->params['pkg']."'
					AND DEVICE = '".@$this->params['dvc']."'
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}
}
