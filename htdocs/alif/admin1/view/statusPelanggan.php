<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin SYS</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

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
				<a class="navbar-brand" href="#"><span>Admin</span>SYS</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="index.php?logout=1"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="index.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Dashboard</a></li>
			<li><a href="index.php?tabel=1"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tabel</a></li>
			<li style="background-color: #30a5ff; border-color: #30a5ff; padding-top: 10px; padding-bottom: 10px;"><span style="margin-left: 3em; color: white;"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Status Sepatu</span></li>
		</ul>
		
	</div>

	<!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Status Sepatu</h1>
			</div>
		</div><!--/.row-->
									
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Edit status</div>
					<div class="panel-body">
						<form class="form-horizontal" action="index.php?edit_pelanggan=1" method="post">
							<fieldset>
								<div class="form-group">
									<label class="col-md-3 control-label" style="display: none;">ID pelanggan</label>
									<div class="col-md-9">
										<input name="id_pelanggan" type="hidden" value="<?php echo $cek['id_pelanggan']; ?>" class="form-control"/>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Edit nama pelanggan</label>
									<div class="col-md-9">
										<input name="nama_pelanggan" type="text" value="<?php echo $cek['nama_pelanggan']; ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Edit alamat</label>
									<div class="col-md-9">
										<input name="alamat" type="text" value="<?php echo $cek['alamat']; ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Edit Nomor HP</label>
									<div class="col-md-9">
										<input name="no_hp" type="text" value="<?php echo $cek['no_hp']; ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12 widget-right">
									<input name="edit_pelanggan" type="submit" class="btn btn-default btn-md pull-right" value="Edit" />
										<!-- <button type="submit" class="btn btn-default btn-md pull-right">Submit</button> -->
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>				
			</div><!--/.col-->

		</div><!--/.row-->
	</div>	<!--/.main-->
		  

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
