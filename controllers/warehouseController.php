<?php
class WarehouseController extends WipAppModel{

	private $params;

	public function __construct($params = null){
		parent::__construct();
		$this->params = $params;
	}

	//get count warehouse
	public function getWarehouseCount(){
		$sql 	= "	SELECT 
						PKG
					FROM
						WIP_CURR_STATUS_WH
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get count warehouse inv value
	public function getWarehouseInvValue(){
		$sql 	= "	SELECT 
						SUM(INV_VALUE_USD) AS INV_VALUE
					FROM
						WIP_CURR_STATUS_WH
				";

		$this->select($sql)->query($sql);
		return $this->fetchRow();
	}

	//get data for warehouse (package) table
	public function getWarehousePackages(){
		$sql 	= "	SELECT 
						PKG,
						SUM(CTR_MO) AS CTR_MO,
						SUM(SCHEDULED_QUANTITY) AS SCHEDULED_QUANTITY,
						SUM(QUANTITY_RUNNING) AS QUANTITY_RUNNING,
						SUM(QUANTITY_IN_QUEUE) AS QUANTITY_IN_QUEUE,
						SUM(QUANTITY_COMPLETED) AS QUANTITY_COMPLETED,
						SUM(INV_VALUE_USD) AS INV_VALUE_USD
					FROM
						COUNT_PKG_WH
					GROUP BY
						PKG

				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get data for warehouse (device) table
	public function getWarehouseDevice(){
		$sql 	= "	SELECT 
						DEVICE,
						SUM(CTR_MO) AS CTR_MO,
						SUM(SCHEDULED_QUANTITY) AS SCHEDULED_QUANTITY,
						SUM(QUANTITY_RUNNING) AS QUANTITY_RUNNING,
						SUM(QUANTITY_IN_QUEUE) AS QUANTITY_IN_QUEUE,
						SUM(QUANTITY_COMPLETED) AS QUANTITY_COMPLETED,
						SUM(INV_VALUE_USD) AS INV_VALUE_USD
					FROM
						COUNT_DEVICE_WH
					WHERE PKG = '".@$this->params['pkg']."'
					GROUP BY
						DEVICE
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get data for warehouse (mo) table
	public function getWarehouseMo(){
		$sql 	= "	SELECT 
						MO,
						CUSTOMER,
						SCHEDULED_QUANTITY,
						QUANTITY_RUNNING,
						INV_VALUE_USD,
						QUANTITY_IN_QUEUE,
						QUANTITY_COMPLETED,
						DESCRIPTION,
						ATTRIBUTE1 AS START_DATE,
						SOD,
						RSOD
					FROM
						WIP_CURR_STATUS_WH
					WHERE PKG = '".@$this->params['pkg']."'
					AND DEVICE = '".@$this->params['dvc']."'
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}
}
