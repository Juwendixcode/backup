<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/detailticket.css">
<style>	
	
		
</style>

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
				<div class="ticket">
					<div class="kodebook">
						<span>Booking Kode : <span style="color:#02D702;"><?php echo $tiket['code_booking'];?></span></span>
					</div>
					<div class="maskapai">
						<span> <?php echo $tiket['maskapai']?></span>
					</div>
					<div class="jadwal">
						<table>
							<tr>
								<td>
									Kota asal :
								</td>
								<td>
									<?php echo $tiket['asal']?>
								</td>
							</tr>
							<tr>
									<td><?php echo ucfirst($tiket['bandara_asal'])?></td>
									<td></td>
									<td><?php echo $tiket['jam_pergi']?></td>
							</tr>
							<tr>
								<td><hr /></td>
								
							</tr>
															
							<tr>
								<td>
									Kota Tujuan :
								</td>
								<td>
									<?php echo $tiket['tujuan']?>
								</td>
							</tr>
							<tr>
									<td><?php echo ucfirst($tiket['bandara_tuj'])?></td>
									<td></td>
									<td><?php echo $tiket['jam_tiba']?></td>
							</tr>														
						</table>
					</div>
					<hr />
					<div class="penumpang">
						<span>Penumpang <?php echo $tiket['jumlah_peg'];?></span>			<br /><br />			
							<?php foreach ($penumpang as $penumpang) {
								
							  ?>
							
								<span style="color:	#9E9E9E"><?php echo $penumpang['title'] ?>  <?php echo $penumpang['depan'] ?> <?php echo $penumpang['tengah'] ?>  <?php echo $penumpang['belakang'] ?> 
									</span>							<hr />	
														
							<?php }?>
						
					</div>
					<form method="post" action="<?php $this->pindah();  ?>">
					<?php if($tiket['status_refund']=='bisa'){   ?>	
					<input class="butt ok" type="submit" name="syarat" class="refund" value="refund"  /> 	
					<?php }else{?>
					<input class="butt no" type="submit" name="refund" class="refund" value="no-refund" disabled="disabled" />
					<?php }?>
					<input type="hidden" name="id" value="<?php echo $tiket['no_ticket'];?>" />
					<input class="butt yes" type="submit" name="back" class="refund" value="back" />				
					</form>
				</div>													
		</div>		
	</div>	

</div>

</body>
</html>
