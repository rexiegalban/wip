<br />
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
				
			<div class="panel-heading">
				<?php echo $title; ?>
				<small>- PACKAGE</small>
			</div>
					<div class="panel-body">

						<script src="assets/js/jquery-1.11.1.min.js"></script>
						<script>$(document).ready(function() { $('#missed-pod-eol-packages').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],	"order": [[ 6, "desc" ]]}); } );</script>

						<table id="missed-pod-eol-packages" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th rowspan="2">PACKAGE</th>
									<th rowspan="2"># of ACTIVE MO</th>
									<th colspan="2">TOTAL QUANTITY</th>
									<th rowspan="2" style="border-left:solid 1px #DDDDDD">YIELD %</th>
									<th rowspan="2">CURRENT INV VALUE in $</th>
									<th rowspan="2">MTL USAGE COST in PHP</th>
								</tr>
								<tr>
									<th>START</th>
									<th>RUNNING</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								/*require ('controllers/activeMOController.php'); 
								$packages = new ActiveMOController($_REQUEST);
								if($data = $packages->getActiveMoPackages()){
									foreach($data as $row){

										$YIELD 			= ($row['QUANTITY_RUNNING'] / $row['SCHEDULED_QUANTITY'])*100;

										@$TOTAL_CTR_MO 				+= $row['CTR_MO'];
										@$TOTAL_SCHEDULED_QUANTITY 	+= $row['SCHEDULED_QUANTITY'];
										@$TOTAL_QUANTITY_RUNNING 	+= $row['QUANTITY_RUNNING'];
										@$TOTAL_YIELD 				= ($TOTAL_QUANTITY_RUNNING / $TOTAL_SCHEDULED_QUANTITY)*100;
										@$TOTAL_INV_VALUE_USD 		+= $row['INV_VALUE_USD'];
										*/?>
										<tr>
											<td>
												<a href="?page=missed-pod-eol-device">
													<?php echo "Package Name"; ?>
												</a>
											</td>
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
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	