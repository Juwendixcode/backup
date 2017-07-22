<!DOCTYPE HTML>
<html>
	<head>
		<title>Save Your Sneakers - SYS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="../admin1/index.php"><img src="images/sys/logo1.png"></a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php?cp=1">Company's Profile</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<!-- <i class="icon fa-diamond">-->
				<img src="images/sys/white.png"><!--</i>-->
				<h2><em>Save Your Sneakers</em></h2>
				<p>Clean by you</p>
				<form>
				<ul class="actions">
					<li>
						<a href="index.php?cp=1" class="button big special">Company's Profile</a>
					<!-- <br><br>
						<input id="show" class="button big special" type="button" value="Our Service" />
						<input id="hide" class="button big alt" type="button" value="Our Service" /> -->
					</li>
				</ul>
				</form>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<h2 style="margin: -30px; font-size: 30px;"><em><center>Our Services</center></em></h2>
					<article id="article" class="feature left">
						<span class="image"><img src="images/sys/bw1.jpg" alt="" /></span>
						<div class="content">
							<h2>Deep Cleaning</h2>
							<p>All materials, all part of shoes and stain removal.<br>
							3-5 days duration.<br>
							<h5>Price: IDR 50k </h5>
							</p>
							<form name="order" method="post" action="">
							<ul class="actions">
								<li>
									<input id="show" class="button alt" type="button" value="Order" />
									<input id="hide" class="button alt" type="button" value="Cancel" />
									<!--<a id="show" href="#" class="button alt">Order</a>
									<a id="hide" href="#" class="button alt">Cancel</a>-->
								</li>
							</ul>
							</form>
						</div>
					</article>
						<div id="formorder" class="wrapper style4" style="display: none;">
							<form action="./admin1/index.php?deepcleaning=1" method="post">
								<div class="container 75%">
									<div class="row uniform 50%">
										<h1>Data Pemilik</h1><br>
										<div class="12u$">
											<input name="name" placeholder="Name" type="text" required/>
										</div>
										<div class="12u$">
											<textarea name="address" placeholder="Address Take & Send" rows="4" required></textarea>
										</div>
										<div class="12u$">
											<input name="HP" placeholder="Phone Number" type="text" required/>
										</div><br/><br/><br/>
										<h1>Data Sepatu</h1><br>
										<div class="12u$">
											<input name="merk" placeholder="Merk" type="text" required/>
										</div>
										<div class="12u$">
											<input name="size" placeholder="Size" type="text" required/>
										</div>
										<div class="12u$">
											<input name="oldcolor" placeholder="Shoe Color" type="text" required/>
										</div>
										<div class="12u$">
											<textarea name="note" placeholder="NOTE" rows="4" required></textarea>
										</div>
									</div>
								</div>
								<ul class="actions">
									<li style="float: right; margin-right: 5em;">
										<input name="pesan" type="submit" class="special" value="Submit" />
									</li>
									<!--<li><input type="reset" class="alt" value="Reset" /></li>-->
								</ul>
							</form>
						</div>
					<article id="article" class="feature right">
						<span class="image"><img src="images/sys/bw2.jpg" alt="" /></span>
						<div class="content">
							<h2>Regluing</h2>
							<p>SYS Package, include deep cleaning<br>
							7-20 days duration.<br>
							<h5>Price: IDR 150k </h5>
							</p>
							<form name="order" method="post" action="">
							<ul class="actions">
								<li>
									<input id="show1" class="button alt" type="button" value="Order" />
									<input id="hide1" class="button alt" type="button" value="Cancel" style="display: none;" />
									<!--<a id="show" href="#" class="button alt">Order</a>
									<a id="hide" href="#" class="button alt">Cancel</a>-->
								</li>
							</ul>
							</form>
						</div>
					</article>
						<div id="formorder1" class="wrapper style4" style="display: none;">
							<form action="index.php?reglue=1" method="POST">
								<div class="container 75%">
									<div class="row uniform 50%">
										<h1>Data Pemilik</h1><br>
										<div class="12u$">
											<input name="name" placeholder="Name" type="text" required/>
										</div>
										<div class="12u$">
											<textarea name="address" placeholder="Address Take & Send" rows="4" required></textarea>
										</div>
										<div class="12u$">
											<input name="HP" placeholder="Phone Number" type="text" required/>
										</div><br/><br/><br/>
										<h1>Data Sepatu</h1><br>
										<div class="12u$">
											<input name="merk" placeholder="Merk" type="text" required/>
										</div>
										<div class="12u$">
											<input name="size" placeholder="Size" type="text" required/>
										</div>
										<div class="12u$">
											<input name="oldcolor" placeholder="Shoe Color" type="text" required/>
										</div>
										<div class="12u$">
											<textarea name="note" placeholder="NOTE" rows="4" required></textarea>
										</div>
									</div>
								</div>
								<ul class="actions">
									<li style="float: right; margin-right: 5em;">
										<input name="pesan" type="submit" class="special" value="Submit" />
									</li>
									<!--<li><input type="reset" class="alt" value="Reset" /></li>-->
								</ul>
							</form>
						</div>
					<article id="article" class="feature left">
						<span class="image"><img src="images/sys/bw1.jpg" alt="" /></span>
						<div class="content">
							<h2>Repainting</h2>
							<p>Midsole and custom, include deep cleaning. <br>
							2-3 weeks duration.<br>
							<h5>Price: IDR 500k </h5>
							</p>
							<form name="order" method="post" action="">
							<ul class="actions">
								<li>
									<input id="show2" class="button alt" type="button" value="Order" />
									<input id="hide2" class="button alt" type="button" value="Cancel" style="display: none;" />
								</li>
							</ul>
							</form>
						</div>
					</article>
						<div id="formorder2" class="wrapper style4" style="display: none;">
							<form action="index.php?repainting=1" method="POST">
								<div class="container 75%">
									<div class="row uniform 50%">
										<h1>Data Pemilik</h1><br>
										<div class="12u$">
											<input name="name" placeholder="Name" type="text" required/>
										</div>
										<div class="12u$">
											<textarea name="address" placeholder="Address Take & Send" rows="4" required></textarea>
										</div>
										<div class="12u$">
											<input name="HP" placeholder="Phone Number" type="text" required/>
										</div><br/><br/><br/>
										<h1>Data Sepatu</h1><br>
										<div class="12u$">
											<input name="merk" placeholder="Merk" type="text" required/>
										</div>
										<div class="12u$">
											<input name="size" placeholder="Size" type="text" required/>
										</div>
										<div class="12u$">
											<input name="oldcolor" placeholder="Old Color" type="text" required/>
										</div>
										<div class="12u$">
											<input name="newcolor" placeholder="New Color" type="text" required/>
										</div>
										<div class="12u$">
											<label name="ourcolor" type="text" style="margin-left: 20px; margin-top: -20px; font-size: 12px; color: grey;">Input: Black / White / Red / Green / Blue / Yellow
										</div>
										<div class="12u$">
											<textarea name="note" placeholder="NOTE" rows="4" required></textarea>
										</div>
									</div>
								</div>
								<ul class="actions">
									<li style="float: right; margin-right: 5em;">
										<input name="pesan" type="submit" class="special" value="Submit" />
									</li>
									<!--<li><input type="reset" class="alt" value="Reset" /></li>-->
								</ul>
							</form>
						</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2>Track Your Shoe</h2>
						<p>Please input your transaction ID here</p>
					</header>
					<ul class="actions">
						<li>
						<form action="" method="POST">
							<div class="12u$" style="float: left; margin-bottom: 10%;">
								<input name="shoe_id" placeholder="YOUR TRANSACTION ID" type="text" style="" />
							</div>
								<input id="track" class="button alt" type="button" value="Track" />
 							<!-- <a href="#" class="button alt">Track</a> -->
						</form>
						</li>
					</ul>
						<div id="status" class="style5" style="display: none;">
								<div class="status" style="float: left; color: #ffffff">
									<h1 >Status</h1><br>
								</div>
								<div class="status">
									<h1 >Deskripsi</h1><br>
								</div>
						</div>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Comment</h2>
						<p>Help us with your suggestion</p>
					</header>
					<form action="#" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Name" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Email" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" /></li>
							<!-- <li><input type="reset" class="alt" value="Reset" /></li> -->
						</ul>
					</form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Save Your Sneakers.</li>
						<li>Images: <a href="http://unsplash.com">SYS</a>.</li>
						<li>Support Design: <a href="http://templated.co">TEMPLATED.CO</a>.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="assets/js/jquery-3.1.1.min.js"></script>
			<script src="assets/js/jquery-ui.js"></script>
			<script src="assets/js/showhide3.js"></script>
			<script src="assets/js/showhide1.js"></script>
			<script src="assets/js/showhide2.js"></script>
	</body>
</html>
