<div class="row">	
		<ol class="breadcrumb">
			<li>
				<a href="?page=top-rejects">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
				</a>
			</li>
			<li class="active">Details</li>
		</ol>
	<br />
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
								<th>CUSTOMER</th>
								<th>PACKAGE</th>
								<th>DEVICE</th>
								<th>MO</th>
								<th>OPERATION</th>
								<th>FLEX VALUE</th>
								<th>DESCRIPTION</th>
								<th>R_QTY</th>
							</tr>
						</thead>
							<tbody>
								<?php 
									require ('controllers/topRejectController.php'); 
									$reject = new TopRejectController($_REQUEST);
									if($data = $reject->getTopRejectDetails()){
										foreach($data as $row){
											?>
											<tr>
												<td style="text-align:left;"><?php echo $row['CUSTOMER']; ?></td>
												<td style="text-align:left;"><?php echo $row['PKG']; ?></td>
												<td style="text-align:right;"><?php echo$row['DEVICE']; ?></td>
												<td style="text-align:center;"><?php echo $row['MO']; ?></td>
												<td style="text-align:center;"><?php echo $row['OP_DESCRIPTION']; ?></td>
												<td style="text-align:center;"><?php echo $row['FLEX_VALUE']; ?></td>
												<td style="text-align:center;"><?php echo $row['DESCRIPTION']; ?></td>
												<td style="text-align:center;"><?php echo $row['R_QTY']; ?></td>
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