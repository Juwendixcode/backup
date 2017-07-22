<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		
	<style>
		input[name="like"]{
		border:0px;
		background-color:transparent;
		font-family:QuickSand;
		font-size:17px;
		cursor:pointer;
		}
		input[name="liked"]{
			border:0px;
			/*
			background:url(img/street.jpg);
			background-repeat:no-repeat;
			background-size:cover;
			*/
			background-color:transparent;
			font-family:QuickSand;
			font-size:17px;
			width:50px;
			margin-right:5px;
		}
		input[name="edit"]{		
		background-color:#B1844D;
		font-family:QuickSand;
		font-size:15px;
		cursor:pointer;
		width:100%;
		height:40px;
		color:white;
		border: 0px;
		transition: 1s;				
		}
		input[name="edit"]:hover{
			background-color: #CF9B5B;
			transition: 1s;
		}
	</style>	
		
		
	</head>
	<body>
		
<div class="luar">		
	<span id="close" class="close">x</span>
		<form method="post" action="<?php $this->editphoto();  ?>">		
			<div class="frame" style="width:330px; margin-top:20px;margin-left:500px; border:0px;">
				<div class="top-frame">
					<div class="foto-profil" >
						<img src='img/<?php echo $profildata['photo'];?>' width='100%' height='100%'style='border-radius: 100%; border:1px white solid' >
					</div>
						<h4><?php echo ucfirst($profildata['username']);?></h4>
						<p><?php echo $fotodata['waktu'];?></p>
				</div>
				
				<div class="upload-foto" style="width: auto; height: auto;">
					<img class='foto-upload' src='gambar/<?php echo $fotodata['url']; ?>' width='100%' height='300' > 
				</div>		
				
				<hr>
				
				<div class="caption">
					<span style="margin-left:10px;">Caption</span>
					<textarea cols="40" rows="5" name="caption" style="white-space: normal; margin-left: 10px; margin-top: 10px;">
						<?php echo $fotodata['caption'];?>
					</textarea>						
					
					<input type="hidden" name="id" value="<?php echo $fotodata['id_foto'];?>" />	
					<ul  style="margin-left: 150px;">			
						<li class="comm">
						<input type="submit" name="comment" value="" /> 
						<?php echo $jumlahKomentar['jumlah'];?> |</li>			
						<?php 
						$user=$_SESSION['username'];
						$cek=$this->model->ceklike($fotodata['id_foto'],$user);
						$ceklike =$this->model->fetch($cek);
						
						if($fotodata['id_foto']!=$ceklike['id_foto']&&$user!=$ceklike['username']){   
						?>
						<input type="submit" name="like" value="" />   <?php echo $jumlahLike['jumlah'];?>
						<?php } else { ?>
						<input type="submit" name="liked" value="" />	 <?php echo $jumlahLike['jumlah'];?>		
						<?php }?>
									
						
					</ul>
				</div>
					<input type="submit" name="edit" value="EDIT" />
			</div>
			</form>
</div>
	</body>
</html>

<script src="js/jquery-2.2.3.min.js"></script>
<script>
		
	$(".close").click(function(){
	history.back();	
	});
					
</script>