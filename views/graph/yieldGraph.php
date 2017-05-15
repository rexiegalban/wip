<div class="graph-active-mo">
	<div class="row">
		<br />
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body tabs">
					<ul class="nav nav-pills">
						<li style="background: #E6E6E6;" class="active">
							<a id="yield99-btn" href="#" data-toggle="tab">YIELD 99%</a>
						</li>
						<li style="background: #E6E6E6;" class="">
							<a id="yield98-btn" href="#" data-toggle="tab">YIELD 98%</a>
						</li>
						<li style="background: #E6E6E6;" class="">
							<a id="yield95-btn" href="#" data-toggle="tab">YIELD 95%</a>
						</li>
						<li style="background: #E6E6E6;" class="">
							<a id="yield-below95-btn" href="#" data-toggle="tab">YIELD BELOW 95%</a>
						</li>
						<li style="float:right">
							<button class="backDashboard btn btn-info" data-toggle="">
								Back Dashboard
							</button>
						</li>
					</ul>
					<hr />
					<div class="tab-content">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="yield99-chart" height="200" width="600"></canvas>
							<canvas style="display:none;" class="main-chart" id="yield98-chart" height="200" width="600"></canvas>
							<canvas style="display:none;" class="main-chart" id="yield95-chart" height="200" width="600"></canvas>
							<canvas style="display:none;" class="main-chart" id="yield-below95-chart" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div><!--/.panel-->
		</div><!-- /.col-->
	</div><!--/.row-->
</div><!--/.graph-active-mo-->

<?php 
	require ('controllers/graphYieldController.php'); 

	#get date time
	//yield 99
	$getData = new GraphYieldController();
	if($data = $getData->yield99Graph()){
		$yield99DateUpdate= array();
		foreach($data as $row){
			$yield99DateUpdate[] = date("d D / h:i A",strtotime($row['DATE_TIME']));
		}
	}
	//yield 98
	$getData = new GraphYieldController();
	if($data = $getData->yield98Graph()){
		$yield98DateUpdate= array();
		foreach($data as $row){
			$yield98DateUpdate[] = date("d D / h:i A",strtotime($row['DATE_TIME']));
		}
	}
	//yield 95
	$getData = new GraphYieldController();
	if($data = $getData->yield95Graph()){
		$yield95DateUpdate= array();
		foreach($data as $row){
			$yield95DateUpdate[] = date("d D / h:i A",strtotime($row['DATE_TIME']));
		}
	}
	//yield Below95
	$getData = new GraphYieldController();
	if($data = $getData->yieldBelow95Graph()){
		$yieldBelow95DateUpdate= array();
		foreach($data as $row){
			$yieldBelow95DateUpdate[] = date("d D / h:i A",strtotime($row['DATE_TIME']));
		}
	}
	
	#get count
	//yield 99
	$getData = new GraphYieldController();
	if($data = $getData->yield99Graph()){
		$yield99CountUpdate= array();
		foreach($data as $row){
			$yield99CountUpdate[] = $row['COUNT'];
		}
	}
	//yield 98
	$getData = new GraphYieldController();
	if($data = $getData->yield98Graph()){
		$yield98CountUpdate= array();
		foreach($data as $row){
			$yield98CountUpdate[] = $row['COUNT'];
		}
	}
	//yield 95
	$getData = new GraphYieldController();
	if($data = $getData->yield95Graph()){
		$yield95CountUpdate= array();
		foreach($data as $row){
			$yield95CountUpdate[] = $row['COUNT'];
		}
	}
	//yield Below95
	$getData = new GraphYieldController();
	if($data = $getData->yieldBelow95Graph()){
		$yieldBelow95CountUpdate= array();
		foreach($data as $row){
			$yieldBelow95CountUpdate[] = $row['COUNT'];
		}
	}
?>

<script>	
	var randomScalingFactor = function(){ return Math.round(Math.random()*1000)};
	/* yield 99 chart */
	var yield99Chart = {
			<?php ?>
			labels : [
					<?php 
						for ($i=0; $i < count($yield99DateUpdate); $i++) { 
							$x = '"'.$yield99DateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "Yield 99%",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [
							<?php 
								for ($i=0; $i < count($yield99CountUpdate); $i++) { 
									$x = '"'.$yield99CountUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* yield 98 chart */
	var yield98Chart = {
			<?php ?>
			labels : [
					<?php 
						for ($i=0; $i < count($yield98DateUpdate); $i++) { 
							$x = '"'.$yield98DateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "Yield 98%",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [
							<?php 
								for ($i=0; $i < count($yield98CountUpdate); $i++) { 
									$x = '"'.$yield98CountUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* yield 95 chart */
	var yield95Chart = {
			<?php ?>
			labels : [
					<?php 
						for ($i=0; $i < count($yield95DateUpdate); $i++) { 
							$x = '"'.$yield95DateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "Yield 95%",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [
							<?php 
								for ($i=0; $i < count($yield95CountUpdate); $i++) { 
									$x = '"'.$yield95CountUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
	/* yield Below95 chart */
	var yieldBelow95Chart = {
			<?php ?>
			labels : [
					<?php 
						for ($i=0; $i < count($yieldBelow95DateUpdate); $i++) { 
							$x = '"'.$yieldBelow95DateUpdate[$i].'",';
							echo $x;
						} 
					?>
			],
			datasets : [
				{
					label: "Yield below 95%",
					fillColor : "rgba(48, 164, 255, 0.2)",
					strokeColor : "rgba(48, 164, 255, 1)",
					pointColor : "rgba(48, 164, 255, 1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(48, 164, 255, 1)",
					data : [
							<?php 
								for ($i=0; $i < count($yieldBelow95CountUpdate); $i++) { 
									$x = '"'.$yieldBelow95CountUpdate[$i].'",';
									echo $x;
								} 
							?>
					]
				},
				{}
			]
		}
		
	window.onload = function(){
		var chart1 = document.getElementById("yield99-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(yield99Chart, {
		   responsive : true,
		   animation: true,
		   barValueSpacing : 5,
		   barDatasetSpacing : 1,
		   tooltipFillColor: "rgba(0,0,0,0.8)",                
		   multiTooltipTemplate: "<%= datasetLabel %> - <%= value %>"
		});
		
	};
</script>