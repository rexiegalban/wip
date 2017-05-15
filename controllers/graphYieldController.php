<?php
class GraphYieldController extends WipAppModel{

	private $params;

	public function __construct($params = null){
		parent::__construct();
		$this->params = $params;
	}

	// yield 99 graph
	public function yield99Graph(){
		$sql 	= "	SELECT 
						COUNT,
						DATE_TIME,
						DESCRIPTION
					FROM
						WIP_DASH_BOARD
					WHERE
						DESCRIPTION = 'YIELD 99'
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

	// yield 98 graph
	public function yield98Graph(){
		$sql 	= "	SELECT 
						COUNT,
						DATE_TIME,
						DESCRIPTION
					FROM
						WIP_DASH_BOARD
					WHERE
						DESCRIPTION = 'YIELD 98'
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

	// yield 95 graph
	public function yield95Graph(){
		$sql 	= "	SELECT 
						COUNT,
						DATE_TIME,
						DESCRIPTION
					FROM
						WIP_DASH_BOARD
					WHERE
						DESCRIPTION = 'YIELD 95'
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

	// yield Below95 graph
	public function yieldBelow95Graph(){
		$sql 	= "	SELECT 
						COUNT,
						DATE_TIME,
						DESCRIPTION
					FROM
						WIP_DASH_BOARD
					WHERE
						DESCRIPTION = 'YIELD LESS 95'
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
