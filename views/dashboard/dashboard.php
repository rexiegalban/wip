<br />
<div class="dashboard">
	
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>MO STATUS</strong>  
					<!--edit ni EWEL as of May 13, 2016 at 7AM -->
					<span style="color:#428BCA" >
						<?php 
							require ('controllers/dashboard_time_update.php'); 
							$data = new Dashboard_time_update();
							$result = $data->getWIPupdate();
							if (is_null($result['UPDATED_TIME'] )) {
							echo "Database is currently updating...";
							}else {
							echo 'updated as of ' . $result['UPDATED_TIME'];
							}
						?> 
					</span>
					<!-- end of edit -->
					<a href="?page=graph-mo" class="btn btn-info" id="" style="float:right;">
						<svg class="glyph stroked line-graph"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-line-graph"></use></svg>
						View Graph
					</a>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-3">
						<a href="?page=active-mo-package">
							<div class="panel panel-blue panel-widget ">
								<div class="row no-padding">
									<div class="col-sm-9 col-lg-12 widget-mo-status success-panel-up">
										<div class="large">
											<?php
												require ('controllers/activeMOController.php'); 
												$cntr = new ActiveMOController();
											 	echo number_format(count($cntr->getActiveMoCount())); 
											?>
										</div>
										<div class="text-muted"><strong>ACTIVE MO</strong></div>
									</div>
									<div class="col-sm-9 col-lg-12 widget-down success-panel-down">
										<div class="small" style="color:#6784A0;">MO&nbsp;VALUE&nbsp;:&nbsp;
											<strong style="color:#6767EC;">$
												<?php
													$data = new ActiveMOController();
													$result = $data->getActiveMoInvValue();
												 	echo number_format($result['INV_VALUE'],2); 
												?>
											</strong>
										</div>
										<div class="small" style="color:#6784A0;">MTL COST&nbsp;:&nbsp;
											<strong style="color:#6767EC;">$&nbsp;0.00</strong>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="row">

					<div class="col-xs-12 col-md-6 col-lg-3">
						<a href="?page=warehouse-package">
							<div class="panel panel-orange panel-widget">
								<div class="row no-padding">
									<div class="col-sm-9 col-lg-12 widget-mo-status warning-panel-up">
										<div class="large">
											<?php
												require ('controllers/warehouseController.php'); 
												$cntr = new WarehouseController();
											 	echo number_format(count($cntr->getWarehouseCount())); 
											?>
										</div>
										<div class="text-muted"><strong>WARE HOUSE</strong></div>
									</div>
									<div class="col-sm-9 col-lg-12 widget-down warning-panel-down">
										<div class="small" style="color:#6784A0;">MO&nbsp;VALUE&nbsp;:&nbsp;
											<strong style="color:#6767EC;">$
												<?php
													$data = new WarehouseController();
													$result = $data->getWarehouseInvValue();
												 	echo number_format($result['INV_VALUE'],2); 
												?>
											</strong>
										</div>
										<div class="small" style="color:#6784A0;">MTL COST&nbsp;:&nbsp;
											<strong style="color:#6767EC;">$&nbsp;0.00</strong>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col-xs-12 col-md-6 col-lg-3">
						<a href="?page=front-of-line-package">
							<div class="panel panel-orange panel-widget">
								<div class="row no-padding">
									<div class="col-sm-9 col-lg-12 widget-mo-status warning-panel-up">
										<div class="large">
											<?php
												require ('controllers/frontOfLineController.php'); 
												$cntr = new FrontOfLineController();
											 	echo number_format(count($cntr->getFrontOfLineCount())); 
											?>
										</div>
										<div class="text-muted"><strong>FRONT OF LINE</strong></div>
									</div>
									<div class="col-sm-9 col-lg-12 widget-down warning-panel-down">
										<div class="small" style="color:#6784A0;">MO&nbsp;VALUE&nbsp;:&nbsp;
											<strong style="color:#6767EC;">$
												<?php
													$data = new FrontOfLineController();
													$result = $data->getFrontOfLineInvValue();
												 	echo number_format($result['INV_VALUE'],2); 
												?>
											</strong>
										</div>
										<div class="small" style="color:#6784A0;">MTL COST&nbsp;:&nbsp;
											<strong style="color:#6767EC;">$&nbsp;0.00</strong>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col-xs-12 col-md-6 col-lg-3">
						<a href="?page=end-of-line-package">
							<div class="panel panel-teal panel-widget">
								<div class="row no-padding">
									<div class="col-sm-9 col-lg-12 widget-mo-status warning-panel-up">
										<div class="large">
											<?php
												require ('controllers/endOfLineController.php'); 
												$cntr = new EndOfLineController();
											 	echo number_format(count($cntr->getEndOfLineCount())); 
											?>
											</div>
										<div class="text-muted"><strong>END OF LINE</strong></div>
									</div>
									<div class="col-sm-9 col-lg-12 widget-down warning-panel-down">
										<div class="small" style="color:#6784A0;">MO&nbsp;VALUE&nbsp;:&nbsp;
											<strong style="color:#6767EC;">$
												<?php
													$data = new EndOfLineController();
													$result = $data->getEndOfLineInvValue();
												 	echo number_format($result['INV_VALUE'],2); 
												?>
											</strong>
										</div>
										<div class="small" style="color:#6784A0;">MTL COST&nbsp;:&nbsp;
											<strong style="color:#6767EC;">$&nbsp;0.00</strong>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>

						<div class="col-xs-12 col-md-6 col-lg-3">
							<a href="?page=shipping-package">
								<div class="panel panel-blue panel-widget ">
									<div class="row no-padding">
										<div class="col-sm-9 col-lg-12 widget-mo-status  danger-panel-up">
											<div class="large">
												<?php
													require ('controllers/ShippingController.php');
													$cntr = new ShippingController();
												 	echo number_format(count($cntr->getShippingCount())); 
												?>
											</div>
											<div class="text-muted"><strong>SHIPPING</strong></div>
										</div>
										<div class="col-sm-9 col-lg-12 widget-down  danger-panel-down">
											<div class="small" style="color:#6784A0;">MO&nbsp;VALUE&nbsp;:&nbsp;
												<strong style="color:#6767EC;">$
													<?php
														$data = new ShippingController();
														$result = $data->getShippingInvValue();
													 	echo number_format($result['INV_VALUE'],2); 
													?>
												</strong>
											</div>
											<div class="small" style="color:#6784A0;">MTL COST&nbsp;:&nbsp;
												<strong style="color:#6767EC;">$&nbsp;0.00</strong>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-3">
							<a href="?page=on-schedule-package">
								<div class="panel panel-teal panel-widget">
									<div class="row no-padding">
										<div class="col-sm-9 col-lg-12 widget-mo-status success-panel-up">
											<div class="large">
												<?php
													require ('controllers/onScheduleController.php'); 
													$cntr = new OnScheduleController();
												 	echo number_format(count($cntr->getOnScheduleCount())); 
												?>
											</div>
											<div class="text-muted"><strong>ON SCHEDULE</strong></div>
										</div>
										<div class="col-sm-9 col-lg-12 widget-down success-panel-down">
											<div class="small" style="color:#6784A0;">MO&nbsp;VALUE&nbsp;:&nbsp;
												<strong style="color:#6767EC;">$
													<?php
														$data = new OnScheduleController();
														$result = $data->getOnScheduleInvValue();
													 	echo number_format($result['INV_VALUE'],2); 
													?>
												</strong>
											</div>
											<div class="small" style="color:#6784A0;">MTL COST&nbsp;:&nbsp;
												<strong style="color:#6767EC;">$&nbsp;0.00</strong>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

					<div class="col-xs-12 col-md-6 col-lg-3">
						<a href="?page=missed-pod-fol-package">
							<div class="panel panel-teal panel-widget">
								<div class="row no-padding">
									<div class="col-sm-9 col-lg-12 widget-mo-status danger-panel-up">
										<div class="large">0</div>
										<div class="text-muted"><strong>MISSED POD FOL</strong></div>
									</div>
									<div class="col-sm-9 col-lg-12 widget-down danger-panel-down">
										<div class="small" style="color:#6784A0;">MO&nbsp;VALUE&nbsp;:&nbsp;
											<strong style="color:#6767EC;">$&nbsp;0.00</strong>
										</div>
										<div class="small" style="color:#6784A0;">MTL COST&nbsp;:&nbsp;
											<strong style="color:#6767EC;">$&nbsp;0.00</strong>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col-xs-12 col-md-6 col-lg-3">
							<a href="?page=missed-pod-eol-package">
								<div class="panel panel-teal panel-widget">
									<div class="row no-padding">
										<div class="col-sm-9 col-lg-12 widget-mo-status  danger-panel-up">
											<div class="large">0</div>
											<div class="text-muted"><strong>MISSED POD EOL</strong></div>
										</div>
										<div class="col-sm-9 col-lg-12 widget-down  danger-panel-down">
											<div class="small" style="color:#6784A0;">MO&nbsp;VALUE&nbsp;:&nbsp;
												<strong style="color:#6767EC;">$&nbsp;0.00</strong>
											</div>
											<div class="small" style="color:#6784A0;">MTL COST&nbsp;:&nbsp;
												<strong style="color:#6767EC;">$&nbsp;0.00</strong>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-3">
							<a href="?page=missed-sod-package">
								<div class="panel panel-blue panel-widget ">
									<div class="row no-padding">
										<div class="col-sm-9 col-lg-12 widget-mo-status  danger-panel-up">
											<div class="large">
												<?php
												require ('controllers/missedSodController.php');
												$cntr = new MissedSodController();
											 	echo number_format(count($cntr->getMissedSodCount())); 
												?>
											</div>
											<div class="text-muted"><strong>MISSED&nbsp;SOD</strong></div>
										</div>
										<div class="col-sm-9 col-lg-12 widget-down  danger-panel-down">
											<div class="small" style="color:#6784A0;">MO&nbsp;VALUE&nbsp;:&nbsp;
												<strong style="color:#6767EC;">$
													<?php
														$data = new MissedSodController();
														$result = $data->getMissedSodInvValue();
													 	echo number_format($result['INV_VALUE'],2); 
													?>
												</strong>
											</div>
											<div class="small" style="color:#6784A0;">MTL COST&nbsp;:&nbsp;
												<strong style="color:#6767EC;">$&nbsp;0.00</strong>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-3">
							<a href="?page=on-hold-package">
								<div class="panel panel-teal panel-widget">
									<div class="row no-padding">
										<div class="col-sm-9 col-lg-12 widget-mo-status  danger-panel-up">
											<div class="large">
												<?php
												require ('controllers/onHoldController.php');
												$cntr = new OnHoldController();
											 	echo number_format(count($cntr->getOnHoldCount())); 
												?>
											</div>
											<div class="text-muted"><strong>ON&nbsp;HOLD</strong></div>
										</div>
										<div class="col-sm-9 col-lg-12 widget-down  danger-panel-down">
											<div class="small" style="color:#6784A0;">MO&nbsp;VALUE&nbsp;:&nbsp;
												<strong style="color:#6767EC;">$
													<?php
														$data = new OnHoldController();
														$result = $data->getOnHoldInvValue();
													 	echo number_format($result['INV_VALUE'],2); 
													?>
												</strong>
											</div>
											<div class="small" style="color:#6784A0;">MTL COST&nbsp;:&nbsp;
												<strong style="color:#6767EC;">$&nbsp;0.00</strong>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

					</div><!-- .rox -->
				</div><!-- .panel-body -->
			</div>
		</div><!-- .col-md-12 -->
	</div><!-- .rox -->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>YIELD</strong>
				<a href="?page=graph-yield" class="btn btn-info" id="" style="float:right;">
					<svg class="glyph stroked line-graph"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-line-graph"></use></svg>
					View Graph
				</a>
				</div>
				<div class="panel-body">
					<div class="row">

						<div class="col-xs-12 col-md-6 col-lg-3">
							<a href="?page=yield-99-package">
								<div class="panel panel-blue panel-widget ">
									<div class="row no-padding">
										<div class="col-sm-9 col-lg-12 widget-right" style="border-left: solid 15px #3C763D;">
											<div class="large">
													<?php
														require ('controllers/yield99Controller.php'); 
														$cntr = new Yield99Controller();
													 	echo number_format(count($cntr->getYield99Count())); 
													?>
											</div>
											<div class="text-muted"><strong>99%</strong></div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-3">
							<a href="?page=yield-98-package">
								<div class="panel panel-orange panel-widget">
									<div class="row no-padding">
										<div class="col-sm-9 col-lg-12 widget-right" style="border-left: solid 15px #3C763D;">
											<div class="large">
													<?php
														require ('controllers/yield98Controller.php'); 
														$cntr = new Yield98Controller();
													 	echo number_format(count($cntr->getYield98Count())); 
													?>
											</div>
											<div class="text-muted"><strong>98%</strong></div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-3">
							<a href="?page=yield-95-package">
								<div class="panel panel-teal panel-widget">
									<div class="row no-padding">
										<div class="col-sm-9 col-lg-12 widget-right" style="border-left: solid 15px #3C763D;">
											<div class="large">
												<?php
													require ('controllers/yield95Controller.php'); 
													$cntr = new Yield95Controller();
												 	echo number_format(count($cntr->getYield95Count())); 
												?>
											</div>
											<div class="text-muted"><strong>95%</strong></div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-3">
							<a href="?page=yield-below-95-package">
								<div class="panel panel-teal panel-widget">
									<div class="row no-padding">
										<div class="col-sm-9 col-lg-12 widget-right" style="border-left: solid 15px #CA5B5B;">
											<div class="large">
													<?php
														require ('controllers/yieldBelow95Controller.php'); 
														$cntr = new YieldBelow95Controller();
													 	echo number_format(count($cntr->getYieldBelow95Count())); 
													?>
												
											</div>
											<div class="text-muted"><strong>Less than 95%</strong></div>
										</div>
									</div>
								</div>
							</a>
						</div>

					</div><!-- .rox -->
				</div><!--.panel-body -->
			</div>
		</div><!-- .col-md-12 -->
	</div><!-- .rox -->
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>MATERIAL COST</strong>
				</div>
				<div class="panel-body">
					<div class="row">

						<div class="col-xs-12 col-md-6 col-lg-3">
							<div class="panel panel-blue panel-widget ">
								<div class="row no-padding">
									<div class="col-sm-9 col-lg-12 widget-right" style="border-left: solid 15px #3C763D;">
										<div class="large">0</div>
										<div class="text-muted"><strong>30%</strong></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-3">
							<div class="panel panel-orange panel-widget">
								<div class="row no-padding">
									<div class="col-sm-9 col-lg-12 widget-right" style="border-left: solid 15px #FFB53E;">
										<div class="large">0</div>
										<div class="text-muted"><strong>40%</strong></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-3">
							<div class="panel panel-teal panel-widget">
								<div class="row no-padding">
									<div class="col-sm-9 col-lg-12 widget-right" style="border-left: solid 15px #CA5B5B;">
										<div class="large">0</div>
										<div class="text-muted"><strong>50%</strong></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-3">
							<div class="panel panel-teal panel-widget">
								<div class="row no-padding">
									<div class="col-sm-9 col-lg-12 widget-right" style="border-left: solid 15px #CA5B5B;">
										<div class="large">0</div>
										<div class="text-muted"><strong>Higher than 50%</strong></div>
									</div>
								</div>
							</div>
						</div>

					</div><!-- .rox -->
				</div><!-- panel-body -->
			</div>
		</div><!-- .col-md-12 -->
	</div><!-- .rox -->


	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>WIP Current Status :Running MO</strong>
					<a href="?page=running-mo-details" class="btn btn-info" id="" style="float:right;">
						Full Details
					</a>
				</div>
				<div class="panel-body">
					<ul class="nav nav-pills">
						<li class="active">
							<a id="table-sot" href="#" data-toggle="tab">SOT</a>
						</li>
						<li>
							<a id="table-plastic" href="#" data-toggle="tab">PLASTIC</a>
						</li>
						<li>
							<a id="table-hermetics" href="#" data-toggle="tab">HERMETICS</a>
						</li>
					</ul>

					<br />
						<center id="loader"></center>
					<div id="running-sot">
						<table id="running-mo1" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>MO#</th>
									<th>CUSTOMER</th>
									<th>PKG</th>
									<th>Device</th>
									<th>Running QTY</th>
									<th>Current Operation</th>
									<th>SOD</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									require ('controllers/runningMOController.php'); 
									$running = new RunningMoController();
									if($data = $running->getSotRunningData()){
										foreach($data as $row){
											?>
											<tr>
												<td style="text-align:right;"><?php echo $row['MO']; ?></td>
												<td style="text-align:right;"><?php echo $row['CUSTOMER']; ?></td>
												<td style="text-align:left;"><?php echo $row['PKG']; ?></td>
												<td style="text-align:left;"><?php echo $row['DEVICE']; ?></td>
												<td style="text-align:right;"><?php echo number_format($row['QUANTITY_RUNNING'],2); ?></td>
												<td style="text-align:right;">
													<small><?php echo $row['DESCRIPTION']; ?></small>
												</td>
												<td style="text-align:right;"><?php echo date("Y-m-d",strtotime($row['SOD'])); ?></td>
											</tr>
											<?php
										}
									}
								?>
							</tbody>
						</table>
					</div>

					<div id="running-plastic" style="display:none;">
						<table id="running-mo2" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>MO#</th>
									<th>CUSTOMER</th>
									<th>PKG</th>
									<th>Device</th>
									<th>Running QTY</th>
									<th>Current Operation</th>
									<th>SOD</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$running = new RunningMoController();
									if($data = $running->getPlasticRunningData()){
										foreach($data as $row){
											?>
											<tr>
												<td style="text-align:right;"><?php echo $row['MO']; ?></td>
												<td style="text-align:right;"><?php echo $row['CUSTOMER']; ?></td>
												<td style="text-align:left;"><?php echo $row['PKG']; ?></td>
												<td style="text-align:left;"><?php echo $row['DEVICE']; ?></td>
												<td style="text-align:right;"><?php echo number_format($row['QUANTITY_RUNNING'],2); ?></td>
												<td style="text-align:right;">
													<small><?php echo $row['DESCRIPTION']; ?></small>
												</td>
												<td style="text-align:right;"><?php echo date("Y-m-d",strtotime($row['SOD'])); ?></td>
											</tr>
											<?php
										}
									}
								?>
							</tbody>
						</table>
					</div>
					<div id="running-hermetics" style="display:none;">
						<table id="running-mo3" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>MO#</th>
									<th>CUSTOMER</th>
									<th>PKG</th>
									<th>Device</th>
									<th>Running QTY</th>
									<th>Current Operation</th>
									<th>SOD</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$running = new RunningMoController();
									if($data = $running->getHermeticsRunningData()){
										foreach($data as $row){
											?>
											<tr>
												<td style="text-align:right;"><?php echo $row['MO']; ?></td>
												<td style="text-align:right;"><?php echo $row['CUSTOMER']; ?></td>
												<td style="text-align:left;"><?php echo $row['PKG']; ?></td>
												<td style="text-align:left;"><?php echo $row['DEVICE']; ?></td>
												<td style="text-align:right;"><?php echo number_format($row['QUANTITY_RUNNING'],2); ?></td>
												<td style="text-align:right;">
													<small><?php echo $row['DESCRIPTION']; ?></small>
												</td>
												<td style="text-align:right;"><?php echo date("Y-m-d",strtotime($row['SOD'])); ?></td>
											</tr>
											<?php
										}
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>Yield</strong>
					<a href="?page=running-yield-details" class="btn btn-info" id="" style="float:right;">
						Full Details
					</a>
				</div>
				<div class="panel-body">
					<ul class="nav nav-pills">
						<li class="active"><a id="table-yield-sot" href="#" data-toggle="tab">SOT</a></li>
						<li><a id="table-yield-plastic" href="#" data-toggle="tab">PLASTIC</a></li>
						<li><a id="table-yield-hermetics" href="#" data-toggle="tab">HERMETICS</a></li>
					</ul>

					<br />
					<center id="loader1"></center>
					<div id="yield-running-sot">
					<table id="yield-sot" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PKG</th>
								<th>Device</th>
								<th>Start QTY</th>
								<th>QTY Out</th>
								<th>Yield %</th>
							</tr>
						</thead>
							<tbody>
								<?php 
									require ('controllers/runningYieldController.php'); 
									$running = new RunningYieldController();
									if($data = $running->getSotRunningYieldData()){
										foreach($data as $row){
											?>
											<tr>
												<td style="text-align:left;"><?php echo $row['PKG']; ?></td>
												<td style="text-align:left;"><?php echo $row['DEVICE']; ?></td>
												<td style="text-align:right;"><?php echo number_format($row['SCHEDULED_QUANTITY'],2); ?></td>
												<td style="text-align:right;"><?php echo number_format($row['QUANTITY_COMPLETED'],2); ?></td>
												<td style="text-align:right;"><?php echo number_format($row['YIELD'],2); ?></td>
											</tr>
											<?php
										}
									}
								?>
							</tbody>
					</table>
					</div>
					<div id="yield-running-plastic" style="display:none;">
					<table id="yield-plastic" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PKG</th>
								<th>Device</th>
								<th>Start QTY</th>
								<th>QTY Out</th>
								<th>Yield %</th>
							</tr>
						</thead>
							<tbody>
								<?php 
									$running = new RunningYieldController();
									if($data = $running->getPlasticRunningYieldData()){
										foreach($data as $row){
											?>
											<tr>
												<td style="text-align:left;"><?php echo $row['PKG']; ?></td>
												<td style="text-align:left;"><?php echo $row['DEVICE']; ?></td>
												<td style="text-align:right;"><?php echo number_format($row['SCHEDULED_QUANTITY'],2); ?></td>
												<td style="text-align:right;"><?php echo number_format($row['QUANTITY_COMPLETED'],2); ?></td>
												<td style="text-align:right;"><?php echo number_format($row['YIELD'],2); ?></td>
											</tr>
											<?php
										}
									}
								?>
							</tbody>
					</table>
					</div>
					<div id="yield-running-hermetics" style="display:none;">
					<table id="yield-hermetics" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PKG</th>
								<th>Device</th>
								<th>Start QTY</th>
								<th>QTY Out</th>
								<th>Yield %</th>
							</tr>
						</thead>
							<tbody>
								<?php 
									$running = new RunningYieldController();
									if($data = $running->getHermeticsRunningYieldData()){
										foreach($data as $row){
											?>
											<tr>
												<td style="text-align:left;"><?php echo $row['PKG']; ?></td>
												<td style="text-align:left;"><?php echo $row['DEVICE']; ?></td>
												<td style="text-align:right;"><?php echo number_format($row['SCHEDULED_QUANTITY'],2); ?></td>
												<td style="text-align:right;"><?php echo number_format($row['QUANTITY_COMPLETED'],2); ?></td>
												<td style="text-align:right;"><?php echo number_format($row['YIELD'],2); ?></td>
											</tr>
											<?php
										}
									}
								?>
							</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>Top Rejects</strong>
					<a href="?page=top-rejects" class="btn btn-info" id="" style="float:right;">
						Full Details
					</a>
				</div>
				<div class="panel-body">
					<table id="top-reject" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>CODE</th>
								<th>DESCRIPTION</th>
								<th>QUANTITY</th>
							</tr>
						</thead>
							<tbody>
								<?php 
									require ('controllers/topRejectController.php'); 
									$reject = new TopRejectController();
									if($data = $reject->getTopRejectData()){
										foreach($data as $row){
											?>
											<tr>
												<td style="text-align:left;"><?php echo $row['FLEX_VALUE']; ?></td>
												<td style="text-align:left;"><?php echo $row['DESCRIPTION']; ?></td>
												<td style="text-align:right;"><?php echo number_format($row['R_QTY'],2); ?></td>
											</tr>
											<?php
										}
									}
								?>
							</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Out Per Area FOL</strong></div>
				<div class="panel-body">
					<ul class="nav nav-pills">
						<li class="active"><a id="table-area-fol-da" href="#" data-toggle="tab">Die Attached</a></li>
						<li><a id="table-area-fol-wb" href="#" data-toggle="tab">Wire Bond</a></li>
						<li><a id="table-area-fol-m" href="#" data-toggle="tab">Mold</a></li>
					</ul>

					<br />
					<center id="area-fol-loader"></center>
					<div id="out-per-area-da" style="display:">
					<table id="area-fol-da" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PKG</th>
								<th>In</th>
								<th>Out</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								require ('controllers/outPerAreaController.php'); 
								$outPerArea = new OutPerAreaController();
								if($data = $outPerArea->getDieAttachedData()){
									foreach($data as $row){
										?>
										<tr>
											<td style="text-align:left;"><?php echo $row['PKG']; ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_IN'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_OUT'],2); ?></td>
										</tr>
										<?php
									}
								}
							?>
						</tbody>
					</table>
					</div>
					<div id="out-per-area-wb" style="display:none">
					<table id="area-fol-wb" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PKG</th>
								<th>In</th>
								<th>Out</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$outPerArea = new OutPerAreaController();
								if($data = $outPerArea->getWireBOndData()){
									foreach($data as $row){
										?>
										<tr>
											<td style="text-align:left;"><?php echo $row['PKG']; ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_IN'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_OUT'],2); ?></td>
										</tr>
										<?php
									}
								}
							?>
						</tbody>
					</table>
					</div>
					<div id="out-per-area-m" style="display:none">
					<table id="area-fol-m" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PKG</th>
								<th>In</th>
								<th>Out</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$outPerArea = new OutPerAreaController();
								if($data = $outPerArea->getMoldData()){
									foreach($data as $row){
										?>
										<tr>
											<td style="text-align:left;"><?php echo $row['PKG']; ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_IN'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_OUT'],2); ?></td>
										</tr>
										<?php
									}
								}
							?>
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Out Per Area EOL</strong></div>
				<div class="panel-body">
					<ul class="nav nav-pills">
						<li class="active"><a id="table-area-eol-iso" href="#" data-toggle="tab">ISO Test</a></li>
						<li><a id="table-area-eol-4th" href="#" data-toggle="tab">4th OPT</a></li>
						<li><a id="table-area-eol-final" href="#" data-toggle="tab">Final Test</a></li>
						<li><a id="table-area-eol-pack" href="#" data-toggle="tab">Pack</a></li>
					</ul>
					<br />
					<center id="area-eol-loader"></center>
					<div id="out-per-area-iso" style="display:">
					<table id="area-eol-iso" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PKG</th>
								<th>In</th>
								<th>Out</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$outPerArea = new OutPerAreaController();
								if($data = $outPerArea->getIsoData()){
									foreach($data as $row){
										?>
										<tr>
											<td style="text-align:left;"><?php echo $row['PKG']; ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_IN'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_OUT'],2); ?></td>
										</tr>
										<?php
									}
								}
							?>
						</tbody>
					</table>
					</div>
					<div id="out-per-area-4th" style="display:none">
					<table id="area-eol-4th" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PKG</th>
								<th>In</th>
								<th>Out</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$outPerArea = new OutPerAreaController();
								if($data = $outPerArea->get4thData()){
									foreach($data as $row){
										?>
										<tr>
											<td style="text-align:left;"><?php echo $row['PKG']; ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_IN'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_OUT'],2); ?></td>
										</tr>
										<?php
									}
								}
							?>
						</tbody>
					</table>
					</div>
					<div id="out-per-area-final" style="display:none">
					<table id="area-eol-final" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PKG</th>
								<th>In</th>
								<th>Out</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$outPerArea = new OutPerAreaController();
								if($data = $outPerArea->getFinalTestData()){
									foreach($data as $row){
										?>
										<tr>
											<td style="text-align:left;"><?php echo $row['PKG']; ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_IN'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_OUT'],2); ?></td>
										</tr>
										<?php
									}
								}
							?>
						</tbody>
					</table>
					</div>
					<div id="out-per-area-pack" style="display:none">
					<table id="area-eol-pack" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PKG</th>
								<th>In</th>
								<th>Out</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$outPerArea = new OutPerAreaController();
								if($data = $outPerArea->getPackData()){
									foreach($data as $row){
										?>
										<tr>
											<td style="text-align:left;"><?php echo $row['PKG']; ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_IN'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_OUT'],2); ?></td>
										</tr>
										<?php
									}
								}
							?>
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div><!--/.dashboard-->