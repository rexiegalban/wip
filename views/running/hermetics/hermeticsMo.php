<div class="row">
		<ol class="breadcrumb">
			<li>
				<a href="?page=running-yield-hermetics-pkg">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
				</a>
			</li>
			<li>
				<a href="?page=running-yield-hermetics-dvc&
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
				<?php ?>
				<!-- <a target="" href="#" id="dateRange-btn" class="btn btn-default" style="float:right;">
					<svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>Save XLS
				</a> -->
			</div>

			<ul class="nav nav-pills">
				<li><a href="?page=running-yield-sot-pkg">SOT</a></li>
				<li><a href="?page=running-yield-plastic-pkg">PLASTIC</a></li>
				<li class="active"><a href="?page=running-yield-hermetics-pkg">HERMETICS</a></li>
			</ul>
			<br />
			<span style="margin-left:15px;">
				<b>Details</b> (
				<small> PACKAGE:<span style="color:#428BCA;"> <b><?php echo @$_REQUEST['pkg']; ?></b> </span></small>, &nbsp;
				<small> DEVICE:<span style="color:#428BCA;"> <b><?php echo @$_REQUEST['dvc']; ?></b> </span></small>
				) 
			</span>
			<div class="panel-body">

				<br />
				<center id="loader1"></center>
				<div id="yield-running-plastic" style="display:;">

					<script src="assets/js/jquery-1.11.1.min.js"></script>
					<script>$(document).ready(function() { $('#yield-plastic-dtls').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],	"order": [[ 5, "desc" ]]}); } );</script>
					<table id="yield-plastic-dtls" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>MO</th>
								<th>CUSTOMER</th>
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
								$mo = new RunningYieldController($_REQUEST);
								$cntr = 1;
								if($data = $mo->getHermeticsMo()){
									foreach($data as $row){

											@$TOTAL_SCHEDULED_QUANTITY 	+= $row['START_QUANTITY'];
											@$TOTAL_QUANTITY_COMPLETED 	+= $row['QTY_OUT'];
											@$TOTAL_REJECT 				+= $row['REJECT'];
											@$TOTAL_YIELD 				+= $row['YIELD'];
											@$PERCENTAGE_YIELD 			= $TOTAL_YIELD/$cntr++;
										?>
										<tr>
											<td style="text-align:left;">
												<a href="?page=running-yield-hermetics-prime&
														pkg=<?php echo $_REQUEST['pkg']; ?>&
														dvc=<?php echo $_REQUEST['dvc']; ?>&
														mo=<?php echo $row['MO'] ?>">
													<?php echo $row['MO']; ?>
												</a>
											</td>
											<td style="text-align:right;"><?php echo $row['CUSTOMER']; ?></td>
											<td style="text-align:right;"><?php echo number_format($row['START_QUANTITY'],2); ?></td>
											<td style="text-align:right;"><?php //echo number_format($row[''],2); ?></td>
											<td style="text-align:right;"><?php //echo number_format($row[''],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_OUT'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['REJECT'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['YIELD'],2); ?></td>
										</tr>
										<?php
									}
								}
							?>
						</tbody>
						<tfoot>
							<th></th>
							<th></th>
							<th style="text-align: right;">
								<span>
									<?php echo @number_format($TOTAL_SCHEDULED_QUANTITY,2); ?>
								</span>
							</th>
							<th></th>
							<th></th>
							<th style="text-align: right;">
								<span>
									<?php echo @number_format($TOTAL_QUANTITY_COMPLETED,2); ?>
								</span>
							</th>
							<th style="text-align: right;">
								<span>
									<?php echo @number_format($TOTAL_REJECT,2); ?>
								</span>
							</th>
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
	</div>
</div><!--/.row-->	