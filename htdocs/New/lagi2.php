<html>
	<head>
		<style>
				*{
					margin:0px;
					
				}
			    
			    .container{
					width:75%;
					height:1000px;
					margin-left: 23%;
					overflow:visible;
					
				}
				
				.container .img{
					
				}
				.photo-container{
					width:485px;	
					height:480px;
					float:left;						
					margin-top:50px;
					box-sizing: border-box;
					padding-top:5px;
					padding-bottom:5px;
					padding-left:13px;
					padding-right:0px;
					
				}
			    .img{
			    	width:150px;
			    	height:150px;
			    	margin:0px;
			    	padding:0px;
			    	float:left;
			    	margin-right:5px;
			    	margin-top:5px;
			    }
			    .cek{
			    	width:100%;
			    	height:100%;
			    	background:white;
			    	position:relative;
			    	
			    }
			    
			    .modal-menu{
			    	width:150px;
			    	height:150px;
			    	background-color:rgba(119,119,119,0.7);
			    	font-size: 30px;
			    	position:absolute;
			    	z-index: 2;		
			    	top:0px;
			    	left:0px;
			    	bottom:0px;
			    	right:0px;
			    	display:none;
			    }
			    .modal-menu img{
			    	
			    	margin-top:55px;
			    	margin-left:6px;
			    	cursor:pointer;
			    }
			    .tengah{
			    	border-right:1px white solid;
			    	border-left:1px white solid;
			    	padding-left:10px;
			    	padding-right:10px;
			    	
			    }
			    .luar{
					width: 100%;
					height: 100%;
					position:absolute;
					z-index:99;
					top:0px;
					background-color: rgba(0,0,0,0.5);
					display: none;
				}
				.box{
					width:900px;
					height:500px;
					background-color:#FFFFFF;
					margin-top:70px;
					margin-left:250px;
				}
				.box img{
					float:left;
				}
				
				.com{
					width:30%;
					height: 100%;
					float:left;
				}
				.caption-modal{
					width:100%;
					height:35%;
					word-wrap: break-word;
					box-sizing: border-box;
					padding-top:10px;
					padding-left:15px;
				}
				.caption-modal img{
					border-radius: 100%;
					
					margin-right:10px;
				}
				.table-komen{
					height: 55%;
					width:100%;
					overflow:auto;
					word-wrap: break-word;
					
				}
				.table-komen > .box-komen,img{
					display:inline-block;
					vertical-align: top;
				}
				.box-komen{
					width:100%;
					min-height: 10%;
					
					overflow: hidden;
					word-wrap:break-word;
				}
				.box-komen img{
					border-radius: 100%;
					margin-left:10px;
					
				}
				.box-komen img,.komentar{
					margin-top:5px;
				}
				.komentar{
					margin-left:70px;
				}
				.komenlike{
					width: 100%;
					height: 5%;
					
					border-bottom:1px #CCCCCC solid;
					text-align: right;
					box-sizing: border-box;
					padding-right:20px;
				}
				.baru{
					width:100%;
					height:5%;	
				}
				input[class="komen"]{
					width:120px;
				}
				input[value="ok"]{
					width:40px;
				}
				.baru  label{
					margin-left:10px;
				}
				.close {
			    position: absolute;
			    top: 10px;
			    right: 30px;
			    font-size: 40px;
			    transition: 0.3s;
				}
				.close:hover,
				.close:focus {
			    color: #bbb;
			    text-decoration: none;
			    cursor: pointer;
				}
				.biodata{
					width:459.3px;
					height:480px;
					float:left;
					margin-top:50px;
					
					
				}
				.biodata table{
					margin-top:50px;
					margin-left:100px;
					font-size: 20px;
					
				}
				.biodata hr{
					margin-top:80px;
				}
				.bio td{
					width:70px;
					height: 25px;
				}
				.friend{
					width:100%;
					height:180px;
					float:left;				
					
						
				}
				.batas{
					width:0px;
					height:480px;
					margin-top:50px;
					float:left;
				}
				.friend-box{
					width:450px;
					height:180px;
					
				}
				.friend-box img{
					margin-top:3px;
				}
				
		</style>
	</head>
	<body>
			<div class="luar">
							<div class="box">
									<span id="close" class="close">x</span>
									<img class="gambar" width="70%" height="100%"/>
									<div class="com">
										<div class="caption-modal">
											<img src="img/game.jpg" width="70" height="70"/>
											<span>User</span><br />
											<span>waktu</span><br /><br /><br /><br />
											<span>caption-modalcaption-modalcaption-modal</span>
										</div>
										<div class="komenlike"><span>Comment | Like  </span></div>
										<div class="table-komen">
											<div class="box-komen">
												<img src="img/game.jpg" width="50" height="50"/>
												
												<div class="komentar">
													hallo <p style="margin-top: 0px;">hi</p>
												</div>
											</div>
											<div class="box-komen">
												<img src="img/game.jpg" width="50" height="50"/>
												
												<div class="komentar">
													hallo <p style="margin-top: 0px;">hi</p>
												</div>
											</div>
											<div class="box-komen">
												<img src="img/game.jpg" width="50" height="50"/>
												
												<div class="komentar">
													hallo <p style="margin-top: 0px;">hi</p>
												</div>
											</div>
											<div class="box-komen">
												<img src="img/game.jpg" width="50" height="50"/>
												
												<div class="komentar">
													hallo <p style="margin-top: 0px;">hi</p>
												</div>
											</div>
											<div class="box-komen">
												<img src="img/game.jpg" width="50" height="50"/>
												
												<div class="komentar">
													hallo <p style="margin-top: 0px;">hi</p>
												</div>
											</div>
											<div class="box-komen">
												<img src="img/game.jpg" width="50" height="50"/>
												
												<div class="komentar">
													hallo <p style="margin-top: 0px;">hi</p>
												</div>
											</div>
											<div class="box-komen">
												<img src="img/game.jpg" width="50" height="50"/>
												
												<div class="komentar">
													hallo <p style="margin-top: 0px;">hi</p>
												</div>
											</div>
											
										</div>
										<div class="baru">
												<form action="komen.php">
													<label>Komen :</label>
													<input class="komen" type="text" name komen />
													<input type="submit" name="submit" value="ok"></input>
												</form>
											</div>
									</div>
								</div>
							</div>
			<div class="container">
				<div class="biodata">
					<h4>Biodata</h4>
					<table class="bio">
						<tr>
							<td>Nama</td>
							<td>Hanif</td>
						</tr>
						<tr>
							<td>TTL</td>
							<td>19 - 20 - 1995</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>hanif@gmail.com</td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>Malang coy</td>
						</tr>
					</table>
				<hr />
				<div class="friend">
					<h3>Friend</h3>
					<div class="friend-box">
						<img src="img/coffe.jpg" width="60" height="60" />
						<img src="img/macan.jpg" width="60" height="60" />
						<img src="img/kucing.jpg" width="60" height="60" />
						<img src="img/kelinci.jpg" width="60" height="60" />
						<img src="img/lompat.jpg" width="60" height="60" />
						<img src="img/game.jpg" width="60" height="60" />
						<img src="img/angel.jpg" width="60" height="60" />
						<img src="img/italia.jpg" width="60" height="60" />
						<img src="img/rumput.jpg" width="60" height="60" />
						<img src="img/rumah.jpg" width="60" height="60" />
						
					</div>
				</div>	
				</div>
					
				<hr class="batas" />
				<div class="photo-container">
					<div class="img">	
						<div class="cek">
							<img  class="gambar2" src="img/burger.jpg" width="100%" height="100%"/>
							<div class="modal-menu">
									<img class="view" src="img/icon/png/glass.png" width="30px" height="30px"/> 
										<img class="edit" src="img/icon/png/edit.png"/ width="30px" height="30px"> 
									<img class="hapus" src="img/icon/png/garbage.png"/ width="30px" height="30px">
							</div>
						</div>
					</div>
					<div class="img">			
						<div class="cek">
							<img  class="gambar2" src="img/city.jpg" width="100%" height="100%"/>
						<div class="modal-menu">
								<img class="view" src="img/icon/png/glass.png" width="30px" height="30px"/> 
								<img class="edit" src="img/icon/png/edit.png"/ width="30px" height="30px"> 
								<img class="hapus" src="img/icon/png/garbage.png"/ width="30px" height="30px">
						</div>
						</div>
					</div>
					<div class="img">			
						<div class="cek">
							<img  class="gambar2" src="img/coffe.jpg" width="100%" height="100%"/>
						<div class="modal-menu">
								<img class="view" src="img/icon/png/glass.png" width="30px" height="30px"/> 
								<img class="edit" src="img/icon/png/edit.png"/ width="30px" height="30px"> 
								<img class="hapus" src="img/icon/png/garbage.png"/ width="30px" height="30px">
						</div>
						</div>
					</div>
					<div class="img">	
						<div class="cek">
							<img  class="gambar2" src="img/icream.jpg" width="100%" height="100%"/>
							<div class="modal-menu">
									<img class="view" src="img/icon/png/glass.png" width="30px" height="30px"/> 
										<img class="edit" src="img/icon/png/edit.png"/ width="30px" height="30px"> 
									<img class="hapus" src="img/icon/png/garbage.png"/ width="30px" height="30px">
							</div>
						</div>
					</div>
					<div class="img">			
						<div class="cek">
							<img  class="gambar2" src="img/pizza.jpg" width="100%" height="100%"/>
						<div class="modal-menu">
								<img class="view" src="img/icon/png/glass.png" width="30px" height="30px"/> 
								<img class="edit" src="img/icon/png/edit.png"/ width="30px" height="30px"> 
								<img class="hapus" src="img/icon/png/garbage.png"/ width="30px" height="30px">
						</div>
						</div>
					</div>
					<div class="img">			
						<div class="cek">
							<img  class="gambar2" src="img/meat.jpg" width="100%" height="100%"/>
						<div class="modal-menu">
								<img class="view" src="img/icon/png/glass.png" width="30px" height="30px"/> 
								<img class="edit" src="img/icon/png/edit.png"/ width="30px" height="30px"> 
								<img class="hapus" src="img/icon/png/garbage.png"/ width="30px" height="30px">
						</div>
						</div>
					</div>
					<div class="img">	
						<div class="cek">
							<img  class="gambar2" src="img/burger.jpg" width="100%" height="100%"/>
							<div class="modal-menu">
									<img class="view" src="img/icon/png/glass.png" width="30px" height="30px"/> 
										<img class="edit" src="img/icon/png/edit.png"/ width="30px" height="30px"> 
									<img class="hapus" src="img/icon/png/garbage.png"/ width="30px" height="30px">
							</div>
						</div>
					</div>
					<div class="img">			
						<div class="cek">
							<img  class="gambar2" src="img/city.jpg" width="100%" height="100%"/>
						<div class="modal-menu">
								<img class="view" src="img/icon/png/glass.png" width="30px" height="30px"/> 
								<img class="edit" src="img/icon/png/edit.png"/ width="30px" height="30px"> 
								<img class="hapus" src="img/icon/png/garbage.png"/ width="30px" height="30px">
						</div>
						</div>
					</div>
					<div class="img">			
						<div class="cek">
							<img  class="gambar2" src="img/coffe.jpg" width="100%" height="100%"/>
						<div class="modal-menu">
								<img class="view" src="img/icon/png/glass.png" width="30px" height="30px"/> 
								<img class="edit" src="img/icon/png/edit.png"/ width="30px" height="30px"> 
								<img class="hapus" src="img/icon/png/garbage.png"/ width="30px" height="30px">
						</div>
						</div>
					</div>
							
							
				</div>
			</div>
			
<script type="text/javascript" src="js/jquery-2.2.3.min.js">	
</script>
<script>
	$(document).ready(function(){
		$(".img").mouseover(function(){
			$(this).find('.modal-menu').fadeIn("slow");
		});
		$(".img").mouseleave(function(){
			$(this).find('.modal-menu').fadeOut("slow");
		});
		
		$('.view').click(function(){
			 var i = $(this).closest(".cek").find(".gambar2").attr("src");
			 $('.gambar').attr("src",i);
			$('.luar').fadeIn("slow");
		});
		
		$(".close").click(function(){
			$('.luar').fadeOut("fast");	
		});
		$(".gambar").mouseover(function(){
			$('this').css("scale","20");	
		});
	});
</script>
	</body>
</html>