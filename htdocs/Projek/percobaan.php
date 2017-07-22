<html>
<head>
	<style>
	.frame{
		background-color: #FFFFFF;
		position: relative;
		min-height: 300px; 
		height:auto !important; 
		height: 300px; 
		width: 300px;
		display: inline-block;
		border-radius: 4px;
		margin-right:25px;
		margin-top:auto;
		border:1.5px #EDEEEE solid;
	}
	.top-frame{
		height:50px;
		width:100%;
		background-color: #008CC9;
		overflow:hidden;
		color: #FFFFFF;
		}
	.top-frame p{
		margin-top:18px;
		font-size: 14px;
	}
	.foto-profil{
		height:40px;
		width:40px;
		border-radius:100%;
		margin-top:3px;
		margin-left:10px;
		float:left;
		}
	.nama-user{
		height:100%;
		width:200px;
		
		float: left;
		box-sizing: border-box;
		padding-top:7px;
		padding-left:10px;
	}
	.status-teman{
		width:100px;
		height:100%;
		float:right;
		background-color:#FFFFFF;
	}
	
	
	</style>
	
	
</head>
<body>
<div class="frame" style="width:430px; margin-top:20px;margin-left:100px; ">
	<div class="top-frame">
		<div class="foto-profil" >
		<img src='gambar/burger.jpg' width='100%' height='100%' style='border-radius: 100%;' >
		</div>
		<div class="nama-user">
		<span>User</span><br />
		<span>29-08-1995</span>
		</div>
	</div>

	<div class="upload-foto" style="width: auto; height: auto;">

	<img class='foto-upload' src='gambar/op_censure__by_vtophya.jpg' width='100%' height='auto' > 

	</div>

	<div class="menu-foto" style="margin-left:130px;">
		<img  src="img/tombol.png" width="40px">
		<div class="submenu">
				<li><a href="">Report</a></li>
				<hr>
				<li><a href="hapus.php?&edit=<?php echo $data['id_foto'];?>">Hapus</a></li>
				<hr>
				<li><a href="">Edit</a></li>
		</div>
	</div>
	
	<hr>
	<div class="caption">
		caption
		<ul  style="margin-left: 230px;">
			
			<?php 
			$tem2 = $data['id_foto'];
			$tess = mysqli_query($con,"select count(*) from comments where id_foto= '$tem2'");
			$tesss = mysqli_fetch_array($tess);
			?>		
			<li class="comm">Comment <?php echo $tesss['count(*)'];?>  |</li>
			
	
			<?php 
			
			$sqlcek = "select id_foto,username from likes where id_foto = '$tem2' and username = '$username'"; 
			$like = mysqli_query($con,$sqlcek);
			$datas = mysqli_fetch_array($like);
			if($datas['username'] != $username && $datas['id_foto']!=$tem2 ){	
			?>
			<a href="like.php?edit=<?php echo $data['id_foto'];?>&edits=<?php echo $username;?>" 
				style="text-decoration: none"><li class="comm">Like</li></a>
			<?php }else{?>
			<li>Liked</li>
			<?php }?>	
		</ul>
	</div>
	<div class="komenn" style="background-color:;">
		<hr />
		<div class="new-komentar" style="display: table; margin-bottom: 10px;">
			<form action="komentar.php?edit=<?php echo $pp['photo']?>&edits=<?php echo $data['id_foto'];?>" method="POST" style="display: inline; margin-left: 10px;">
			<?php
			echo "<img src='gambar/".$pp['photo']."' width='35px' height='35px' style='display: inline; ' />";
			?>
			<textarea cols="40" rows="2" style="margin-left: 5px;" name="text"></textarea>
			<input type="submit" name="submit" value="submit" style="position:relative; bottom: 15px;"/>
			</form>
		</div>
		<div class="list-komentar" style="box-sizing: border-box; word-wrap: break-word;">
			<?php 
			 include "koneksi.php";
			 $sqlnya = "select * from comments where id_foto='$tem2'order by id desc";	
			 $coba = mysqli_query($con, $sqlnya);
			 while($data3 = mysqli_fetch_array($coba)){
			 	
			 	echo "<div class='no' style=' margin-top:5px; margin-left:20px;	 height: 35px; width:35px; display:inline-block; vertical-align: top;'>
				<img  src='gambar/".$data3['url']."' width='35px' height='35px'/>
				</div>";
				
			?>
				<div class='komens'style="width:350px;background-color: #fff;margin-top:5px;display:inline-block;vertical-align: top; margin-left:5px; margin-bottom:5px">
					<span style="color:blue;"><?php echo $data3['username']?></span> <?php echo $data3['text']?><br>
					<span><?php echo $data3['dt']?></span>
				</div>
			<?php }?>
		</div>
		
	</div>
</div>
</body>
</html>