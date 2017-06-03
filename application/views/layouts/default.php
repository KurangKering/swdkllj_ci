
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
	<link href="<?php echo base_url('assets/') ?>datatables/css/jquery.dataTables.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/') ?>datatables/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/') ?>datatables/extensions/FixedHeader/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/') ?>datatables/extensions/FixedColumns/css/fixedColumns.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/') ?>datatables/extensions/FixedColumns/css/fixedColumns.dataTables.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/'); ?>css/myStyle.css" rel="stylesheet">




	<script src="<?php echo base_url('template/inspinia/'); ?>js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo base_url('template/inspinia/'); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('template/inspinia/'); ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="<?php echo base_url('template/inspinia/'); ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url('template/inspinia/'); ?>js/plugins/pace/pace.min.js"></script>
	<script src="<?php echo base_url('assets/jquerypriceformat/'); ?>jquery.priceformat.min.js"></script>
	<script src="<?php echo base_url('assets/') ?>datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url('assets/') ?>datatables/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/') ?>datatables/extensions/FixedHeader/js/dataTables.fixedHeader.min.js"></script>
	<script src="<?php echo base_url('assets/') ?>datatables/extensions/FixedColumns/js/dataTables.fixedColumns.min.js"></script>
	<script src="<?php echo base_url('assets/jquery-calx/js/'); ?>numeral.min.js"></script>
	<script src="<?php echo base_url('assets/jquery-calx/'); ?>jquery-calx-2.2.7.min.js"></script>


	<?php echo $template['metadata']; ?>
</head>
<body class="top-navigation boxed-layout  ">
	<div id="wrapper">
		<div style="min-height: 768px" id="page-wrapper" class="gray-bg">
			<div class="row border-bottom white-bg">
				<nav class="navbar navbar-static-top fixed-header" role="navigation">
					<div class="navbar-header">
						<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<i class="fa fa-reorder"></i>
						</button>
						<a href="#" class="navbar-brand">SWDKLLJ</a>
					</div>
					<div class="navbar-collapse collapse" id="navbar">
						<ul class="nav navbar-nav">
							<li>
								<a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
							</li>
							<li>
								<a href="<?php echo base_url('data_sw'); ?>"><i class="fa fa-dashboard"></i> <span class="nav-label">Data SW</span></a>
							</li>
							<li>
								<a href="<?php echo base_url('perhitungan'); ?>"><i class="fa fa-dashboard"></i> <span class="nav-label">Perhitungan</span></a>
							</li>
							<!-- <li class="dropdown">
								<a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Data SW <span class="caret"></span></a>
								<ul role="menu" class="dropdown-menu">
									<li><a href="<?php echo base_url('data_sw/lihat_lama') ?>">Lihat Data (Old Method)</a></li>
									<li><a href="<?php echo base_url('data_sw/lihat_baru') ?>">Lihat Data (New Method)</a></li>
								</ul>
							</li> -->
						</ul>
						<ul class="nav navbar-top-links navbar-right">
							<li>
								<a href="<?php echo base_url('auth'); ?>">
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
	<script src="<?php echo base_url('template/inspinia/'); ?>js/inspinia.js"></script>
	
</body>
</html>
