<div class="row">	
		<ol class="breadcrumb">
			<li>
				<a href="?page=yield-99-package">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
				</a>
			</li>
			<li class="active">Device</li>
		</ol>
	<br />
	<div class="col-lg-12">
		<div class="panel panel-default">
				
			<div class="panel-heading">
				<strong><?php echo $title; ?></strong>
				<small>- DEVICE</small>
			</div>
			<span style="margin-left:15px;">
				<b>Details</b> (
				<small> PACKAGE:<span style="color:#428BCA;"> <b><?php echo @$_REQUEST['pkg']; ?></b> </span></small>
				) 
			</span>
					<div class="panel-body">

						<script src="assets/js/jquery-1.11.1.min.js"></script>
						<script>$(document).ready(function() { $('#yield-99-device').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],	"order": [[ 7, "desc" ]]}); } );</script>

						<table id="yield-99-device" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th rowspan="2" style="text-align:center">DEVICE</th>
									<th rowspan="2"># of ACTIVE MO</th>
									<th colspan="4">TOTAL QUANTITY</th>
									<th rowspan="2" style="border-left:solid 1px #DDDDDD">YIELD %</th>
									<th rowspan="2">MO INV VALUE in $</th>
									<th rowspan="2">MTL USAGE COST in $</th>
								</tr>
								<tr>
									<th>START</th>
									<th>RUNNING</th>
									<th>QUEUE</th>
									<th>COMPLETE</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								require ('controllers/yield99Controller.php'); 
								$device = new Yield99Controller($_REQUEST);
								if($data = $device->getYield99Device()){
									foreach($data as $row){

										@$INIT_YIELD 				= ($row['QUANTITY_RUNNING'] + $row['QUANTITY_IN_QUEUE'] + $row['QUANTITY_COMPLETED']);
										@$YIELD 					= ($INIT_YIELD/$row['SCHEDULED_QUANTITY'])*100;

										@$TOTAL_ACTIVE_MO 			+= $row['CTR_MO'];
										@$TOTAL_SCHEDULED_QUANTITY 	+= $row['SCHEDULED_QUANTITY'];
										@$TOTAL_QUANTITY_RUNNING 	+= $row['QUANTITY_RUNNING'];
										@$TOTAL_QUANTITY_IN_QUEUE 	+= $row['QUANTITY_IN_QUEUE'];
										@$TOTAL_QUANTITY_COMPLETED 	+= $row['QUANTITY_COMPLETED'];
										@$TOTAL_YIELD 				= ($TOTAL_QUANTITY_RUNNING / $TOTAL_SCHEDULED_QUANTITY)*100;
										@$TOTAL_INV_VALUE_USD 		+= $row['INV_VALUE_USD'];

										?>
										<tr>
											<td>
												<a href="?page=yield-99-mo&
														pkg=<?php echo $_REQUEST['pkg']; ?>&
														dvc=<?php echo $row['DEVICE'] ?>">
													<?php echo $row['DEVICE']; ?>
												</a>
											</td>
											<td style="text-align:right;"><?php echo $row['CTR_MO']; ?></td>
											<td style="text-align:right;"><?php echo number_format($row['SCHEDULED_QUANTITY'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QUANTITY_RUNNING'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QUANTITY_IN_QUEUE'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QUANTITY_COMPLETED'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($YIELD,2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['INV_VALUE_USD'],2); ?></td>
											<td style="text-align:right;">NULL</td>
										</tr>	
										<?php	
									}
								}
								?>									
							</tbody>
							<tfoot>
								<tr>
									<th style="color:#008000;">TOTAL</th>
									<th style="text-align: right;">
										<span>
											<?php echo @number_format($TOTAL_ACTIVE_MO); ?>
										</span>
									</th>
									<th style="text-align: right;">
										<span>
											<?php echo @number_format($TOTAL_SCHEDULED_QUANTITY,2); ?>
										</span>
									</th>
									<th style="text-align: right;">
										<span>
											<?php echo @number_format($TOTAL_QUANTITY_RUNNING,2); ?>
										</span>
									</th>
									<th style="text-align: right;">
										<span>
											<?php echo @number_format($TOTAL_QUANTITY_IN_QUEUE,2); ?>
										</span>
									</th>
									<th style="text-align: right;">
										<span>
											<?php echo @number_format($TOTAL_QUANTITY_COMPLETED,2); ?>
										</span>
									</th>
									<th style="text-align: right;">
										<span>
											<?php echo /*@number_format($TOTAL_YIELD,2)*/''; ?>
										</span>
									</th>
									<th style="text-align: right;">
										<span>
											<?php echo @number_format($TOTAL_INV_VALUE_USD,2); ?>
										</span>
									</th>
									<th style="text-align: right;">
										<span>
											<?php echo 'NULL'; ?>
										</span>
									</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	