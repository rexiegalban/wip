<div class="graph-active-mo">
	<div class="row">
		<br />
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body tabs">
					<ul class="nav nav-pills">
						<li style="background: #E6E6E6;" class="active">
							<a id="active-mo-btn" href="#" data-toggle="tab">ACTIVE MO</a>
						</li>
						<li style="background: #E6E6E6;">
							<a id="warehouse-btn" href="#" data-toggle="tab">WAREHOUSE</a>
						</li>
						<li style="background: #E6E6E6;">
							<a id="fol-btn" href="#" data-toggle="tab">FOL</a>
						</li>
						<li style="background: #E6E6E6;">
							<a id="eol-btn" href="#" data-toggle="tab">EOL</a>
						</li>
						<li style="background: #E6E6E6;">
							<a id="shipping-btn" href="#" data-toggle="tab">SHIPPING</a>
						</li>
						<li style="background: #E6E6E6;">
							<a id="onSchedule-btn" href="#" data-toggle="tab">ON SCHEDULE</a>
						</li>
						<li style="background: #E6E6E6;">
							<a id="missedSod-btn" href="#" data-toggle="tab">MISSED SOD</a>
						</li>
						<li style="background: #E6E6E6;">
							<a id="onHold-btn" href="#" data-toggle="tab">ON HOLD</a>
						</li>
						<li style="float:right">
							<button class="backDashboard btn btn-info" data-toggle="">
								Back Dashboard
							</button>
						</li>
					</ul>
					<hr style="margin-bottom: 0px;" />
					<div class="tab-content">
						<div class="canvas-wrapper">
							<div id="activeMoGraph" style="display:none;">
								<h4 id="activeMo-title1" style="color:#568657;"></h4>
									<canvas class="main-chart" id="active-count-chart" height="150" width="600"></canvas>
								<h4 id="activeMo-title2" style="color:#568657;"></h4>
									<canvas class="main-chart" id="active-value-chart" height="150" width="600"></canvas>
								<h4 id="activeMo-title3" style="color:#568657;"></h4>
									<canvas class="main-chart" id="active-qty-chart" height="150" width="600"></canvas>
							</div>
							<div id="warehouseMoGraph" style="display:none;">
								<h4 id="warehouseMo-title1" style="color:#568657;"></h4>
									<canvas class="main-chart" id="warehouse-count-chart" height="150" width="600"></canvas>
								<h4 id="warehouseMo-title2" style="color:#568657;"></h4>
									<canvas class="main-chart" id="warehouse-value-chart" height="150" width="600"></canvas>
							</div>
							<div id="folMoGraph" style="display:none;">
								<h4 id="folMo-title1" style="color:#568657;"></h4>
									<canvas class="main-chart" id="fol-count-chart" height="150" width="600"></canvas>
								<h4 id="folMo-title2" style="color:#568657;"></h4>
									<canvas class="main-chart" id="fol-value-chart" height="150" width="600"></canvas>
							</div>
							<div id="eolMoGraph" style="display:none;">
								<h4 id="eolMo-title1" style="color:#568657;"></h4>
									<canvas class="main-chart" id="eol-count-chart" height="150" width="600"></canvas>
								<h4 id="eolMo-title2" style="color:#568657;"></h4>
									<canvas class="main-chart" id="eol-value-chart" height="150" width="600"></canvas>
							</div>
							<div id="shippingMoGraph" style="display:none;">
								<h4 id="shippingMo-title1" style="color:#568657;"></h4>
									<canvas class="main-chart" id="shipping-count-chart" height="150" width="600"></canvas>
								<h4 id="shippingMo-title2" style="color:#568657;"></h4>
									<canvas class="main-chart" id="shipping-value-chart" height="150" width="600"></canvas>
							</div>
							<div id="onScheduleMoGraph" style="display:none;">
								<h4 id="onScheduleMo-title1" style="color:#568657;"></h4>
									<canvas class="main-chart" id="onSchedule-count-chart" height="150" width="600"></canvas>
								<h4 id="onScheduleMo-title2" style="color:#568657;"></h4>
									<canvas class="main-chart" id="onSchedule-value-chart" height="150" width="600"></canvas>
							</div>
							<div id="missedSodMoGraph" style="display:none;">
								<h4 id="missedSodMo-title1" style="color:#568657;"></h4>
									<canvas class="main-chart" id="missedSod-count-chart" height="150" width="600"></canvas>
								<h4 id="missedSodMo-title2" style="color:#568657;"></h4>
									<canvas class="main-chart" id="missedSod-value-chart" height="150" width="600"></canvas>
							</div>
							<div id="onHoldMoGraph" style="display:none;">
								<h4 id="onHoldMo-title1" style="color:#568657;"></h4>
									<canvas class="main-chart" id="onHold-count-chart" height="150" width="600"></canvas>
								<h4 id="onHoldMo-title2" style="color:#568657;"></h4>
									<canvas class="main-chart" id="onHold-value-chart" height="150" width="600"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.panel-->
		</div><!-- /.col-->
	</div><!--/.row-->
