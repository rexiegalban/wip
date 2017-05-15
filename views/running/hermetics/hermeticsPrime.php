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
			<li>
				<a href="?page=running-yield-hermetics-mo&
						pkg=<?php echo $_REQUEST['pkg']; ?>&
						dvc=<?php echo $_REQUEST['dvc']; ?>&
						mo=<?php echo $_REQUEST['mo'] ?>"> 
					MO
				</a>
			</li>
			<li class="active">Prime</li>
		</ol>
	<br />
	<div class="col-lg-12">
		<div class="panel panel-default">
				
			<div class="panel-heading">
				<strong><?php echo $title; ?></strong>
				<small>- PRIME</small>
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
				<small> DEVICE:<span style="color:#428BCA;"> <b><?php echo @$_REQUEST['dvc']; ?></b> </span></small>, &nbsp;
				<small> MO:<span style="color:#428BCA;"> <b><?php echo @$_REQUEST['mo']; ?></b> </span></small>
				) 
			<div class="panel-body">

				<br />
				<center id="loader1"></center>
				<div id="yield-running-plastic" style="display:;">

					<script src="assets/js/jquery-1.11.1.min.js"></script>
					<script>$(document).ready(function() { $('#yield-plastic-dtls').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],	"order": [[ 2, "desc" ]]}); } );</script>
					<table id="yield-plastic-dtls" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>OPERATION</th>
								<th>QUANTITY IN</th>
								<th>QUANTITY OUT</th>
								<th>REJECT QUANTITY</th>
								<th>PRIME YIELD</th>
								<th>FINAL YIELD</th>
								<th>YIELD</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								require ('controllers/runningYieldController.php'); 
								$prime = new RunningYieldController($_REQUEST);
								$cntr = 1;	
								if($data = $prime->getHermeticsPrime()){
									foreach($data as $row){

											@$TOTAL_QTY_IN 			+= $row['QTY_IN'];
											@$TOTAL_REJECT 			+= $row['REJECT'];
											@$TOTAL_PRIME_YIELD 	+= $row['PRIME_YIELD'];
											@$TOTAL_FINAL_YIELD 	+= $row['FINAL_YIELD'];
											@$TOTAL_REWORK_QTY 		+= $row['REWORK_QTY'];
											@$TOTAL_YIELD 			+= $row['YIELD'];
											@$PERCENTAGE_YIELD 		= $TOTAL_YIELD/$cntr++;
										?>
										<tr>
											<td style="text-align:left;">
												<a href="javascript:;" style="text-decoration:none;"
													<?php 
													echo "onclick='operationDetails(
																\"".mysql_real_escape_string($row['QTY_IN'])."\"
														)'"; 
													?>
												>
													<?php echo $row['OPERATIONS']; ?>
												</a>
											</td>
											<td style="text-align:right;"><?php echo number_format($row['QTY_IN'],2); ?></td>
											<td style="text-align:right;"><?php //echo number_format($row[''],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['REJECT'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['PRIME_YIELD'],2); ?></td>
											<td style="text-align:right;"><?php echo number_format($row['FINAL_YIELD'],2); ?></td>
											<td style="text-align:right;"><?php //echo number_format($row[''],2); ?></td>
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
									<?php echo @number_format($TOTAL_QTY_IN,2); ?>
								</span>
							</th>
							<th></th>
							<th style="text-align: right;">
								<span>
									<?php echo @number_format($TOTAL_REJECT,2); ?>
								</span>
							</th>
							<th style="text-align: right;">
								<span>
									<?php echo @number_format($TOTAL_PRIME_YIELD,2); ?>
								</span>
							</th>
							<th style="text-align: right;">
								<span>
									<?php echo @number_format($TOTAL_FINAL_YIELD,2); ?>
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
		
<!-- modal-->
<div class="modal" id="operation-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" style="    top: 40px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h4 class="modal-title" id="myModalLabel">DETALYE</h4>
			</div>
				<div class="modal-body">
					<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>REJECT CODE</th>
								<th>DESCRIPTION</th>
								<th>QUANTITY</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>sample</td>
								<td>sample</td>
								<td>sample</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
					<!-- <button class="btn btn-primary" type="submit">FILTER</button> -->
				</div>
		</div>
	</div>
</div>

<script>

	function operationDetails(QTY_IN){
		$("#operation-modal").modal('show');
	}
	
</script>