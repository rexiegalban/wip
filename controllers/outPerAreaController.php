<?php
class OutPerAreaController extends WipAppModel{

	private $params;

	public function __construct($params = null){
		parent::__construct();
		$this->params = $params;
	}

	//get die attached data
	public function getDieAttachedData(){
		$sql 	= "	SELECT 
						PKG,
						sum(QTY_IN) AS QTY_IN,
						sum(QTY_OUT) AS QTY_OUT
					FROM
						WIP_DA_OP
					GROUP BY
						PKG
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get wire bond data
	public function getWireBOndData(){
		$sql 	= "	SELECT 
						PKG,
						sum(QTY_IN) AS QTY_IN,
						sum(QTY_OUT) AS QTY_OUT
					FROM
						WIP_WIREBOND_OP
					GROUP BY
						PKG
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get mold data
	public function getMoldData(){
		$sql 	= "	SELECT 
						PKG,
						sum(QTY_IN) AS QTY_IN,
						sum(QTY_OUT) AS QTY_OUT
					FROM
						WIP_MOLD_OP
					GROUP BY
						PKG
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get ISO data
	public function getIsoData(){
		$sql 	= "	SELECT 
						PKG,
						sum(QTY_IN) AS QTY_IN,
						sum(QTY_OUT) AS QTY_OUT
					FROM
						WIP_ISO_OP
					GROUP BY
						PKG
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get 4th OPT data
	public function get4thData(){
		$sql 	= "	SELECT 
						PKG,
						sum(QTY_IN) AS QTY_IN,
						sum(QTY_OUT) AS QTY_OUT
					FROM
						WIP_4TH_OP
					GROUP BY
						PKG
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get final test data
	public function getFinalTestData(){
		$sql 	= "	SELECT 
						PKG,
						sum(QTY_IN) AS QTY_IN,
						sum(QTY_OUT) AS QTY_OUT
					FROM
						WIP_FINAL_OP
					GROUP BY
						PKG
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get pack data
	public function getPackData(){
		$sql 	= "	SELECT 
						PKG,
						sum(QTY_IN) AS QTY_IN,
						sum(QTY_OUT) AS QTY_OUT
					FROM
						WIP_PACK_OP
					GROUP BY
						PKG
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

}
