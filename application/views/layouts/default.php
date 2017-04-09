
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistem SWDKLLJ</title>
	<link href="<?php echo base_url('template/inspinia/'); ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url('template/inspinia/'); ?>font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo base_url('template/inspinia/'); ?>css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url('template/inspinia/'); ?>css/style.css" rel="stylesheet">
	<?php echo $template['metadata']; ?>
</head>
<body class="top-navigation skin-2 md-skin">
	<div id="wrapper">
		<div style="min-height: 768px" id="page-wrapper" class="gray-bg">
			<div class="row border-bottom white-bg">
				<nav class="navbar navbar-static-top " role="navigation">
					<div class="navbar-header">
						<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<i class="fa fa-reorder"></i>
						</button>
						<a href="#" class="navbar-brand">SWDKLLJ</a>
					</div>
					<div class="navbar-collapse collapse" id="navbar">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Data SWDKLLJ <span class="caret"></span></a>
								<ul role="menu" class="dropdown-menu">
									<li><a href="">Menu item</a></li>
									<li><a href="">Input Data</a></li>
									<li><a href="">Menu item</a></li>
									<li><a href="">Menu item</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-top-links navbar-right">
							<li>
								<a href="<?php echo base_url('welcome/login'); ?>">
									<i class="fa fa-sign-out"></i> Log out
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="wrapper wrapper-content animated fadeInDown">
				<div class="container">
					<?php echo $template['body']; ?>
				</div>
			</div>
			<div class="footer">
				<div>
					<strong>Copyright 2017</strong> Ilham Rahmadhani 
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url('template/inspinia/') ?>js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo base_url('template/inspinia/') ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('template/inspinia/') ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="<?php echo base_url('template/inspinia/') ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url('template/inspinia/') ?>js/inspinia.js"></script>
	<script src="<?php echo base_url('template/inspinia/') ?>js/plugins/pace/pace.min.js"></script>

</body>
</html>
