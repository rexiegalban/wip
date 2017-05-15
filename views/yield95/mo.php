<div class="row">	
		<ol class="breadcrumb">
			<li>
				<a href="?page=yield-95-package">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
				</a>
			</li>
			<li>
				<a href="?page=yield-95-device&
						pkg=<?php echo $_REQUEST['pkg']; ?>&
						dvc=<?php echo $_REQUEST['dvc'] ?>"> 
					Device
				</a>
			</li>
			<li class="active">MO</li>
		</ol>
	<br />
	<div class="col-lg-12">
		<div class="panel panel-default">
				
			<div class="panel-heading">
				<strong><?php echo $title; ?></strong>
				<small>- MO</small>
			</div>
			<span style="margin-left:15px;">
				<b>Details</b> (
				<small> PACKAGE:<span style="color:#428BCA;"> <b><?php echo @$_REQUEST['pkg']; ?></b> </span></small>, &nbsp;
				<small> DEVICE:<span style="color:#428BCA;"> <b><?php echo @$_REQUEST['dvc']; ?></b> </span></small>
				) 
			</span>
					<div class="panel-body">

						<script src="assets/js/jquery-1.11.1.min.js"></script>
						<script>$(document).ready(function() { $('#yield-95-mo').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],	"order": [[ 10, "desc" ]]}); } );</script>

						<table id="yield-95-mo" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th rowspan="2" style="text-align:center">MO</th>
									<th rowspan="2">CUSTOMER</th>
									<th colspan="3">DATE</th>
									<th colspan="3">TOTAL QUANTITY</th>
									<th rowspan="2" style="border-left:solid 1px #DDDDDD">YIELD %</th>
									<th rowspan="2">CURRENT OPERATION</th>
									<th rowspan="2">MO INV VALUE in $</th>
									<th rowspan="2">MTL USAGE COST in $</th>
								</tr>
								<tr>
									<th>START</th>
									<th>SOD</th>
									<th>RSOD</th>
									<th>START</th>
									<th>RUNNING</th>
									<th>QUEUE</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								require ('controllers/yield95Controller.php'); 
								$mo = new Yield95Controller($_REQUEST);
								if($data = $mo->getYield95Mo()){
									foreach($data as $row){

										$YIELD 			= ($row['QUANTITY_RUNNING'] / $row['SCHEDULED_QUANTITY'])*100;

										@$TOTAL_SCHEDULED_QUANTITY 	+= $row['SCHEDULED_QUANTITY'];
										@$TOTAL_QUANTITY_RUNNING 	+= $row['QUANTITY_RUNNING'];
										@$TOTAL_QUANTITY_IN_QUEUE 	+= $row['QUANTITY_IN_QUEUE'];
										@$TOTAL_YIELD 				= ($TOTAL_QUANTITY_RUNNING / $TOTAL_SCHEDULED_QUANTITY)*100;
										@$TOTAL_INV_VALUE_USD 		+= $row['INV_VALUE_USD'];

										if ($row['START_DATE'] != '') { $START_DATE = date("Y-m-d",strtotime($row['START_DATE'])); }
										else{$START_DATE = '';}

										if ($row['SOD'] != '') { $SOD = date("Y-m-d",strtotime($row['SOD'])); }
										else{$SOD = '';}

										if ($row['RSOD'] != '') { $RSOD = date("Y-m-d",strtotime($row['RSOD'])); }
										else{$RSOD = '';}
										?>
										<tr>
											<td><?php echo $row['MO']; ?></td>
											<td><?php echo $row['CUSTOMER']; ?></td>
											<td style="text-align:right;"><?php echo $START_DATE; ?></td>
											<td style="text-align:right;"><?php echo $SOD; ?></td>
											<td style="text-align:right;"><?php echo $RSOD; ?></td>
											<td style="text-align:right;"><?php echo number_format($row['SCHEDULED_QUANTITY'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QUANTITY_RUNNING'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QUANTITY_IN_QUEUE'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($YIELD,2); ?></td>
											<td style="text-align:right;"><?php echo 'NULL'; ?></td>
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
									<th style="text-align: right;"></th>
									<th style="text-align: right;"></th>
									<th style="text-align: right;"></th>
									<th style="text-align: right;"></th>
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
											<?php echo @number_format($TOTAL_YIELD,2); ?>
										</span>
									</th>
									<th style="text-align: right;"></th>
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
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	