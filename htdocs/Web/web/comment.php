<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Karakter set utf-8 paling direkomendasikan karena bersifat universal -->
	<meta charset="utf-8">

	<!-- Untuk optimalisasi tampilan di browser yg berbeda -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Biography</title>

	<!-- link ke file Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
	function validasi(){
    var x = document.forms["Input"]["nama"].value;
    var y = document.forms["Input"]["comment"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
    if (y == null || y == "") {
        alert("Comment must be filled out");
        return false;
    }
	}
	</script>


	<!-- link ke file CSS custom -->
	<style type="text/css">
	body{	
		overflow: hidden;
	}
	.isi{
  		height: 522px;
  		display: block;
	}
	.isi::after{
		 content: "";
  		 background: url(images/street.jpg);
  		 background-size: 100% 100%;
		  opacity: 0.5;
		  top: 0;
		  left: 0;
		  bottom: 0;
		  right: 0;
		  position: absolute;
		  background-repeat: no-repeat;
		  z-index: -1; 	
	}
	.kiri{
		height: 552px;
	}
	.kanan{
		
		height: 552px;
		
	
	}

	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top" style="margin: 0px; background-color: #1A2633;" >
		
		<div class="container">			
			<div class="navbar-header navbar-left">
				<ul class="nav navbar-nav" style="margin-left: 300px; padding-top: 10px;">
						<li><a href="bio.html"><h4>BIOGRAPHY</h4></a></li>
						<li><a href="aol.html"><h4>ALBUM</h4></a></li>
						<li><a href="home.html"><h4>HOME</h4></a></li>						
						<li><a href="comment.php"><h4>COMMENT</h4></a></li>
						<li><a href="contact.html"><h4>CONTACT</h4></a></li>
					</ul>
			</div>
		</div>
	</nav>
		<div class="isi">
			<div class="row" >
				<div class="col-sm-6 kiri">
					<div class="text-center" style="margin-top: 50px;"><h1 style="font-size: 72px; color: #00000">COMMENT</h1></div>
						
						<form style="color: black solid;" ACTION="comment.php" METHOD="POST" NAME="Input" onsubmit="return validasi()">
							<div class="form-group" style="margin-left: 250px; margin-top: 20px;">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="exampleInputNama"><h4>Name</h4></label>
										<input type="text" class="form-control" name="nama" placeholder="Name" style="width: 350px;">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-inline">							
										<label for="exampleInputComment"><h4>Comment</h4></label>
										<textarea class="form-control" name="comment" placeholder="Your Comment Here" rows="7" style="width: 350px;"></textarea>
										<br>
										<br>
										<button name="submit" type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
							</div>
						</form>
				</div>
				
				<div class="col-sm-6 kanan">
					<div class="col-sm 4" style="margin: 180px 160px 160px 160px;">
					<h3>Comment</h3>
					<fieldset id="hasil" name="hasil" style="width: 350px; ">
						<h4>
						<?php
						if (isset($_POST['submit'])) {
						$nama = $_POST['nama'];
						$comment = $_POST['comment'];
						echo "Name : <b>$nama</b><br>";						
						echo "Comment  :<b>$comment</b>";						
						}
						?>
						</h4>
					</fieldset>	  
					</div>		
				</div>
					

			</div>
		</div>
</body>
</html>