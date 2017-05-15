<br />
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
				
			<div class="panel-heading">
				<strong><?php echo $title; ?></strong>
				<!-- <small>- PACKAGE</small> -->
				<?php ?>
				<a target="" href="#" id="dateRange-btn" class="btn btn-default" style="float:right;">
					<svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>Save XLS
				</a>
			</div>
					<div class="panel-body">

						<script src="assets/js/jquery-1.11.1.min.js"></script>
						<script>$(document).ready(function() { $('#yield-sot-detls').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],	"order": [[ 2, "desc" ]]}); } );</script>

						<ul class="nav nav-pills">
						<li class="active"><a id="table-yield-sot" href="#" data-toggle="tab">SOT</a></li>
						<li><a id="table-yield-plastic" href="#" data-toggle="tab">PLASTIC</a></li>
						<li><a id="table-yield-hermetics" href="#" data-toggle="tab">HERMETICS</a></li>
					</ul>

					<br />
						<center id="loader1"></center>
						<div id="yield-running-sot">
						<table id="yield-sot-detls" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>PKG</th>
									<th>Start QTY</th>
								<th>Running QTY</th>
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

											@$TOTAL_SCHEDULED_QUANTITY 	+= $row['SCHEDULED_QUANTITY'];
											@$TOTAL_QUANTITY_RUNNING 	+= $row['QUANTITY_RUNNING'];
											@$TOTAL_QUANTITY_COMPLETED 	+= $row['QUANTITY_COMPLETED'];
											//@$TOTAL_YIELD 				+= $row['YIELD'];
											?>
											<tr>
												<td style="text-align:left;">
													<a href="#">
														<?php echo $row['PKG']; ?>
													</a>
												</td>
												<td style="text-align:right;"><?php echo number_format($row['SCHEDULED_QUANTITY'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QUANTITY_RUNNING'],2); ?></td>
												<td style="text-align:right;"><?php echo number_format($row['QUANTITY_COMPLETED'],2); ?></td>
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
									<?php echo @number_format($TOTAL_QUANTITY_RUNNING,2); ?>
								</span>
							</th>
							<th style="text-align: right;">
								<span>
									<?php echo @number_format($TOTAL_QUANTITY_COMPLETED,2); ?>
								</span>
							</th>
							<th></th>
						</tfoot>
						</table>
						</div>
					<div id="yield-running-plastic" style="display:none;">
					<script>$(document).ready(function() { $('#yield-plastic-dtls').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],	"order": [[ 2, "desc" ]]}); } );</script>
					<table id="yield-plastic-dtls" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PKG</th>
								<th>Start QTY</th>
								<th>Running QTY</th>
								<th>QTY Out</th>
								<th>Yield %</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$running = new RunningYieldController();
								if($data = $running->getPlasticRunningYieldData()){
									foreach($data as $row){

											@$TOTAL_SCHEDULED_QUANTITY 	+= $row['SCHEDULED_QUANTITY'];
											@$TOTAL_QUANTITY_RUNNING 	+= $row['QUANTITY_RUNNING'];
											@$TOTAL_QUANTITY_COMPLETED 	+= $row['QUANTITY_COMPLETED'];
											//@$TOTAL_YIELD 				+= $row['YIELD'];
										?>
										<tr>
											<td style="text-align:left;">
												<a href="#">
													<?php echo $row['PKG']; ?>
												</a>
											</td>
											<td style="text-align:right;"><?php echo number_format($row['SCHEDULED_QUANTITY'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QUANTITY_RUNNING'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QUANTITY_COMPLETED'],2); ?></td>
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
									<?php echo @number_format($TOTAL_QUANTITY_RUNNING,2); ?>
								</span>
							</th>
							<th style="text-align: right;">
								<span>
									<?php echo @number_format($TOTAL_QUANTITY_COMPLETED,2); ?>
								</span>
							</th>
							<th></th>
						</tfoot>
					</table>
					</div>
					<div id="yield-running-hermetics" style="display:none;">
					<script>$(document).ready(function() { $('#yield-hermetics-dtls').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],	"order": [[ 2, "desc" ]]}); } );</script>
					<table id="yield-hermetics-dtls" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PKG</th>
								<th>Start QTY</th>
								<th>Running QTY</th>
								<th>QTY Out</th>
								<th>Yield %</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$running = new RunningYieldController();
								if($data = $running->getHermeticsRunningYieldData()){
									foreach($data as $row){

											@$TOTAL_SCHEDULED_QUANTITY 	+= $row['SCHEDULED_QUANTITY'];
											@$TOTAL_QUANTITY_RUNNING 	+= $row['QUANTITY_RUNNING'];
											@$TOTAL_QUANTITY_COMPLETED 	+= $row['QUANTITY_COMPLETED'];
											//@$TOTAL_YIELD 				+= $row['YIELD'];
										?>
										<tr>
											<td style="text-align:left;">
												<a href="#">
													<?php echo $row['PKG']; ?>
												</a>
											</td>
											<td style="text-align:right;"><?php echo number_format($row['SCHEDULED_QUANTITY'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QUANTITY_RUNNING'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['QUANTITY_COMPLETED'],2); ?></td>
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
									<?php echo @number_format($TOTAL_QUANTITY_RUNNING,2); ?>
								</span>
							</th>
							<th style="text-align: right;">
								<span>
									<?php echo @number_format($TOTAL_QUANTITY_COMPLETED,2); ?>
								</span>
							</th>
							<th></th>
						</tfoot>
					</table>
					</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->	