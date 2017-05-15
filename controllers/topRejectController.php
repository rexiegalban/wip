<?php
class TopRejectController extends WipAppModel{

	private $params;

	public function __construct($params = null){
		parent::__construct();
		$this->params = $params;
	}

	//get top rejects data - dashboard
	public function getTopRejectData(){
		$sql 	= "	SELECT 
						FLEX_VALUE,
						DESCRIPTION,
						R_QTY
					FROM
						WIP_REJECT_SUM
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get top rejects data - detials
	public function getTopRejects(){
		$sql 	= "	SELECT 
						FLEX_VALUE,
						DESCRIPTION,
						R_QTY,
						OP_DESCRIPTION
					FROM
						WIP_REJECT_SUM_DET
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	//get top rejects data - detials
	public function getTopRejectDetails(){
		$sql 	= "	SELECT 
						CUSTOMER,
						PKG,
						DEVICE,
						MO,
						OP_DESCRIPTION,
						FLEX_VALUE,
						DESCRIPTION,
						R_QTY
					FROM
						WIP_REJECTS
					WHERE FLEX_VALUE = '".@$this->params['flex']."'

				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}
}
?>