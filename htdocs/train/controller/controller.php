<?php	 
	include 'model/model.php';
	ob_start(); 
	class stationLocation {	
		public $googlemaps;	
		public $station;
		public $member;

		public function __construct(){
			$this->googlemaps = new googlemaps(); 
			$this->station = new station();
			$this->member = new member(); 
		}

		public function view_login(){
			include 'view/login.php';
		}

		public function ceklogin()
		{
			if(isset($_POST['login'])){
				if(!empty($_POST['username']) && !empty($_POST['password'])){           
			   		$query = $this->member->login($_POST['username'],$_POST['password']);
			   		$cek   = $this->member->fetch($query);  
				   	if($cek['username']==$_POST['username']&&$cek['password']==$_POST['password']){
					    $_SESSION['username']=$_POST['username'];
					    header ('location:index.php');
					    exit();
				   	}else{
					    echo "<script type='text/javascript'> alert('Your username / password is wrong.')";
				   	}      
			   	} else{
			   		echo "<script type='text/javascript'> alert('You must fill username and password.')";
			   	}
				header ('location:index.php');
			    exit();
			}
		}

		public function view_home(){
			include 'view/home.php';
		}
		
		public function view_mapsmenu(){
			include 'view/mapsmenu.php';
		}

		public function checkUserLocation(){
			echo "User is detected";
		}

		public function view_bigstation(){
			$query = $this->station->getBigStation();
			$cek   = $this->station->fetch($query);
			include 'view/bigstation.php';
		}

		public function view_smallstation(){
			$query = $this->station->getSmallStation();
			$cek   = $this->station->fetch($query);
			include 'view/smallstation.php';
		}

		public function view_detailstation($detailStation,$distance){
			$query = $this->station->getDetailStation($detailStation,$distance);
			$cek   = $this->station->fetch($query);
			include 'view/detailstation.php';
		}
		
		public function logout()
	  	{
	      session_unset();	
	      session_destroy();
		  header('location:index.php');
		  exit();
	  	}	
	}
?>