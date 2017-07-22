<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">

<style>
	.edit-form{
		background-color:white;
		width:auto;
		width:350px;
		margin-left:35%;
		box-sizing: border-box;
		margin-top:10px;
		border-radius:5px;
		padding-top:5px;
	}
		
	.edit-form td{
		padding:10px;
		border:0px;
	}
	
	.edit-form input[type="text"],input[type="password"]{
		padding:10px;
		width:200px;
	}
	
	.edit-form input[type="submit"]{
	background-color:#008CC9;
	border: 2px;
	color:white;
	height:30px;
	width:80px;
	float:right;
	}
	body{
		padding-bottom:50px;
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


<div id="judul" style="margin-left:43%;font-size:30px;"> Broadcast </div>
<div class="status" style="margin-left:340px; margin-top:30px;">
	<p>Message</p>
	<form method="post" enctype="multipart/form-data" action="<?php $this->broadcastmessage();?>">
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

</body>
<script type="text/javascript" src="js/jquery-2.2.3.min.js">	
</script>
<script type="text/javascript" src="js/main.js">
</script>
<script>
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
