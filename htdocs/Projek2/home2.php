<?php $controller = new controller(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<title></title>
	
	<style type="text/css">
		body{
			margin:0px;
			padding:0px;
		}
		html,body {
		    height:96%;
		    
		}
		
		.container{
			padding-bottom:100px;
		}
	input[name="comment"]{
		border:0px;
		background-color:transparent;
		font-family:QuickSand;
		font-size:17px;
	}
		
		input[name="submit"]{
			background-color:#B1844D;
			font-family:QuickSand-Regular;
			border:0px;
			height:30px;
			color:white;
		}
		
		
		input[name="Hapus"]{
			border:0px;
			/*
			background:url(img/street.jpg);
			background-repeat:no-repeat;
			background-size:cover;
			*/
			background-color:transparent;
			font-family:QuickSand-Regular;
			font-size:16px;
			width:50px;
			margin:0px;
			padding:0px;
			cursor:pointer;			
		}

		
		.f{
			margin:0px;
			padding:0px;
		}
				.editkomen{
			position: absolute;
			top: 0px;
			right: 0px;
			visibility: hidden;
		}
		
		.komens:hover .editkomen{
			visibility: visible;
		}		
								
		.input{
			background-color:transparent;
			border: 0px;
			color:#B1844D;
			cursor: pointer;	
			font-size:13px;
			margin-left:10px;			
		}
		
	input[name="hapuskomen"]{			
		background-color:transparent;
			border: 0px;
			color:#B1844D;
			cursor: pointer;	
			font-size:13px;
		margin-left:10px;
	}
	.editkomen{
		position: absolute;
		top: 0px;
		right: 0px;
		visibility: hidden;
		width:100px;
	}
	
	
	.boxhidden{
		width: 20%;
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
		width:40px;
		float:left;
	}
	.sform{
	
		padding: 0px;
		margin:0px;
	
	}
	
	</style>

</head>
<body>
<nav class="navbar">
<div class="judul">
<img src="img/Iconweb/logo fix sementara.png" width="80" height="80" style="margin-left:50px;"/>
<img src="img/Iconweb/photokopi.png" width="200" height="75" />
</div>
	<center>
		
		<ul style="margin-top:0px;">		 		
		<a href='index.php?logout=1'><li class='login'><img src="img/Iconweb/logout.png" width="40" height="40" /></li></a>		
		</ul>    
	</center>
</nav>

	<div class="hamburger-menu">
			<img src="img/hamburger.png" width="100px" height="150px" />
		</div>
	<div class="sidebar">		
		  <img class='photo-profil' src='img/<?php echo $profil['photo'];?>' width='100px' height='100x' />";		  		
		<div class="userlog"><h4> <?php echo ucfirst($profil['username']); ?></h4></div>
			<a href="index.php?home=1">
			<div class="menu-sidebar" >
				<img src="img/Iconweb/home.png" width="40" height="35" style="	" />
				<span >Home</span>				
			</div>
			</a>
			<a href="index.php">
				<div class="menu-sidebar">
					<img src="img/Iconweb/profil.png" width="40" height="35" style="	" />
					Profil
				</div>
				</a>
			<a href="index.php?friend=1">
				<div class="menu-sidebar">
					<img src="img/Iconweb/friends.png" width="40" height="35" style="	" />
					Friend (<?php echo $teman['jumlah'];?>)
				</div>
			</a>
	</div>
	
	<div class="container" style="">
	<div class="status">
	<p>Status</p>
	<form method="post" enctype="multipart/form-data" action="<?php $controller->posting(); ?>">
	<textarea name="status" cols="80" rows="3" placeholder="Create your status"></textarea>
	<hr>
	<input class="button-ok" type="submit" value="share" name="save"></input>
	<div class="image-upload">
	    <label for="file-input">
	        <img src="img/camera.svg" width="50" height="50"/>
	    </label>	
	  <input id="file-input" type="file" name="gambar" required="required"/>
	</div>
	<img id="preview" alt="your image" width="200px" height="200px" style="display: none; margin-left:200px;" />
	</form>
    
    </div>
		<?php
		foreach ($foto as $key) {
		$profilquery= $this->model->profil_user($key['userfriend']);	
		$profilfoto = $this->model->fetch($profilquery);
  		?>

<div class="frame" style="width:430px; margin-top:20px;">
	<div class="top-frame">
		<div class="foto-profil" >
		<a href="index.php?profilorang=<?php echo $profilfoto['id_user']; ?>">
		<img src='img/<?php echo $profilfoto['photo'];?>' 
		width='100%' height='100%'style='border-radius: 100%; border:1px white solid' >
		</a>
		</div>
		<h4><?php echo ucfirst($profilfoto['username'])?></h4>
		<p><?php echo $key['waktu']?></p>
	</div>
<?php
if(!empty($key['url'])){?>
	<div class="upload-foto" style="width: auto; height: auto;">
<a href="index.php?profilpicture=<?php echo $key['id_foto']; ?>">
<img class='foto-upload' src='gambar/<?php echo $key['url']; ?>' width='100%' height='auto' > 
</a>
	</div>
	<?php }else{
}?>
	<div class="menu-foto" style="margin-left:130px;">
		<img  src="img/tombol.png" width="40px">
		<form method="post">
		<div class="submenu">				
				<input type="hidden" name="hiddenid" value="<?php echo $key['id_foto'];?>" />										
				<input type="hidden" value="<?php echo $key['username'];?>" />
				<?php  if($_SESSION['username']!=$key['username']){  ?>
				<li><span class="report">Report</span>
				<input type="hidden" name="hiddenid" class="hiddenid" value="<?php echo $key['id_foto'];?>" />
				<input type="hidden" name="hiddenname" class="hiddenname" value="<?php echo $key['username'];?>" />	
				</li>
				<?php } else{ ?>							
				<li><input type='submit' class="hapus" value="Hapus" name="Hapus"/></li>
				<hr>
				<li><a href="index.php?editpicture=<?php echo $key['id_foto'] ?>">Edit</a></li>
				<?php }?>
		</div>
		</form>
	</div>
	
	<hr>
	<div class="caption">
		<span><?php echo $key['caption'];?></span>
		<form class="f" action="" method="post">
		<input type="hidden" name="id" value="<?php echo $key['id_foto'];?>" />			
		<ul  style="margin-left: 240px;">
			<?php 
			$jumlahLikeQuery= $this->model->jumlahLike($key['id_foto']);	
			$jumlahLike = $this->model->fetch($jumlahLikeQuery);			
			$jumlahKomentarQuery= $this->model->jumlahKomentar($key['id_foto']);	
			$jumlahKomentar = $this->model->fetch($jumlahKomentarQuery);	
			?>		
			<li class="comm">
				<img src="img/Iconweb/comment.png" width="35" height="35" /> 
				<?php echo $jumlahKomentar['jumlah'];?> |
			</li>
			
			<?php 
			$user=$_SESSION['username'];
			$cek=$this->model->ceklike($key['id_foto'],$user);
			$ceklike =$this->model->fetch($cek);			
			if($key['id_foto']!=$ceklike['id_foto']&&$user!=$ceklike['username']){   
			?>
			<input type="submit" name="like" value="" />   <?php echo $jumlahLike['jumlah'];?>
			<?php } else { ?>
			
			<input type="submit" name="liked" value="" />  <?php echo $jumlahLike['jumlah'];?>		
			
			<?php }?>
						
			</form>	
		</ul>
	</div>
	<div class="komenn" style="background-color:;">
		<hr />
		<div class="new-komentar" style="display: table; margin-bottom: 10px;">
			<form action="" method="POST" style="display: inline; margin-left: 10px;">
			<input class="hidden-id" type="hidden" name="id" value="<?php echo $key['id_foto'];?>" />
			<img src='img/<?php echo $profil['photo'];?>' width='35px' height='35px' style='display: inline; ' />
			
			<textarea cols="40" rows="2" style="margin-left: 5px; " name="text"></textarea>
			<input type="submit" name="submit" value="submit" style="position:relative; bottom: 15px;"/>
			</form>
		</div>
		<div class="list-komentar" style="box-sizing: border-box; word-wrap: break-word;">
			<?php 
			 $komentarquery= $this->model->komen_id($key['id_foto']);	
			 $komentar = $this->model->fetch($komentarquery);
			 	
			 foreach ($komentarquery as $keys) {?>
				 
			 <div class='no' style=' margin-top:5px; margin-left:20px; height: 35px; width:35px; display:inline-block; vertical-align: top;'>
				<img  src='img/<?php echo $keys['url'];?>' width='35px' height='35px'/>
				</div>
				
			<div class='komens'style="width:350px;background-color: #fff;margin-top:5px;display:inline-block;vertical-align: top; margin-left:5px; margin-bottom:5px;position: relative;">
				<span style="color:blue;"><?php echo $keys['username']?></span> 
					<span  style="color:#C1C1C1; font-size:12px;"><?php echo $keys['waktu']?></span><br>
				<?php echo $keys['text']?>
				
			<?php if($keys['username']==$profil['username']){  ?>
			<div class="editkomen">																				
						<form class="padform" method="post" action="<?php $this->hapuskomen();?>">
							<input type="hidden" name="idpesan" value="<?php echo $keys['id'];  ?>" />
							<input type="submit" value="Hapus" name="hapuskomen"/>
						</form>																												
							<input class="editt input" type="submit" value="Edit"/>
							
						</div>
						
						
						<div class="hiddenkomen">
								
								<div class="boxhidden">
							<form class="sform" method="post" action="<?php $this->editkomen();  ?>">								
								<input type="hidden" name="idpesan" value="<?php echo $keys['id'];  ?>" />
								
								<input class="closex" type="submit" value="X"/>								
								<img src="img/<?php echo $keys['url']; ?>" width="70" height="70" style="border-radius: 100%; margin : 5px 0px 0px 10px;"  />
								<textarea cols="20" rows="3" style="margin : 10px 0px 0px 10px; " name="editkomen"><?php echo $keys['text']; ?></textarea>
								<br />
								
								<input class="editx" type="submit" value="EDIT" name="edot"/>
							</form>
								</div>
						</div>
			<?php } ?>
			</div>
			<?php }?>
		</div>
		
	</div>
</div>
<div class="modal">
	<div class="text-box">
		
	</div>	
</div>
<?php }?>

</div>
	</div>
<div class="report-luar">	
<div class="report-box">
<span id="closes" class="close">x</span>	
	<form method="post">
	<table>
	<tr>
			<td>
			<label> Subject</label>
			</td>
			<td>
				<select name="subject">
					<option value="SARA">SARA</option>
					<option value="PORNOGRAFI">PORNOGRAFI</option>
				</select>
			</td>	
	</tr>
	<tr>
			<td>
				<label>Email</label>
			</td>
			<td>
				<label><?php echo $profil['email'];  ?></label>
			</td>
	</tr>
	<tr>	
			<td>
				<label> Username </label>
			</td>
			<td>
				<label><?php echo $profil['username'];  ?></label>
			</td>
	</tr>
	</table>
		
			<input name="hidden-id" class="ckck" type="hidden"   value="" />
			<input name="hidden-name" class="wkwk" type="hidden"   value="" />			
			<label>Pesan</label><br>
			<textarea name="pesan" rows="5" cols="50" style="white-space: normal;">				
			</textarea>
			<input name="report" type="submit" value="Report" />
		</form>
</div>
</div>
<script type="text/javascript" src="js/jquery-2.2.3.min.js">	
</script>
<script type="text/javascript" src="js/main.js">
</script>
<script>
	if( $('.boxhidden').is(':hidden') ) {	
	$(".editt").click(function(){
	              $(this).parentsUntil("editkomen").next('.hiddenkomen').find('.boxhidden').fadeIn("slow");
	 					 				
	});
	}	
	$(".closex").click(function(){
	  $( ".boxhidden" ).fadeOut("slow");	  			  					  			 			
	});
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#file-input").change(function(){
        readURL(this);
        $('#preview').show();
    });
</script>
</body>
</html>
<?php

if(isset($_POST['like'])){		
	$controller-> like($_POST['id']);		
}
if(isset($_POST['submit'])){		
	$controller-> komentar($_POST['id']);		
}
if(isset($_POST['Hapus'])){		
	$controller-> hapusfoto($_POST['hiddenid']);		
}


if(isset($_POST['report'])){		
	$controller-> report($_POST['hidden-id'],$_POST['hidden-name'],$profil['email'],$_POST['subject'],$_POST['pesan']);		
}
if(isset($_POST['liked'])){	
	$controller-> unlike($_POST['id'],$_SESSION['username']);		
	}
?>