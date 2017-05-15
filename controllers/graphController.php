<?php
class GraphController extends WipAppModel{

	private $params;

	public function __construct($params = null){
		parent::__construct();
		$this->params = $params;
	}

	// active mo's graph
	public function activeMoGraph(){
		$sql 	= "	SELECT 
					  	COUNT,
					  	DATE_TIME,
					  	DESCRIPTION,
					  	round(MO_VALUE,2) AS MO_VALUE
					FROM 
					  	WIP_DASH_BOARD
					WHERE 
					  	DESCRIPTION = 'ACTIVE MO'
					AND
					  	to_char(DATE_TIME,'MM/DD/YYYY')
					BETWEEN
					 	To_char(sysdate-7,'MM/DD/YYYY')
					 	AND
					  	To_char(sysdate,'MM/DD/YYYY')
					ORDER BY
						DATE_TIME ASC

					";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	// warehouse mo's graph
	public function warehouseMoGraph(){
		$sql 	= "	SELECT 
						COUNT,
						DATE_TIME,
						DESCRIPTION,
						round(MO_VALUE,2) AS MO_VALUE
					FROM
						WIP_DASH_BOARD
					WHERE
						DESCRIPTION = 'WAREHOUSE MO'
					AND
					  	to_char(DATE_TIME,'MM/DD/YYYY')
					BETWEEN
					 	To_char(sysdate-7,'MM/DD/YYYY')
					 	AND
					  	To_char(sysdate,'MM/DD/YYYY')
					ORDER BY DATE_TIME ASC
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	// production line mo's graph
	public function productionLineMoGraph(){
		$sql 	= "	SELECT 
						COUNT,
						DATE_TIME,
						DESCRIPTION,
						round(MO_VALUE,2) AS MO_VALUE
					FROM
						WIP_DASH_BOARD
					WHERE
						DESCRIPTION = 'PRODUCTION MO'
					AND
					  	to_char(DATE_TIME,'MM/DD/YYYY')
					BETWEEN
					 	To_char(sysdate-7,'MM/DD/YYYY')
					 	AND
					  	To_char(sysdate,'MM/DD/YYYY')
					ORDER BY DATE_TIME ASC
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	// front of line mo's graph
	public function frontOfLineMoGraph(){
		$sql 	= "	SELECT 
						COUNT,
						DATE_TIME,
						DESCRIPTION,
						round(MO_VALUE,2) AS MO_VALUE
					FROM
						WIP_DASH_BOARD
					WHERE
						DESCRIPTION = 'FOL MO'
					AND
					  	to_char(DATE_TIME,'MM/DD/YYYY')
					BETWEEN
					 	To_char(sysdate-7,'MM/DD/YYYY')
					 	AND
					  	To_char(sysdate,'MM/DD/YYYY')
					ORDER BY DATE_TIME ASC
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	// end of line mo's graph
	public function endOfLineMoGraph(){
		$sql 	= "	SELECT 
						COUNT,
						DATE_TIME,
						DESCRIPTION,
						round(MO_VALUE,2) AS MO_VALUE
					FROM
						WIP_DASH_BOARD
					WHERE
						DESCRIPTION = 'EOL MO'
					AND
					  	to_char(DATE_TIME,'MM/DD/YYYY')
					BETWEEN
					 	To_char(sysdate-7,'MM/DD/YYYY')
					 	AND
					  	To_char(sysdate,'MM/DD/YYYY')
					ORDER BY DATE_TIME ASC
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	// shipping mo's graph
	public function shippingMoGraph(){
		$sql 	= "	SELECT 
						COUNT,
						DATE_TIME,
						DESCRIPTION,
						round(MO_VALUE,2) AS MO_VALUE
					FROM
						WIP_DASH_BOARD
					WHERE
						DESCRIPTION = 'FOR SHIP OUT'
					AND
					  	to_char(DATE_TIME,'MM/DD/YYYY')
					BETWEEN
					 	To_char(sysdate-7,'MM/DD/YYYY')
					 	AND
					  	To_char(sysdate,'MM/DD/YYYY')
					ORDER BY DATE_TIME ASC
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	// on schedule mo's graph
	public function onScheduleMoGraph(){
		$sql 	= "	SELECT 
						COUNT,
						DATE_TIME,
						DESCRIPTION,
						round(MO_VALUE,2) AS MO_VALUE
					FROM
						WIP_DASH_BOARD
					WHERE
						DESCRIPTION = 'ON-SCHED MO'
					AND
					  	to_char(DATE_TIME,'MM/DD/YYYY')
					BETWEEN
					 	To_char(sysdate-7,'MM/DD/YYYY')
					 	AND
					  	To_char(sysdate,'MM/DD/YYYY')
					ORDER BY DATE_TIME ASC
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	// missed sod mo's graph
	public function missedSodMoGraph(){
		$sql 	= "	SELECT 
						COUNT,
						DATE_TIME,
						DESCRIPTION,
						round(MO_VALUE,2) AS MO_VALUE
					FROM
						WIP_DASH_BOARD
					WHERE
						DESCRIPTION = 'MISSED SOD'
					AND
					  	to_char(DATE_TIME,'MM/DD/YYYY')
					BETWEEN
					 	To_char(sysdate-7,'MM/DD/YYYY')
					 	AND
					  	To_char(sysdate,'MM/DD/YYYY')
					ORDER BY DATE_TIME ASC
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

	// on hold mo's graph
	public function onHoldMoGraph(){
		$sql 	= "	SELECT 
						COUNT,
						DATE_TIME,
						DESCRIPTION,
						round(MO_VALUE,2) AS MO_VALUE
					FROM
						WIP_DASH_BOARD
					WHERE
						DESCRIPTION = 'ON-HOLD'
					AND
					  	to_char(DATE_TIME,'MM/DD/YYYY')
					BETWEEN
					 	To_char(sysdate-7,'MM/DD/YYYY')
					 	AND
					  	To_char(sysdate,'MM/DD/YYYY')
					ORDER BY DATE_TIME ASC
				";

		$this->select($sql)->query($sql);
		return $this->fetchAll();
	}

}
