<?php	 
	include 'model/model.php';
	ob_start(); 
	class controller {
		
		public $model;

						
		
		public function __construct(){
			$this->model = new model(); 
		}
		
		public function view_home(){
			$foto = $this->model->tampil_foto();			
			$queryprofil = $this->model->profil_user($_SESSION['username']);
			$profil = $this->model->fetch($queryprofil);

			$querylogin = $this->model->userlogin($profil['id_user']);
			$yglogin = $this->model->fetch($querylogin);			


			include 'view/home.php';
		}
		public function view_login(){
			include 'view/login.php';
		}
		public function view_register(){
			include 'view/register.php';
		}
		
		public function register(){
			if(isset($_POST['register'])){
				
			$fileName = $_FILES['gambar']['name'];
			
			$register=$this->model->register($_POST['username'],$_POST['email'],$_POST['password'],$fileName);
			move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
			
			header ('location:index.php');
			exit();
			}
		}
		
		public function ceklogin()
		{
			if(isset($_POST['login'])){
														
			$query = $this->model->login($_POST['username'],$_POST['password']);
			$cek   = $this->model->fetch($query); 	
			
			if($cek['username']==$_POST['username']&&$cek['password']==$_POST['password']){
				$_SESSION['username']=$_POST['username'];
				header ('location:index.php');
				exit();
			}else{
				echo "<script>alert('maaf usernamepassword anda salah');</script>";
				header ('location:index.php');
				exit();
			}						
			}					
		}
		
		public function posting()
		{
			if(isset($_POST['save'])){
					
			$queryprofil = $this->model->profil_user($_SESSION['username']);
			$profil = $this->model->fetch($queryprofil);
			
			$fileName = $_FILES['gambar']['name'];
			$posting = $this->model->posting($profil['id_user'],$_POST['title'],$fileName,$_POST['tags']);
			move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);		
			header("Refresh:0");
			exit();							
			}						
		}

		public function likes(){
				if(isset($_POST['like'])){		
				$this->model-> like($_POST['idfoto'],$_POST['iduser']);
				header("Refresh:0");
				exit();									
				}
				elseif(isset($_POST['liked'])){		
				$this->model-> liked($_POST['idfoto'],$_POST['iduser']);
				header("Refresh:0");
				exit();									
				}									           
		}

		public function hapus_foto(){
			if(isset($_POST['hapus'])){
				$this->model-> hapusfoto($_POST['ckck']);				
				header("Refresh:0");				
				exit();															}
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

