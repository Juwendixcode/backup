<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin SYS</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><!-- <?php //echo $cek['username']; ?> --> adminsys<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<!-- <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li> -->
							<!-- <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li> -->
							<li><a href="index.php?logout=1"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div>
	<!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="index.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Dashboard</a></li>
			<li class="active"><a href="index.php?tabel=1"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tabel</a></li>
			<li style="padding-top: 10px; padding-bottom: 10px;"><span style="margin-left: 3em;"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Status Sepatu</span></li>
		</ul>

	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tabel</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Layanan</div>
					<div class="panel-body">

						<table class="table table-bordered">
							<thead>
								<tr>
									<th><center>ID Layanan</center></th>
									<th><center>Nama Layanan</center></th>
									<th><center>Deskripsi</center></th>
									<th><center>Biaya</center></th>
								</tr>
							</thead>
							<tbody>
								<?php
									if(!empty($query)){
										foreach ($query as $hasilLayanan) {
											echo "
												<tr>
													<th>$hasilLayanan[id_layanan]</th>
													<td>$hasilLayanan[nama_layanan]</td>
													<td>$hasilLayanan[deskripsi_layanan]</td>
													<td>$hasilLayanan[biaya]</td>
												</tr>";
										}
									}
								?>
							</tbody>
						</table>

						<!-- <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" >Item ID</th>
						        <th data-field="id" data-sortable="true">Item ID</th>
						        <th data-field="name"  data-sortable="true">Item Name</th>
						        <th data-field="price" data-sortable="true">Item Price</th>
						    </tr>
						    </thead>
						</table> -->
					</div>
				</div>
			</div>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Pemesanan</div>
					<div class="panel-body">

						<table class="table table-bordered">
							<thead>
								<tr>
									<th><center>ID Pemesanan</center></th>
									<th><center>Nama Pemesan</center></th>
									<th><center>Alamat Pemesan</center></th>
									<th><center>No Handphone</center></th>
									<th><center>Merk Sepatu</center></th>
									<th><center>Ukuran Sepatu</center></th>
									<th><center>Paket Layanan</center></th>
									<th><center>Warna Awal</center></th>
									<th><center>Warna Baru</center></th>
									<th><center>Catatan</center></th>
									<th><center>Status</center></th>
									<th><center>Deskripsi Status</center></th>
									<th><center>Panel</center></th>
								</tr>
							</thead>
							<tbody>
								<?php
									if(!empty($query2)){
										foreach ($query2 as $hasilOrder) {
											echo "
												<tr>
													<th>$hasilOrder[id_order]</th>
													<td>$hasilOrder[merk_sepatu]</td>
													<td>$hasilOrder[ukuran_sepatu]</td>
													<td>$hasilOrder[paket_layanan]</td>
													<td>$hasilOrder[warna_lama]</td>
													<td>$hasilOrder[warna_baru]</td>
													<td>$hasilOrder[catatan]</td>
													<td>$hasilOrder[status]</td>
													<td>$hasilOrder[deskripsi_status]</td>
													<td><a href=\"index.php?status=$hasilOrder[id_order]\">Edit</a>&nbsp&nbsp&nbsp&nbsp&nbsp||&nbsp&nbsp&nbsp&nbsp&nbsp<a href=\"index.php?delete=$hasilOrder[id_order]\">Delete</a></td>
												</tr>";
										}
									}
								?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div><!--/.row-->

<!-- 		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Sepatu</div>
					<div class="panel-body">

						<table class="table table-bordered">
							<thead>
								<tr>
									<th><center>ID Sepatu</center></th>
									<th><center>Merk Sepatu</center></th>
									<th><center>Ukuran Sepatu</center></th>
									<th><center>Paket Layanan</center></th>
									<th><center>Warna Awal</center></th>
									<th><center>Warna Baru</center></th>
									<th><center>Catatan</center></th>
									<th><center>Status</center></th>
									<th><center>Deskripsi Status</center></th>
									<th><center>Panel</center></th>
								</tr>
							</thead>
							<tbody>
								<?php
									// if(!empty($query)){
									// 	foreach ($query as $hasilSepatu) {
									// 		echo "
									// 			<tr>
									// 				<th>$hasilSepatu[id_sepatu]</th>
									// 				<td>$hasilSepatu[merk]</td>
									// 				<td>$hasilSepatu[ukuran]</td>
									// 				<td>$hasilSepatu[paket_layanan]</td>
									// 				<td>$hasilSepatu[warna_awal]</td>
									// 				<td>$hasilSepatu[warna_baru]</td>
									// 				<td>$hasilSepatu[notes]</td>
									// 				<td>$hasilSepatu[status]</td>
									// 				<td>$hasilSepatu[deskripsi]</td>
									// 				<td><a href=\"index.php?status=$hasilSepatu[id_sepatu]\">Edit</a>&nbsp&nbsp&nbsp&nbsp&nbsp||&nbsp&nbsp&nbsp&nbsp&nbsp<a href=\"index.php?delete=$hasilSepatu[id_sepatu]\">Delete</a></td>
									// 			</tr>";
									//	}
									//}
								?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Pelanggan</div>
					<div class="panel-body">

						<table class="table table-bordered">
							<thead>
								<tr>
									<th><center>ID Pelanggan</center></th>
									<th><center>Nama Pelanggan</center></th>
									<th><center>Alamat</center></th>
									<th><center>Nomor Handphone</center></th>
									<th><center>Panel</center></th>
								</tr>
							</thead>
							<tbody>
								<?php
									// if(!empty($query2)){
									// 	foreach ($query2 as $hasilPelanggan) {
									// 		echo "
									// 			<tr>
									// 				<th>$hasilPelanggan[id_pelanggan]</th>
									// 				<td>$hasilPelanggan[nama_pelanggan]</td>
									// 				<td>$hasilPelanggan[alamat]</td>
									// 				<td>$hasilPelanggan[no_hp]</td>
									// 				<td><a href=\"index.php?status_pelanggan=$hasilPelanggan[id_pelanggan]\">Edit</a>&nbsp&nbsp&nbsp&nbsp&nbsp||&nbsp&nbsp&nbsp&nbsp&nbsp<a href=\"index.php?delete_pelanggan=$hasilPelanggan[id_pelanggan]\">Delete</a></td>
									// 			</tr>";
									//	}
									//}
								?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Transaksi</div>
					<div class="panel-body">

						<table class="table table-bordered">
							<thead>
								<tr>
									<th><center>ID Transaksi</center></th>
									<th><center>ID Pelanggan</center></th>
									<th><center>ID Sepatu</center></th>
									<th><center>Nama Pelanggan</center></th>
									<th><center>Paket Layanan</center></th>
									<th><center>Biaya</center></th>
									<th><center>Waktu</center></th>
								</tr>
							</thead>
							<tbody>
								<?php
									// if(!empty($query3)){
									// 	foreach ($query3 as $hasilTransaksi) {
									// 		echo "
									// 			<tr>
									// 				<th>$hasilTransaksi[id_transaksi]</th>
									// 				<td>$hasilTransaksi[id_pelanggan]</td>
									// 				<td>$hasilTransaksi[id_sepatu]</td>
									// 				<td>$hasilTransaksi[nama_pelanggan]</td>
									// 				<td>$hasilTransaksi[paket_layanan]</td>
									// 				<td>$hasilTransaksi[biaya]</td>
									// 				<td>$hasilTransaksi[waktu]</td>
									// 			</tr>";
									//	}
									//}
								?>
							</tbody>

						</table>
					</div>
				</div>
			</div>
		</div> -->

	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
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
