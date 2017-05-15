<?php include('views/page/header.php'); ?>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/wip">Production WIP</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> 
						<?php echo ucfirst($_SESSION['wip_name']);  ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="?page=logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<!-- main-content -->
	<div class="col-sm-12 col-sm-offset-0 col-lg-12 col-lg-offset-0 main">	
		<?php include ('views/'.$page); ?>
		
	</div><!-- /main-content -->

<?php include('views/page/footer.php'); ?>