<?php $controller = new controller(); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<style>
	.report-userr{
		border-radius:100%;
	}
	.statuspesan{
		position:absolute;
		top:0px;
		right:10px;
		font-size:15px;
		color:#C9B499;
	}
	#ceks{
		margin:0px;
		padding:0px;
	}
	input[value="Delete All"]{
		background-color:transparent;
		border :0px;
		
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
<?php

	if(isset($dataprofil['photo'])){
?>


<div class="box-besar">

<div id="report-box">
	<div class="boxx">
		<div class="pp-user" style="float:left; margin-left:30px; margin-top:30px;">
			<img class="report-userr" src="img/<?php echo $dataprofil['photo']; ?>" width="60px" height="60px" />
		</div>
		<div class="user-pesan">
			<h2><?php echo $datapesan['pengirim']; ?></h2>
</div>
</div>
	<hr />
	<div class="pesannya">
		<h4>Subject : <?php echo $datapesan['subject']; ?></h4>
		<?php echo $datapesan['pesan']; ?>
	</div>
</div>
<?php }else{?>

<div class="box-besar">

<div id="report-box">
	<div class="boxx">
		<div class="pp-user" style="float:left; margin-left:30px; margin-top:30px;">
			<img src="" width="60px" height="60px" />
		</div>
		<div class="user-pesan">
			<h2>Pesan</h2>
</div>
</div>
	<hr />
	<div class="pesannya">
		<h4>Subject :Subject</h4>
		
	</div>
</div>	
	
<?php } ?>


<div class="form-balas">
	<h2>Reply</h2>
	<form class="" method="post" action="<?php $controller->balaspesan(); ?>">
		<input type="hidden" name="penerima" value="<?php echo $datapesan['username']; ?>"  />
		<input type="hidden" name="idfoto"   value="<?php echo $datapesan['id_foto']; ?>"  />
		Subject : <input type="text" name="subject"/><br /><br />
		
		<textarea rows="10" cols="80" name="balasan"></textarea>
		<br />
		<input type="submit" value="Reply" name="reply" />
	</form>
</div>
</div>


<form method="post" action="<?php $controller->deletepesanadmin()?>" id="ceks" >
<div id="judul"> Report <?php echo $jumlahpesan['jumlah'];?> <input type="submit" name="deleteall" value="Delete All"></div>
</form>


	<div class="report">
	<?php 
	
	foreach ($pesan as $report) 			
	{
		$profilqeury=$this->model->profil_user($report['pengirim']);
		$profildata = $this->model->fetch($profilqeury);		
	?>
	<a class="link" href="index.php?report=<?php echo $report['id_pesan']; ?>">
	<div class="box-report">
		<div class="pp-user">
			<img  class="foto-ppnya" src ="img/<?php echo $profildata['photo']; ?>" width="60px" height="60px" />
		</div>
		<div class="pesan">
			<span><?php echo $report['pengirim']; ?></span>
			<span><?php echo $report['waktu']; ?></span>
			<span>Subject : <?php echo $report['subject']; ?></span>
		</div>
		<div class="statuspesan">			
			<?php echo $report['statuspesan']; ?>		 
		</div>
	</div>
	</a>	
	<?php } ?>
</div>
	</div>
	</a>
			
</div>
</body>
</html>