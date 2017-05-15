<div class="row">	
		<ol class="breadcrumb">
			<li>
				<a href="?page=missed-pod-eol-package">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
				</a>
			</li>
			<li>
				<a href="?page=missed-pod-eol-device"> 
					Device
				</a>
			</li>
			<li class="active">MO</li>
		</ol>
	<br />
	<div class="col-lg-12">
		<div class="panel panel-default">
				
			<div class="panel-heading">
				<?php echo $title; ?>
				<small>- MO</small>
			</div>
			<span style="margin-left:15px;">
				<b>Details</b> (
				<small> PACKAGE:<span style="color:#428BCA;"> <b><?php echo '0'; ?></b> </span></small>, &nbsp;
				<small> DEVICE:<span style="color:#428BCA;"> <b><?php echo '0'; ?></b> </span></small>
				) 
			</span>
					<div class="panel-body">

						<script src="assets/js/jquery-1.11.1.min.js"></script>
						<script>$(document).ready(function() { $('#missed-pod-eol-mo').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]]}); } );</script>

						<table id="missed-pod-eol-mo" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th rowspan="2" style="text-align:center">MO</th>
									<th rowspan="2">CUSTOMER</th>
									<th colspan="2">TOTAL QUANTITY</th>
									<th rowspan="2" style="border-left:solid 1px #DDDDDD">YIELD %</th>
									<th rowspan="2">CURRENT INV VALUE in $</th>
									<th rowspan="2">MTL USAGE COST in PHP</th>
									<th rowspan="2">CURRENT OPERATION</th>
									<th rowspan="2">REMARKS</th>
								</tr>
								<tr>
									<th>START</th>
									<th>RUNNING</th>
								</tr>
							</thead>
							<tbody>
								<?php /*
								require ('controllers/activeMOController.php'); 
								$device = new ActiveMOController($_REQUEST);
								if($data = $device->getActiveMoMo()){
									foreach($data as $row){

										$YIELD 			= ($row['QUANTITY_RUNNING'] / $row['SCHEDULED_QUANTITY'])*100;

										@$TOTAL_SCHEDULED_QUANTITY 	+= $row['SCHEDULED_QUANTITY'];
										@$TOTAL_QUANTITY_RUNNING 	+= $row['QUANTITY_RUNNING'];
										@$TOTAL_YIELD 				= ($TOTAL_QUANTITY_RUNNING / $TOTAL_SCHEDULED_QUANTITY)*100;
										@$TOTAL_INV_VALUE_USD 		+= $row['INV_VALUE_USD'];
*/
										?>
										<tr>
											<td><?php echo '0'; ?></td>
											<td><?php echo '0'; ?></td>
											<td style="text-align:right;"><?php echo '0'; ?></td>
											<td style="text-align:right;"><?php echo '0'; ?></td>
											<td style="text-align:right;"><?php echo '0'; ?></td>
											<td style="text-align:right;"><?php echo '0'; ?></td>
											<td style="text-align:right;"><?php echo '0'; ?></td>
											<td style="text-align:right;"><?php echo '0'; ?></td>
											<td style="text-align:right;">NULL</td>
										</tr>	
										<?php	
								/*	}
								}*/
								?>									
							</tbody>
							<tfoot>
								<tr>
									<th style="color:#008000;">TOTAL</th>
									<th style="text-align: right;"></th>
									<th style="text-align: right;">
										<span>
											<?php echo '0'; ?>
										</span>
									</th>
									<th style="text-align: right;">
										<span>
											<?php echo '0'; ?>
										</span>
									</th>
									<th style="text-align: right;">
										<span>
											<?php echo '0'; ?>
										</span>
									</th>
									<th style="text-align: right;">
										<span>
											<?php echo '0'; ?>
										</span>
									</th>
									<th style="text-align: right;">
										<span>
											<?php echo '0'; ?>
										</span>
									</th>
									<th style="text-align: right;">
										<span>
											<?php echo '0'; ?>
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