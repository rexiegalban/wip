<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="Production WIP V.01">
<meta name="author" content="Rexie Galban">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Production WIP - SOT | <?php echo $title; ?></title>

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/datepicker3.css" rel="stylesheet">
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="assets/css/styles.css" rel="stylesheet">

<!-- customize css -->
<link href="assets/css/wip.css" rel="stylesheet">

<!--Icons-->
<script src="assets/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<style>
	body { 
		background: rgba(179,220,237,1);
		background: -moz-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
		background: -webkit-gradient(left top, right top, color-stop(0%, rgba(179,220,237,1)), color-stop(50%, rgba(41,184,229,1)), color-stop(100%, rgba(188,224,238,1)));
		background: -webkit-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
		background: -o-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
		background: -ms-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
		background: linear-gradient(to right, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3dced', endColorstr='#bce0ee', GradientType=1 );
	}
	th{text-align: center;}
</style>
</head>
<div class="row">
<br />
<br />
<br />
<br />
<br />
	<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4" 
			style="box-shadow: 0px 0px 0px 5px rgba(0,0,0,0.15);padding-right: 0px;padding-left: 0px;" >
		<div class="login-panel panel panel-default" style=" margin-bottom: 0px;">
			<div class="panel-heading"><center style="color:#31A0C4;">PRODUCTION WIP LOGIN</center></div>
			<div class="panel-body">
			<form role="form" method="POST" action="">
					<fieldset>
						<div class="alert bg-danger" role="alert" style="display:none;">
							<svg class="glyph stroked cancel">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-cancel"></use>
							</svg> <span id="echoer"></span>
						</div>
						<br />
						<div class="form-group">
							<input class="form-control" placeholder="Username" name="username" type="text" autofocus="" required>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
						</div>
						<div class="checkbox">
							<label>
								<input name="remember" type="checkbox" value="Remember Me">Remember Me
							</label>
						</div>
						<br />
						<button type="submit" class="btn btn-primary" name="login">Login</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div><!-- /.col-->
</div><!-- /.row -->	
<?php include('views/page/footer.php'); ?>