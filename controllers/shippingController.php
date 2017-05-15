<?php
class ShippingController extends WipAppModel{

	private $params;

	public function __construct($params = null){
		parent::__construct();
		$this->params = $params;
	}

	//get count Shipping
	public function getShippingCount(){
		$sql 	= "	SELECT 
						PKG
					FROM
						WIP_FOR_SHIPOUT
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get count Shipping inv value
	public function getShippingInvValue(){
		$sql 	= "	SELECT 
						SUM(INV_VALUE_USD) AS INV_VALUE
					FROM
						WIP_FOR_SHIPOUT
				";

		$this->select($sql)->query($sql);
		return $this->fetchRow();
	}

	//get data for Shipping (package) table
	public function getShippingPackages(){
		$sql 	= "	SELECT 
						PKG,
						SUM(CTR_MO) AS CTR_MO,
						SUM(SCHEDULED_QUANTITY) AS SCHEDULED_QUANTITY,
						SUM(QUANTITY_RUNNING) AS QUANTITY_RUNNING,
						SUM(QUANTITY_IN_QUEUE) AS QUANTITY_IN_QUEUE,
						SUM(QUANTITY_COMPLETED) AS QUANTITY_COMPLETED,
						SUM(INV_VALUE_USD) AS INV_VALUE_USD
					FROM
						COUNT_PKG_FS
					GROUP BY
						PKG

				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get data for Shipping (device) table
	public function getShippingDevice(){
		$sql 	= "	SELECT 
						DEVICE,
						SUM(CTR_MO) AS CTR_MO,
						SUM(SCHEDULED_QUANTITY) AS SCHEDULED_QUANTITY,
						SUM(QUANTITY_RUNNING) AS QUANTITY_RUNNING,
						SUM(QUANTITY_IN_QUEUE) AS QUANTITY_IN_QUEUE,
						SUM(QUANTITY_COMPLETED) AS QUANTITY_COMPLETED,
						SUM(INV_VALUE_USD) AS INV_VALUE_USD
					FROM
						COUNT_DEVICE_FS
					WHERE PKG = '".@$this->params['pkg']."'
					GROUP BY
						DEVICE
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get data for Shipping (mo) table
	public function getShippingMo(){
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
						WIP_FOR_SHIPOUT
					WHERE PKG = '".@$this->params['pkg']."'
					AND DEVICE = '".@$this->params['dvc']."'
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}
}
