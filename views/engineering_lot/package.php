<br />
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
				
			<div class="panel-heading">
				<strong><?php echo $title; ?></strong>
				<small>- PACKAGE</small>
				<?php ?>
				<!-- <a target="_blank" href="?page=save-xls-engineering-lot-package" id="dateRange-btn" class="btn btn-default" style="float:right;">
					<svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>Save XLS
				</a> -->
			</div>
					<div class="panel-body">

						<script src="assets/js/jquery-1.11.1.min.js"></script>
						<script>$(document).ready(function() { $('#engineering-lot-packages').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],	"order": [[ 7, "desc" ]]}); } );</script>

						<table id="engineering-lot-packages" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th rowspan="2">PACKAGE</th>
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
									<th>COMPLETED</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								require ('controllers/engineeringLotController.php'); 
								$packages = new EngineeringLotController($_REQUEST);
								if($data = $packages->getEngineeringLotPackages()){
									foreach($data as $row){

										@$TOTAL_CTR_MO 				+= $row['CTR_MO'];
										@$TOTAL_SCHEDULED_QUANTITY 	+= $row['SCHEDULED_QUANTITY'];
										@$TOTAL_QUANTITY_RUNNING 	+= $row['QUANTITY_RUNNING'];
										@$TOTAL_QUANTITY_IN_QUEUE 	+= $row['QUANTITY_IN_QUEUE'];
										@$TOTAL_QUANTITY_COMPLETED 	+= $row['QUANTITY_COMPLETED'];
										@$TOTAL_INV_VALUE_USD 		+= $row['INV_VALUE_USD'];

										@$INIT_YIELD 				= ($row['QUANTITY_RUNNING'] + $row['QUANTITY_IN_QUEUE'] + $row['QUANTITY_COMPLETED']);
										@$YIELD 					= ($INIT_YIELD/$row['SCHEDULED_QUANTITY'])*100;

										@$TOTAL_INIT_YIELD 			+= $INIT_YIELD;
										@$TOTAL_YIELD 				+= $YIELD;
										@$TOTAL_PERCENTAGE_YIELD	= ($TOTAL_INIT_YIELD / $TOTAL_SCHEDULED_QUANTITY)*100;
										?>
										<tr>
											<td>
												<a href="?page=engineering-lot-device&
														pkg=<?php echo $row['PKG'] ?>">
													<?php echo $row['PKG']; ?>
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
											<?php echo @number_format($TOTAL_CTR_MO); ?>
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
											<?php echo @number_format($TOTAL_PERCENTAGE_YIELD,2); ?>
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