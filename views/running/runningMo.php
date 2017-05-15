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
						
					<ul class="nav nav-pills">
						<li class="active">
							<a id="table-sot" href="#" data-toggle="tab">SOT</a>
						</li>
						<li>
							<a id="table-plastic" href="#" data-toggle="tab">PLASTIC</a>
						</li>
						<li>
							<a id="table-hermetics" href="#" data-toggle="tab">HERMETICS</a>
						</li>
					</ul>

					<br />
						<center id="loader"></center>
					<div id="running-sot">

						<script src="assets/js/jquery-1.11.1.min.js"></script>
						<script>$(document).ready(function() { $('#running-mo1-dtls').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],	"order": [[ 2, "desc" ]]}); } );</script>

						<table id="running-mo1-dtls" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>PKG</th>
									<th>Device</th>
									<th>MO#</th>
									<th>Running QTY</th>
									<th>Operation</th>
									<th>SOD</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									require ('controllers/runningMOController.php'); 
									$running = new RunningMoController();
									if($data = $running->getSotRunningData()){
										foreach($data as $row){
											?>
											<tr>
												<td style="text-align:left;">
													<a href="#">
														<?php echo $row['PKG']; ?>
													</a>
												</td>
												<td style="text-align:left;"><?php echo $row['DEVICE']; ?></td>
												<td style="text-align:right;"><?php echo $row['MO']; ?></td>
												<td style="text-align:right;"><?php echo number_format($row['QUANTITY_RUNNING'],2); ?></td>
												<td style="text-align:right;"><?php echo $row['DESCRIPTION']; ?></td>
												<td style="text-align:right;"><?php echo date("Y-m-d",strtotime($row['SOD'])); ?></td>
											</tr>
											<?php
										}
									}
								?>
							</tbody>
						</table>
					</div>

					<div id="running-plastic" style="display:none;">
					<script>$(document).ready(function() { $('#running-mo2-dtls').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],	"order": [[ 2, "desc" ]]}); } );</script>
						<table id="running-mo2-dtls" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>PKG</th>
									<th>Device</th>
									<th>MO#</th>
									<th>Running QTY</th>
									<th>Operation</th>
									<th>SOD</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$running = new RunningMoController();
									if($data = $running->getPlasticRunningData()){
										foreach($data as $row){
											?>
											<tr>
												<td style="text-align:left;">
													<a href="#">
														<?php echo $row['PKG']; ?>
													</a>
												</td>
												<td style="text-align:left;"><?php echo $row['DEVICE']; ?></td>
												<td style="text-align:right;"><?php echo $row['MO']; ?></td>
												<td style="text-align:right;"><?php echo number_format($row['QUANTITY_RUNNING'],2); ?></td>
												<td style="text-align:right;"><?php echo $row['DESCRIPTION']; ?></td>
												<td style="text-align:right;"><?php echo date("Y-m-d",strtotime($row['SOD'])); ?></td>
											</tr>
											<?php
										}
									}
								?>
							</tbody>
						</table>
					</div>
					<div id="running-hermetics" style="display:none;">
					<script>$(document).ready(function() { $('#running-mo3-dtls').DataTable({"lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],	"order": [[ 2, "desc" ]]}); } );</script>
						<table id="running-mo3-dtls" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>PKG</th>
									<th>Device</th>
									<th>MO#</th>
									<th>Running QTY</th>
									<th>Operation</th>
									<th>SOD</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$running = new RunningMoController();
									if($data = $running->getHermeticsRunningData()){
										foreach($data as $row){
											?>
											<tr>
												<td style="text-align:left;">
													<a href="#">
														<?php echo $row['PKG']; ?>
													</a>
												</td>
												<td style="text-align:left;"><?php echo $row['DEVICE']; ?></td>
												<td style="text-align:right;"><?php echo $row['MO']; ?></td>
												<td style="text-align:right;"><?php echo number_format($row['QUANTITY_RUNNING'],2); ?></td>
												<td style="text-align:right;"><?php echo $row['DESCRIPTION']; ?></td>
												<td style="text-align:right;"><?php echo date("Y-m-d",strtotime($row['SOD'])); ?></td>
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
			</div>
		</div><!--/.row-->	