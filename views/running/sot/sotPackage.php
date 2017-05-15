<br />
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">

			<div class="panel-heading">
				<strong style='color:#428BCA;' ><?php echo $title; ?></strong>
				<small>- PACKAGE</small>
				<?php ?>
				<!-- <a target="" href="#" id="dateRange-btn" class="btn btn-default" style="float:right;">
					<svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>Save XLS
				</a> -->
			</div>
			<ul class="nav nav-pills">
				<li class="active"><a href="?page=running-yield-sot-pkg">SOT</a></li>
				<li><a href="?page=running-yield-plastic-pkg">PLASTIC</a></li>
				<li><a href="?page=running-yield-hermetics-pkg">HERMETICS</a></li>
			</ul>
			<div class="panel-body">

				<script src="assets/js/jquery-1.11.1.min.js"></script>
				<script>$(document).ready(function() { $('#yield-sot-detls').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],	"order": [[ 6, "desc" ]]}); } );</script>


				<br />
				<center id="loader1"></center>
				<div id="yield-running-sot">
					<table id="yield-sot-detls" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PACKAGE</th>
								<th>START QUANTITY</th>
								<th>QUANTITY IN QUEUE</th>
								<th>QUANTITY RUNNING</th>
								<th>QUANTITY OUT</th>
								<th>REJECT</th>
								<th>YIELD %</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							require ('controllers/runningYieldController.php'); 
							$package = new RunningYieldController($_REQUEST);
							$cntr = 1;
							if($data = $package->getSotPackage()){
								foreach($data as $row){

									@$TOTAL_SCHEDULED_QUANTITY 	+= $row['SCHEDULED_QUANTITY'];
									@$TOTAL_QUANTITY_IN_QUEUE 	+= $row['QUANTITY_IN_QUEUE'];
									@$TOTAL_QUANTITY_RUNNING 	+= $row['QUANTITY_RUNNING'];
									@$TOTAL_QUANTITY_COMPLETED 	+= $row['QUANTITY_COMPLETED'];
									@$TOTAL_YIELD 				+= $row['YIELD'];
									@$PERCENTAGE_YIELD 			= $TOTAL_YIELD/$cntr++;
									?>
									<tr>
										<td>
											<a href="?page=running-yield-sot-dvc&
													pkg=<?php echo $row['PKG'] ?>">
												<?php echo $row['PKG']; ?>
											</a>
										</td>
										<td style="text-align:right;"><?php echo number_format($row['SCHEDULED_QUANTITY'],2); ?></td>
										<td style="text-align:right;"><?php echo number_format($row['QUANTITY_IN_QUEUE'],2); ?></td>
										<td style="text-align:right;"><?php echo number_format($row['QUANTITY_RUNNING'],2); ?></td>
										<td style="text-align:right;"><?php echo number_format($row['QUANTITY_COMPLETED'],2); ?></td>
										<td style="text-align:right;"><?php //echo number_format($row[''],2); ?></td>
										<td style="text-align:right;"><?php echo number_format($row['YIELD'],2); ?></td>
									</tr>
									<?php
								}
							}
							?>
						</tbody>
						<tfoot>
							<th></th>
							<th style="text-align: right;">
								<span>
									<?php echo @number_format($TOTAL_SCHEDULED_QUANTITY,2); ?>
								</span>
							</th>
							<th style="text-align: right;">
								<span>
									<?php echo @number_format($TOTAL_QUANTITY_IN_QUEUE,2); ?>
								</span>
							</th>
							<th style="text-align: right;">
								<span>
									<?php echo @number_format($TOTAL_QUANTITY_RUNNING,2); ?>
								</span>
							</th>
							<th style="text-align: right;">
								<span>
									<?php echo @number_format($TOTAL_QUANTITY_COMPLETED,2); ?>
								</span>
							</th>
							<th></th>
							<th style="text-align: right;">
								<span>
									<?php echo @number_format($PERCENTAGE_YIELD,2); ?>
								</span>
							</th>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div><!--/.row-->	