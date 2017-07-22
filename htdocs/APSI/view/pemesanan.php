<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/pemesanan.css">
</head>
<body style="background-color:#1BA0E2;">
<div class="big-box">
	<div class="sidebar">
		<div class="logo">
			Traveloka
		</div>
		<a href="index.php?profil=1">
		<div class="menu">
			HOTEL
		</div>
		</a>
		<a>
		<div class="menu">
			PESAWAT
		</div>
		</a>
		<a href="index.php?pemesanan=1">
		<div class="menu cek">
			PEMESANAN
		</div>
		</a>
	<a class="logout" href="index.php?logout=1"?>Logout</a>		
	</div>
	<div class="main">
		<div class="main-logo">
			<img class="main-icon" src="gambar/ticket.svg" width="250" height="250" />

		</div>
		<div class="content">
			<?php foreach ($tiket as $tiket) {
										
			   ?>
			<a class="b" href="index.php?detailticket=<?php echo $tiket['no_ticket']; ?>">
				<div class="ticket">
					<div class="ticket-logo">
						<img src="gambar/plane.svg" width="80" height="80" />		
					</div>
					<div class="ticket-lokasi">
						<span><?php echo 	ucfirst($tiket['asal'])." > ".ucfirst($tiket['tujuan']);?> </span>
					</div>
					<div class="ticket-maskapai">
						<span> <?php echo strtoupper($tiket['maskapai'])." | ".$tiket['jadwal_ticket']." | ".$tiket['jam_pergi'];?></span>
					</div>
					<div class="ticket-button">
						<?php if($tiket['status_ticket']=='refund'){  ?>
						<div class="ticket-status refund">
							<span><?php echo $tiket['status_ticket'];  ?></span>	
						</div>
						<?php }else{ ?>
						<div class="ticket-status detail">
						<span><?php echo $tiket['status_ticket'];  ?></span>	
						</div>
						<?php }?>
					</div>
				</div>	
			</a>
			<?php } ?>						
		</div>		
	</div>	

</div>

</body>
</html>
