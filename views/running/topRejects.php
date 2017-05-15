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
						<script>$(document).ready(function() { $('#top-reject-detls').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],	"order": [[ 2, "desc" ]]}); } );</script>

						<table id="top-reject-detls" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>CODE</th>
								<th>DESCRIPTION</th>
								<th>QUANTITY</th>
								<th>OPERATION</th>
							</tr>
						</thead>
							<tbody>
								<?php 
									require ('controllers/topRejectController.php'); 
									$reject = new TopRejectController($_REQUEST);
									if($data = $reject->getTopRejects()){
										foreach($data as $row){
											?>
											<tr>
												<td style="text-align:left;">
													<a href="?page=top-rejects-detials&
														flex=<?php echo $row['FLEX_VALUE']; ?>">
														<?php echo $row['FLEX_VALUE']; ?>
													</a>
												</td>
												<td style="text-align:left;"><?php echo $row['DESCRIPTION']; ?></td>
												<td style="text-align:right;"><?php echo number_format($row['R_QTY'],2); ?></td>
												<td style="text-align:center;"><?php echo $row['OP_DESCRIPTION']; ?></td>
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
		</div><!--/.row-->	