</div><!--/.graph-active-mo-->

<?php 
	require ('controllers/graphController.php'); 

	#get date time
	//active mo
	$getData = new GraphController();
	if($data = $getData->activeMoGraph()){
		$activeMoDateUpdate= array();
		foreach($data as $row){
			$activeMoDateUpdate[] = date("d D / h:i A",strtotime($row['DATE_TIME']));
		}
	}
	//warehouse
	$getData = new GraphController();
	if($data = $getData->warehouseMoGraph()){
		$warehouseMoDateUpdate= array();
		foreach($data as $row){
			$warehouseMoDateUpdate[] = date("d D / h:i A",strtotime($row['DATE_TIME']));
		}
	}
	//front of line
	$getData = new GraphController();
	if($data = $getData->frontOfLineMoGraph()){
		$frontOfLineMoDateUpdate= array();
		foreach($data as $row){
			$frontOfLineMoDateUpdate[] = date("d D / h:i A",strtotime($row['DATE_TIME']));
		}
	}
	//end of line
	$getData = new GraphController();
	if($data = $getData->endOfLineMoGraph()){
		$endOfLineMoDateUpdate= array();
		foreach($data as $row){
			$endOfLineMoDateUpdate[] = date("d D / h:i A",strtotime($row['DATE_TIME']));
		}
	}
	//shipping
	$getData = new GraphController();
	if($data = $getData->shippingMoGraph()){
		$shippingMoDateUpdate= array();
		foreach($data as $row){
			$shippingMoDateUpdate[] = date("d D / h:i A",strtotime($row['DATE_TIME']));
		}
	}
	//on schedule
	$getData = new GraphController();
	if($data = $getData->onScheduleMoGraph()){
		$onScheduleMoDateUpdate= array();
		foreach($data as $row){
			$onScheduleMoDateUpdate[] = date("d D / h:i A",strtotime($row['DATE_TIME']));
		}
	}
	//missed sod
	$getData = new GraphController();
	if($data = $getData->missedSodMoGraph()){
		$missedSodMoDateUpdate= array();
		foreach($data as $row){
			$missedSodMoDateUpdate[] = date("d D / h:i A",strtotime($row['DATE_TIME']));
		}
	}
	//on hold
	$getData = new GraphController();
	if($data = $getData->onHoldMoGraph()){
		$onHoldMoDateUpdate= array();
		foreach($data as $row){
			$onHoldMoDateUpdate[] = date("d D / h:i A",strtotime($row['DATE_TIME']));
		}
	}
	
	#get count
	//active mo
	$getData = new GraphController();
	if($data = $getData->activeMoGraph()){
		$activeMoCountUpdate= array();
		foreach($data as $row){
			$activeMoCountUpdate[] = $row['COUNT'];
		}
	}
	//warehouse
	$getData = new GraphController();
	if($data = $getData->warehouseMoGraph()){
		$warehouseMoCountUpdate= array();
		foreach($data as $row){
			$warehouseMoCountUpdate[] = number_format($row['COUNT']);
		}
	}
	//front of line
	$getData = new GraphController();
	if($data = $getData->frontOfLineMoGraph()){
		$frontOfLineMoCountUpdate= array();
		foreach($data as $row){
			$frontOfLineMoCountUpdate[] = $row['COUNT'];
		}
	}
	//end of line
	$getData = new GraphController();
	if($data = $getData->endOfLineMoGraph()){
		$endOfLineMoCountUpdate= array();
		foreach($data as $row){
			$endOfLineMoCountUpdate[] = $row['COUNT'];
		}
	}
	//shipping
	$getData = new GraphController();
	if($data = $getData->shippingMoGraph()){
		$shippingMoCountUpdate= array();
		foreach($data as $row){
			$shippingMoCountUpdate[] = $row['COUNT'];
		}
	}
	//on schedule
	$getData = new GraphController();
	if($data = $getData->onScheduleMoGraph()){
		$onScheduleMoCountUpdate= array();
		foreach($data as $row){
			$onScheduleMoCountUpdate[] = $row['COUNT'];
		}
	}
	//missed sod
	$getData = new GraphController();
	if($data = $getData->missedSodMoGraph()){
		$missedSodMoCountUpdate= array();
		foreach($data as $row){
			$missedSodMoCountUpdate[] = $row['COUNT'];
		}
	}
	//on hold
	$getData = new GraphController();
	if($data = $getData->onHoldMoGraph()){
		$onHoldMoCountUpdate= array();
		foreach($data as $row){
			$onHoldMoCountUpdate[] = $row['COUNT'];
		}
	}
	
	#get inv value
	//active mo
	$getData = new GraphController();
	if($data = $getData->activeMoGraph()){
		$activeMoValueUpdate= array();
		foreach($data as $row){
			$activeMoValueUpdate[] = $row['MO_VALUE'];
		}
	}
	//warehouse mo
	$getData = new GraphController();
	if($data = $getData->warehouseMoGraph()){
		$warehouseMoValueUpdate= array();
		foreach($data as $row){
			$warehouseMoValueUpdate[] = $row['MO_VALUE'];
		}
	}
	//front of line mo
	$getData = new GraphController();
	if($data = $getData->frontOfLineMoGraph()){
		$frontOfLineMoValueUpdate= array();
		foreach($data as $row){
			$frontOfLineMoValueUpdate[] = $row['MO_VALUE'];
		}
	}
	//end of line mo
	$getData = new GraphController();
	if($data = $getData->endOfLineMoGraph()){
		$endOfLineMoValueUpdate= array();
		foreach($data as $row){
			$endOfLineMoValueUpdate[] = $row['MO_VALUE'];
		}
	}
	//shipping mo
	$getData = new GraphController();
	if($data = $getData->shippingMoGraph()){
		$shippingMoValueUpdate= array();
		foreach($data as $row){
			$shippingMoValueUpdate[] = $row['MO_VALUE'];
		}
	}
	//onSchedule mo
	$getData = new GraphController();
	if($data = $getData->onScheduleMoGraph()){
		$onScheduleMoValueUpdate= array();
		foreach($data as $row){
			$onScheduleMoValueUpdate[] = $row['MO_VALUE'];
		}
	}
	//missedSod mo
	$getData = new GraphController();
	if($data = $getData->missedSodMoGraph()){
		$missedSodMoValueUpdate= array();
		foreach($data as $row){
			$missedSodMoValueUpdate[] = $row['MO_VALUE'];
		}
	}
	//onHold mo
	$getData = new GraphController();
	if($data = $getData->onHoldMoGraph()){
		$onHoldMoValueUpdate= array();
		foreach($data as $row){
			$onHoldMoValueUpdate[] = $row['MO_VALUE'];
		}
	}

