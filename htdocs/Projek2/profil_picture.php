<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style type="text/css">
	.this{
		margin:0px;
		padding:0px;
	}
	
	
	
		.editkomen{
			position: absolute;
			top: 0px;
			right: 0px;
			visibility: hidden;
		}
		
		.box-komen:hover .editkomen{
			visibility: visible;
		}		
								
		.input{
			background-color:transparent;
			border: 0px;
			color:#B1844D;
			cursor: pointer;			
		}
		
	input[value="Hapus"]{			
	}
		
	
	
	.boxhidden{
		width: 21%;
		height: 17%;
		position:fixed;
		z-index:199;
		top:300px;
		left:500px;
		background-color: rgba(0,0,0,0.5);					
		display:none;
	}
	
	.editx{
		width:100%;
		height:25px;
		border:0px;
		background-color:#B1844D;
		position: absolute;
		bottom:0px;
		left:0px;
		color: #D7C7AF;		
	}
	
	.closex{
		border:0px;
		background-color:#B1844D;
		position: absolute;
		top:-5px;
		right:-10px;
		color: white;		
		border-radius: 100%;
	}
	.padform{
		padding: 0px;
		margin:0px;
	}
		
	</style>
	
</head>
<body>
		<div class="luar">
			<div class="box">
				<span id="close" class="close">x</span>
				<img class="gambar" src="gambar/<?php echo $picture['url']; ?>" width="70%" height="100%"/>
				<div class="com">
												
				<div class="caption-modal">
					<img src="img/<?php echo $profil['photo']; ?>" width="70" height="70"/>
					<span><?php echo $picture['username']; ?></span><br />
					<span><?php echo $picture['waktu']; ?></span><br /><br /><br /><br />
					<span><?php echo $picture['caption']; ?></span>
				</div>
		<div class="komenlike">
			<form class="this" method="post">
			<span>
			
			<input type="submit" name="comment" value="" /> 
			<?php echo $jumlahKomentar['jumlah'];?> |			
						<?php 
						$user=$_SESSION['username'];
						$cek=$this->model->ceklike($picture['id_foto'],$user);
						$ceklike =$this->model->fetch($cek);
						
						if($picture['id_foto']!=$ceklike['id_foto']&&$user!=$ceklike['username']){   
						?>
						<input type="submit" name="like" value="" />   <?php echo $jumlahLike['jumlah'];?>
						<?php } else { ?>
						<input type="submit" name="liked" value="" />	 <?php echo $jumlahLike['jumlah'];?>		
						<?php }?>
			</form>
			  
			</span>
			</div>
		<div class="table-komen">
	<?php 				
		foreach ($komen as $r) {					
	?>													
				<div class="box-komen" style="position: relative;">
					
					<img src="img/<?php echo $r['url']; ?>" width="50" height="50"/>										
					<div class="komentar">
						<span style="color:#B1844D;"><?php echo $r['username']; ?></span> 
					    <p style="margin-left: 0px;margin-top:0px;"><?php echo $r['text']; ?></p>
					</div>
					
					
					<?php if($r['username']==$_SESSION['username']){  ?>						
						
						<div class="editkomen">																				
						<form class="padform" method="post" action="<?php $this->hapuskomen();  ?>">
							<input type="hidden" name="idpesan" value="<?php echo $r['id'];  ?>" />
							<input class="input" type="submit" value="Hapus" name="hapuskomen"/>
						</form>																												
							<input class="editt input" class="input" type="submit" value="Edit"/>
							
						</div>
						
						
						<div class="hiddenkomen">
								
								<div class="boxhidden">
							<form class="padform" method="post" action="<?php $this->editkomen();  ?>">								
								<input type="hidden" name="idpesan" value="<?php echo $r['id'];  ?>" />
								
								<input class="closex" type="submit" value="X"/>								
								<img src="img/<?php echo $r['url']; ?>" width="60" height="60" style="float:left;"/>
								<textarea cols="20" rows="3" style="margin : 10px 0px 0px 10px;float:left;" name="editkomen"><?php echo $r['text']; ?></textarea>
								<br />
								
								<input class="editx" type="submit" value="EDIT" name="edot"/>
							</form>
								</div>
						</div>
						
					<?php } ?>
					
				</div>
   <?php } ?>																																			
				</div>
					<div class="baru">
						<form method="post" >
							<label>Komen :</label>
							<input class="komen" type="text" name="text" />
							<input type="submit" name="submit" value="ok"></input>
						</form>
					</div>
				</div>
			</div>
		</div>
</body>
<script src="js/jquery-2.2.3.min.js"></script>
<script>
		
	$(".close").click(function(){
	window.location.href='index.php';
	});
	
	if( $('.boxhidden').is(':hidden') ) {	
	$(".editt").click(function(){
	    $(this).parentsUntil("editkomen").next('.hiddenkomen').find('.boxhidden').fadeIn("slow");
	 					 				
	});
	}	
	$(".closex").click(function(){
	  $( ".boxhidden" ).fadeOut("slow");	  			  					  			 			
	});	
	
	
		
</script>
</html>

<?php
	$controller = new controller();
	if(isset($_POST['submit'])){
	
	$controller-> komentar($picture['id_foto']);		
	}
	if(isset($_POST['like'])){	
	$controller-> like($picture['id_foto']);		
	}
	if(isset($_POST['liked'])){	
	$controller-> unlike($picture['id_foto'],$_SESSION['username']);		
	}
?>