<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">

<style>		
	input[type="submit"]{
		margin-top:55px;
		background-color: transparent;		
		background-size:30px 30px;
		background-repeat:no-repeat;
		border:0px;
		width:40px;
		height:40px;
		cursor:pointer;
	}
	input[name="Hapus"]{
		background-image: url(img/icon/png/garbage.png);		
		padding-left:10px;
		padding-right:10px;
		box-sizing:border-box;
		margin-left:60px;
		
	}
</style>
</head>
<body>
<nav class="navbar">
<div class="judul">My Website</div>
	<ul style="margin-left:40%;">
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php?report=0">Report</a></li>		
		<?php 		
			echo "<a href='index.php?logout=1'><li class='login'>Logout</li></a>";		
		?>
	</ul>	
</nav>

<div id="judul" style="margin-left:45%;font-size:30px;"> Edit</div>
<div class="photo-container" style="margin-left:400px;">
					<h3>Photo <?php echo $jumlahfoto['jumlah'];  ?></h3>
					<?php
					foreach ($fotoquery as $r) {
					?>
					<div class="img">	
						<div class="cek">
							<img  class="gambar2" src="gambar/<?php echo $r['url']; ?>" width="100%" height="100%"/>
							<form method="post" action="<?php $this->hapus();?>">
							<div class="modal-menu">
									<input type="hidden" name="hidden_id" value="<?php echo $r['id_foto']; ?>" />									
									<input type="submit" value="" name="Hapus"  />									
							</div>
							</form>
						</div>
					</div>	
					<?php }?>	
				</div>


</body>
<script type="text/javascript" src="js/jquery-2.2.3.min.js">	
</script>
<script src="js/main.js"></script>
<script>
		$(".img").mouseover(function(){
			$(this).find('.modal-menu').fadeIn("slow");
		});
		$(".img").mouseleave(function(){
			$(this).find('.modal-menu').fadeOut("slow");
		});
</script>
</html>