?>

<script>	

	var randomScalingFactor = function(){ return Math.round(Math.random()*1000)};
	/* active mo count chart */
	function numberFormat(n) {
    return n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
	}
	var activeMoChart1 = {
			labels : [
					<?php 
						for ($i=0; $i < count($activeMoDateUpdate); $i++) { 
							$x = '"'.$activeMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "ACTIVE MO",
					fillColor : "rgba(86, 118, 103,0.2)",
					strokeColor : "rgba(86, 118, 103,1)",
					pointColor : "rgba(86, 118, 103,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(86, 118, 103,1)",
					data : [
							<?php 
								for ($i=0; $i < count($activeMoCountUpdate); $i++) { 
									$x = '"'.$activeMoCountUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* active mo value chart */
	var activeMoChart2 = {
			labels : [
					<?php 
						for ($i=0; $i < count($activeMoDateUpdate); $i++) { 
							$x = '"'.$activeMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "MO VALUE",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [
							<?php 
								for ($i=0; $i < count($activeMoValueUpdate); $i++) { 
									$x = '"'.$activeMoValueUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}	
	/* warehouse mo count chart */
	var warehouseMoChart1 = {
			labels : [
					<?php 
						for ($i=0; $i < count($warehouseMoDateUpdate); $i++) { 
							$x = '"'.$warehouseMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "WAREHOUSE MO",
					fillColor : "rgba(86, 118, 103,0.2)",
					strokeColor : "rgba(86, 118, 103,1)",
					pointColor : "rgba(86, 118, 103,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(86, 118, 103,1)",
					data : [
							<?php 
								for ($i=0; $i < count($warehouseMoCountUpdate); $i++) { 
									$x = '"'.$warehouseMoCountUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* warehouse mo value chart */
	var warehouseMoChart2 = {
			labels : [
					<?php 
						for ($i=0; $i < count($warehouseMoDateUpdate); $i++) { 
							$x = '"'.$warehouseMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "MO VALUE",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [
							<?php 
								for ($i=0; $i < count($warehouseMoValueUpdate); $i++) { 
									$x = '"'.$warehouseMoValueUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* front of line mo count chart */
	var frontOfLineMoChart1 = {
			labels : [
					<?php 
						for ($i=0; $i < count($frontOfLineMoDateUpdate); $i++) { 
							$x = '"'.$frontOfLineMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "FRONT OF LINE MO",
					fillColor : "rgba(86, 118, 103,0.2)",
					strokeColor : "rgba(86, 118, 103,1)",
					pointColor : "rgba(86, 118, 103,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(86, 118, 103,1)",
					data : [
							<?php 
								for ($i=0; $i < count($frontOfLineMoCountUpdate); $i++) { 
									$x = '"'.$frontOfLineMoCountUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* front of line mo value chart */
	var frontOfLineMoChart2 = {
			labels : [
					<?php 
						for ($i=0; $i < count($frontOfLineMoDateUpdate); $i++) { 
							$x = '"'.$frontOfLineMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "MO VALUE",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [
							<?php 
								for ($i=0; $i < count($frontOfLineMoValueUpdate); $i++) { 
									$x = '"'.$frontOfLineMoValueUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* end of line mo count chart */
	var endOfLineMoChart1 = {
			labels : [
					<?php 
						for ($i=0; $i < count($endOfLineMoDateUpdate); $i++) { 
							$x = '"'.$endOfLineMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "END OF LINE MO",
					fillColor : "rgba(86, 118, 103,0.2)",
					strokeColor : "rgba(86, 118, 103,1)",
					pointColor : "rgba(86, 118, 103,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(86, 118, 103,1)",
					data : [
							<?php 
								for ($i=0; $i < count($endOfLineMoCountUpdate); $i++) { 
									$x = '"'.$endOfLineMoCountUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* end of line mo value chart */
	var endOfLineMoChart2 = {
			labels : [
					<?php 
						for ($i=0; $i < count($endOfLineMoDateUpdate); $i++) { 
							$x = '"'.$endOfLineMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "MO VALUE",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [
							<?php 
								for ($i=0; $i < count($endOfLineMoValueUpdate); $i++) { 
									$x = '"'.$endOfLineMoValueUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* shipping mo count chart */
	var shippingMoChart1 = {
			labels : [
					<?php 
						for ($i=0; $i < count($shippingMoDateUpdate); $i++) { 
							$x = '"'.$shippingMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "SHPPING MO",
					fillColor : "rgba(86, 118, 103,0.2)",
					strokeColor : "rgba(86, 118, 103,1)",
					pointColor : "rgba(86, 118, 103,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(86, 118, 103,1)",
					data : [
							<?php 
								for ($i=0; $i < count($shippingMoCountUpdate); $i++) { 
									$x = '"'.$shippingMoCountUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* shipping mo value chart */
	var shippingMoChart2 = {
			labels : [
					<?php 
						for ($i=0; $i < count($shippingMoDateUpdate); $i++) { 
							$x = '"'.$shippingMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "MO VALUE",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [
							<?php 
								for ($i=0; $i < count($shippingMoValueUpdate); $i++) { 
									$x = '"'.$shippingMoValueUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* onSchedule mo count chart */
	var onScheduleMoChart1 = {
			labels : [
					<?php 
						for ($i=0; $i < count($onScheduleMoDateUpdate); $i++) { 
							$x = '"'.$onScheduleMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "ON SCHEDULE MO",
					fillColor : "rgba(86, 118, 103,0.2)",
					strokeColor : "rgba(86, 118, 103,1)",
					pointColor : "rgba(86, 118, 103,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(86, 118, 103,1)",
					data : [
							<?php 
								for ($i=0; $i < count($onScheduleMoCountUpdate); $i++) { 
									$x = '"'.$onScheduleMoCountUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* onSchedule mo value chart */
	var onScheduleMoChart2 = {
			labels : [
					<?php 
						for ($i=0; $i < count($onScheduleMoDateUpdate); $i++) { 
							$x = '"'.$onScheduleMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "MO VALUE",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [
							<?php 
								for ($i=0; $i < count($onScheduleMoValueUpdate); $i++) { 
									$x = '"'.$onScheduleMoValueUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* missedSod mo count chart */
	var missedSodMoChart1 = {
			labels : [
					<?php 
						for ($i=0; $i < count($missedSodMoDateUpdate); $i++) { 
							$x = '"'.$missedSodMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "MISSED SOD MO",
					fillColor : "rgba(86, 118, 103,0.2)",
					strokeColor : "rgba(86, 118, 103,1)",
					pointColor : "rgba(86, 118, 103,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(86, 118, 103,1)",
					data : [
							<?php 
								for ($i=0; $i < count($missedSodMoCountUpdate); $i++) { 
									$x = '"'.$missedSodMoCountUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* missedSod mo value chart */
	var missedSodMoChart2 = {
			labels : [
					<?php 
						for ($i=0; $i < count($missedSodMoDateUpdate); $i++) { 
							$x = '"'.$missedSodMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "MO VALUE",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [
							<?php 
								for ($i=0; $i < count($missedSodMoValueUpdate); $i++) { 
									$x = '"'.$missedSodMoValueUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* onHold mo count chart */
	var onHoldMoChart1 = {
			labels : [
					<?php 
						for ($i=0; $i < count($onHoldMoDateUpdate); $i++) { 
							$x = '"'.$onHoldMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "ON HOLD MO",
					fillColor : "rgba(86, 118, 103,0.2)",
					strokeColor : "rgba(86, 118, 103,1)",
					pointColor : "rgba(86, 118, 103,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(86, 118, 103,1)",
					data : [
							<?php 
								for ($i=0; $i < count($onHoldMoCountUpdate); $i++) { 
									$x = '"'.$onHoldMoCountUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* onHold mo value chart */
	var onHoldMoChart2 = {
			labels : [
					<?php 
						for ($i=0; $i < count($onHoldMoDateUpdate); $i++) { 
							$x = '"'.$onHoldMoDateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "MO VALUE",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [
							<?php 
								for ($i=0; $i < count($onHoldMoValueUpdate); $i++) { 
									$x = '"'.$onHoldMoValueUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
		
	window.onload = function(){
		document.getElementById('activeMoGraph').style.display = "";

		$('#activeMo-title1').html("ACTIVE MO");
		$('#activeMo-title2').html(" <hr />MO VALUE");
		$('#activeMo-title3').html(" <hr />TOTAL QUANTITY");

		$("#activeMoGraph").show();
		$("#warehouseMoGraph").hide();
		$("#folMoGraph").hide();
		$("#eolMoGraph").hide();
		$("#shippingMoGraph").hide();
		$("#onScheduleMoGraph").hide();
		$("#missedSodMoGraph").hide();
		$("#onHoldMoGraph").hide();

		//mo count chart
		var chart1 = document.getElementById("active-count-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(activeMoChart1, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'cnt') %>",
        	scaleLabel:
	        	function(label){
	        		return  label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
		//mo value chart
		var chart1 = document.getElementById("active-value-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(activeMoChart2, {
		   	responsive : true,
		   	animation: true,
		   	barValueSpacing : 5,
		   	barDatasetSpacing : 1,
		   	tooltipFillColor: "rgba(0,0,0,0.8)",                
		   	multiTooltipTemplate: "<%= datasetLabel %> - <%= addCommas(value,'val') %>",
        	scaleLabel:
	        	function(label){
	        		return  ' $' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	        	}
		});
		
	};
	function addCommas(nStr,cntVal)
	{
	    nStr += '';
	    x = nStr.split('.');
	    x1 = x[0];
	    x2 = x.length > 1 ? '.' + x[1] : '';
	    var rgx = /(\d+)(\d{3})/;
	    while (rgx.test(x1)) {
	        x1 = x1.replace(rgx, '$1' + ',' + '$2');
	    }
	    if (cntVal == 'val') {
	    	return ' $' +x1 + x2;
	    };
	    return x1 + x2;
	}
</script>