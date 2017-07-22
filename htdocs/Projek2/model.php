<?php
include "koneksi.php";

class model{

  function __construct(){
	$mysqli = new mysqli('localhost', 'root',
              '', 'praktikum');
  }
  function execute($query){
	$mysqli = new mysqli('localhost', 'root','', 'praktikum');
			$rs = $mysqli->query ($query);
			return $rs;
  }

  public function cekUser($user,$pass){
   $query ="Select * from user where username='$user' and password='$pass' ";
   return $this->execute($query);
  }

  public function cekLogin($user,$password){
	  $cek =  $this->cekUser($user,$password) ;
	  $data = $this->fetch($cek);
	  if ($data['username'] != ''&& $data['password'] != '')
	  {
	  	 $_SESSION['username']=$user;
	  }
  }

  public function semua_foto(){
  	$query = "select * from foto where username ='".$_SESSION['username']."'";
	return $this->execute($query);
  }

  public function semua_fotouser($user){
  	$query = "select * from foto where username ='$user'";
	return $this->execute($query);
  }

  public function hitungsemua_fotouser($user){
  	$query = "select count(*)as jumlah from foto where username ='$user'";
	return $this->execute($query);
  }

  public function semua_user(){
  	$query = "select * from user";
	return $this->execute($query);
  }
  public function user_user($user){
  	$query = "select * from user where username='$user'";
	return $this->execute($query);
  }
  public function user_id($id){
  	$query = "select * from user where id_user='$id'";
	return $this->execute($query);
  }

  public function semua_pesanadmin(){
  	$query = "select id_pesan,id_foto,username,email,pengirim,penerima,subject,pesan,statuspesan,
  	CASE
	WHEN  	YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu) AND DAY(current_date)=DAY(waktu) AND HOUR(current_time)=HOUR(waktu) AND MINUTE(current_time)=MINUTE(waktu)
		THEN  (concat(SECOND(current_time) - SECOND(waktu),' s'))
	WHEN    YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu) AND DAY(current_date)=DAY(waktu) AND HOUR(current_time)=HOUR(waktu)
		THEN  (concat(MINUTE(current_time)-MINUTE(waktu), ' m'))
	WHEN    YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu) AND DAY(current_date)=DAY(waktu)
		THEN  (concat(HOUR(current_time)-HOUR(waktu), ' h'))
	WHEN    YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu)
		THEN  (concat(DAY(current_date)-DAY(waktu), ' d') )
	WHEN    YEAR(current_date)=YEAR(waktu)
		THEN  (concat(MONTH(current_date)-MONTH(waktu), ' m') )
	ELSE
		(concat(DATE(WAKTU),' at ',TIME       (WAKTU)))
	END AS waktu
  	 from pesan where penerima='admin' order by id_pesan desc";
	return $this->execute($query);
  }

  public function semua_pesanuser($user){
  	$query = "select * from pesan where penerima='$user' order by id_pesan desc";
	return $this->execute($query);
  }
  public function pesan_adminbelumterbaca(){
  	$query = "select count(*)as jumlah from pesan where penerima='admin' and statuspesan='baru'";
	return $this->execute($query);
  }
  public function pesan_userbelumterbaca($user){
  	$query = "select count(*)as jumlah from pesan where penerima='$user' and statuspesan='baru'";
	return $this->execute($query);
  }

  public function foto_id($id)
  {
      $query = "select id_foto,username,url,caption,
  	CASE
	WHEN  	YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu) AND DAY(current_date)=DAY(waktu) AND HOUR(current_time)=HOUR(waktu) AND MINUTE(current_time)=MINUTE(waktu)
		THEN  (concat(SECOND(current_time) - SECOND(waktu),' s'))
	WHEN    YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu) AND DAY(current_date)=DAY(waktu) AND HOUR(current_time)=HOUR(waktu)
		THEN  (concat(MINUTE(current_time)-MINUTE(waktu), ' m'))
	WHEN    YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu) AND DAY(current_date)=DAY(waktu)
		THEN  (concat(HOUR(current_time)-HOUR(waktu), ' h'))
	WHEN    YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu)
		THEN  (concat(DAY(current_date)-DAY(waktu), ' d') )
	WHEN    YEAR(current_date)=YEAR(waktu)
		THEN  (concat(MONTH(current_date)-MONTH(waktu), ' m') )
	ELSE
		(concat(DATE(WAKTU),' at ',TIME       (WAKTU)))
	END AS waktu

  	 from foto where id_foto ='$id' ";
	  return $this->execute($query);
  }



  public function tampil_pesanid($id){
  	$query = "select * from pesan where id_pesan = '$id' ";
	return $this->execute($query);
  }

  public function profil_session(){
  	$query = "select * from profil where username ='".$_SESSION['username']."'";
	return $this->execute($query);
  }

  public function profil_id($id){
  	$query = "select * from profil where id_user ='$id'";
	return $this->execute($query);
  }
  public function profil_user($user){
  	$query = "select * from profil where username ='$user'";
	return $this->execute($query);
  }

  public function friend_sessionid($id){
  	$query = "select * from friend where id_user ='$id' and username <> 'admin'";
	return $this->execute($query);
  }

	public function friend_id($id){
  	$query = "select * from friend where id_user ='$id' and username <> 'admin' ";
	return $this->execute($query);
  }

  public function profil_photoid($user){
  	$query = "select * from profil where username ='$user' ";
    return $this->execute($query);
  }

  public function profilpicture($id){
  	$query = "select id_foto,username,url,caption,
  	CASE
	WHEN  	YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu) AND DAY(current_date)=DAY(waktu) AND HOUR(current_time)=HOUR(waktu) AND MINUTE(current_time)=MINUTE(waktu)
		THEN  (concat(SECOND(current_time) - SECOND(waktu),' s'))
	WHEN    YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu) AND DAY(current_date)=DAY(waktu) AND HOUR(current_time)=HOUR(waktu)
		THEN  (concat(MINUTE(current_time)-MINUTE(waktu), ' m'))
	WHEN    YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu) AND DAY(current_date)=DAY(waktu)
		THEN  (concat(HOUR(current_time)-HOUR(waktu), ' h'))
	WHEN    YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu)
		THEN  (concat(DAY(current_date)-DAY(waktu), ' d') )
	WHEN    YEAR(current_date)=YEAR(waktu)
		THEN  (concat(MONTH(current_date)-MONTH(waktu), ' m') )
	ELSE
		(concat(DATE(WAKTU),' at ',TIME       (WAKTU)))
	END AS waktu

  	 from foto where id_foto ='$id' ";
    return $this->execute($query);
  }

  public function komen_id($id)
  {
     $query = "select id,id_foto,username,url,email,text,
     CASE
	WHEN  	YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu) AND DAY(current_date)=DAY(waktu) AND HOUR(current_time)=HOUR(waktu) AND MINUTE(current_time)=MINUTE(waktu)
		THEN  (concat(SECOND(current_time) - SECOND(waktu),' s'))
	WHEN    YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu) AND DAY(current_date)=DAY(waktu) AND HOUR(current_time)=HOUR(waktu)
		THEN  (concat(MINUTE(current_time)-MINUTE(waktu), ' m'))
	WHEN    YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu) AND DAY(current_date)=DAY(waktu)
		THEN  (concat(HOUR(current_time)-HOUR(waktu), ' h'))
	WHEN    YEAR(current_date)=YEAR(waktu) AND MONTH(current_date)=MONTH(waktu)
		THEN  (concat(DAY(current_date)-DAY(waktu), ' d') )
	WHEN    YEAR(current_date)=YEAR(waktu)
		THEN  (concat(MONTH(current_date)-MONTH(waktu), ' m') )
	ELSE
		(concat(DATE(WAKTU),' at ',TIME       (WAKTU)))
	END AS waktu from comments where id_foto='$id' ";
     return $this->execute($query);
  }
  public function tambahkomentar($id,$komen,$user)
  {
  	$profil = $this->profil_user($user);
	$dataprofil = $this->fetch($profil);

  	$query = "insert into comments (username,text,url,id_foto)values('$user','$komen','".$dataprofil['photo']."','$id')";
	return $this->execute($query);
  }
  public function tambahlike($id,$user)
  {
    $profil = $this->profil_user($user);
	$dataprofil = $this->fetch($profil);

    $query = "insert into likes(id_foto,id_user,username)values
	('$id','".$dataprofil['id_user']."','$user')";
	return $this->execute($query);
  }

  public function hapuslike($id,$user){
  	$query = "delete from likes where id_foto='$id' and username='$user'";
	return $this->execute($query);
  }

  public function ceklike($id,$username)
  {
      $query = "select * from likes where id_foto='$id' and username='$username'";
	  return $this->execute($query);
  }

  public function cekteman($id,$username){
  	$query = "select * from friend where id_user='$id' && username='$username'";
  	return $this->execute($query);
  }

  public function deleteuser($id){
  	$query = "delete from user where id_user='$id'";
  	return $this->execute($query);
  }

  public function tampilbarudiadd($username){
  	$query="SELECT * FROM USER
  	WHERE ID_USER NOT IN( SELECT P.ID_USER FROM USER U JOIN friend T
  	ON U.ID_USER = T.ID_USER JOIN USER P ON T.USERNAME = P.USERNAME
  	WHERE U.username ='$username')and username <> '$username' and username <> 'admin'";
  	return $this->execute($query);
  }

  public function jumlahfoto_user($user){
  	$query = "select count(*)as jumlah from foto where username = '$user'   ";
  	return $this->execute($query);
  }



  public function tambahteman1($iduser,$username){
  	$query="insert into friend (id_user,username)  values('$iduser','$username')";
	return $this->execute($query);
  }
  public function tambahteman2($iduser,$username){
  	$query="insert into friend (id_user,username)  values('$iduser','$username')";
	return $this->execute($query);
  }
  public function tambahreport($id,$user,$email,$pengirim,$subject,$pesan){
  	//$query = "insert into pesan (id_foto,username,email,pengirim,penerima,subject,pesan,status,tanggal_pesan)
  	//values('$id','$user','$email','$pengirim','admin','$subject','$pesan','baru',curdate())";

	$query = "INSERT INTO `pesan` (`id_pesan`, `id_foto`, `username`,
	`email`, `pengirim`, `penerima`, `subject`, `pesan`, `statuspesan`)
	VALUES (NULL, '$id', '$user', '$email', '$pengirim', 'admin', '$subject', '$pesan', 'baru');";
	return $this->execute($query);
  }
  public function tambahposting($user,$file,$text){

	$query = "insert into foto (username,url, caption)
		values ('$user','$file','$text')";
	return $this->execute($query);
  }

  public function hapusfoto($id)
  {
      $query = "delete from foto where id_foto='$id'";
	  return $this->execute($query);
  }

  public function foto_posting($user)
  {
      $query="select u.*, f.id_foto,f.username as userfriend,f.url,f.caption,

	CASE
	WHEN  	YEAR(current_date)=YEAR(f.waktu) AND MONTH(current_date)=MONTH(f.waktu) AND DAY(current_date)=DAY(f.waktu) AND HOUR(current_time)=HOUR(f.waktu) AND MINUTE(current_time)=MINUTE(f.waktu)
		THEN  (concat(SECOND(current_time) - SECOND(f.waktu),' s'))
	WHEN    YEAR(current_date)=YEAR(f.waktu) AND MONTH(current_date)=MONTH(f.waktu) AND DAY(current_date)=DAY(f.waktu) AND HOUR(current_time)=HOUR(f.waktu)
		THEN  (concat(MINUTE(current_time)-MINUTE(f.waktu), ' min'))
	WHEN    YEAR(current_date)=YEAR(f.waktu) AND MONTH(current_date)=MONTH(f.waktu) AND DAY(current_date)=DAY(f.waktu)
		THEN  (concat(HOUR(current_time)-HOUR(f.waktu), ' h'))
	WHEN    YEAR(current_date)=YEAR(f.waktu) AND MONTH(current_date)=MONTH(f.waktu)
		THEN  (concat(DAY(current_date)-DAY(f.waktu), ' d') )
	WHEN    YEAR(current_date)=YEAR(f.waktu)
		THEN  (concat(MONTH(current_date)-MONTH(f.waktu), ' m') )
	ELSE
		(concat(DATE(f.waktu),' at ',TIME       (f.waktu)))
	END AS waktu
       from user u join foto f on u.username=f.username where u.id_user in
       (SELECT P.ID_USER FROM USER U JOIN friend T ON U.ID_USER = T.ID_USER JOIN USER P
       ON T.USERNAME = P.USERNAME WHERE U.username ='$user') UNION select u.*,f.id_foto,f.username
       as userfriend,f.url,f.caption,
       CASE
	WHEN  	YEAR(current_date)=YEAR(f.waktu) AND MONTH(current_date)=MONTH(f.waktu) AND DAY(current_date)=DAY(f.waktu) AND HOUR(current_time)=HOUR(f.waktu) AND MINUTE(current_time)=MINUTE(f.waktu)
		THEN  (concat(SECOND(current_time) - SECOND(f.waktu),' s'))
	WHEN    YEAR(current_date)=YEAR(f.waktu) AND MONTH(current_date)=MONTH(f.waktu) AND DAY(current_date)=DAY(f.waktu) AND HOUR(current_time)=HOUR(f.waktu)
		THEN  (concat(MINUTE(current_time)-MINUTE(f.waktu), ' min'))
	WHEN    YEAR(current_date)=YEAR(f.waktu) AND MONTH(current_date)=MONTH(f.waktu) AND DAY(current_date)=DAY(f.waktu)
		THEN  (concat(HOUR(current_time)-HOUR(f.waktu), ' h'))
	WHEN    YEAR(current_date)=YEAR(f.waktu) AND MONTH(current_date)=MONTH(f.waktu)
		THEN  (concat(DAY(current_date)-DAY(f.waktu), ' d') )
	WHEN    YEAR(current_date)=YEAR(f.waktu)
		THEN  (concat(MONTH(current_date)-MONTH(f.waktu), ' m') )
	ELSE
		(concat(DATE(f.waktu),' at ',TIME       (f.waktu)))
	END AS waktu


	    from user u join foto f
       on u.username=f.username where u.username='$user' ORDER by id_foto desc
	   ";
	  return $this->execute($query);
  }



  public function jumlahKomentar($id)
  {
    $query = "select count(*)as jumlah from comments where id_foto = '$id'";
	return $this->execute($query);
  }
  public function jumlahLike($id){
  	$query = "select count(*)as jumlah from likes where id_foto = '$id'";
	return $this->execute($query);
  }

  public function jumlahTeman($id){
  	$query= "select  count(*)as jumlah from friend where id_user = $id and username <> 'admin'";
	return $this->execute($query);
  }


  function fetch($var){
	return mysqli_fetch_array($var);
  }

  public function tambahprofil($id,$username,$email,$date,$fileName,$back)
  {

  	$query =  "update profil set
  				username='$username',
  				email='$email',
  				tanggal_lahir='$date',
  				photo='$fileName',
  				back='$back'
  				where id_user='$id' ";
  	return $this->execute($query);

  }

  public function updateuser($id,$username,$password,$email)
  {
     $query = "update user set username='$username',password='$password',email='$email' where id_user='$id' ";
     return $this->execute($query);
  }

 public function balaspesan($idfoto,$pengirim,$penerima,$teks,$subject)
 {
     $query = "INSERT INTO `pesan` (`id_pesan`, `id_foto`, `username`,
	 `email`, `pengirim`, `penerima`, `subject`, `pesan`, `statuspesan`)
	 VALUES (NULL, '$idfoto', '$penerima', 'admin@admin.com', '$pengirim', '$penerima', '$subject',
	 '$teks', 'baru');";
	 return $this->execute($query);
 }

 public function ubahstatuspesan($id)
 {
     $query = "update pesan set statuspesan='lama' where id_pesan='$id'";
     return $this->execute($query);
 }

 public function editphoto($caption,$id)
 {
     $query = "update foto set caption ='$caption' where id_foto = '$id'";
     return $this->execute($query);
 }
 public function editkomen($idpesan,$text){
 	$query = "update comments set text='$text' where id='$idpesan'";
 	return $this->execute($query);
 }


 public function hapuskomen($id)
 {
     $query = "delete from comments where id = '$id'";
     return $this->execute($query);
 }




 public function deletesemuapesandmin()
 {
     $query = "delete from pesan where penerima='admin'";
     return $this->execute($query);
 }

 public function ubahwaktu($waktu)
 {
     $query = "

     if ((YEAR(CURRENT DATE)=YEAR('$waktu')) AND (MONTH(CURRENT DATE)=MONTH('$waktu')) AND (DAY(CURRENT DATE)=DAY('$waktu')) AND (HOUR(CURRENT TIME)=HOUR(W)) AND (MINUTE(CURRENT TIME)=MINUTE(W)))


     ";
 }




  public function bulan($data){
  	if($data=="01"){
  	return "Januari";
  	}
    elseif($data=="02"){
  	return "Februari";
  	}
	elseif($data=="03"){
  	return "Maret";
  	}
  	elseif($data=="04"){
  	return "April";
  	}
  	elseif($data=="05"){
  	return "Mei";
  	}
	elseif($data=="06"){
  	return "Juni";
  	}
  	elseif($data=="07"){
  	return "Juli";
  	}
	elseif($data=="08"){
  	return "Agustus";
  	}
	elseif($data=="09"){
  	return "September";
  	}
  	elseif($data="10"){
  	return "Oktober";
  	}
	elseif($data="11"){
  	return "November";
  	}
	else{
	return "Desember";
	}
  }


  public function tambahuserdata($username,$password,$email)
  {
  	$query= "insert into user values (NULL,'$username','$password','$email',curdate())";
	if($query){
  	return $this->execute($query);
	}else{
		return false;
	}

  }
  public function tambahprofilsementara($username,$email){
  	$query = "insert into profil(username,email,photo,back)value('$username','$email','profil.png','photokopi.jpg')" ;
  	return $this->execute($query);
  }

  public function tambahuser($username,$password,$email,$date,$fileName)
  {
  	$cek  = $this->tambahprofil($username, $email,$date, $fileName);
  	$cek2 = $this->tambahuserdata($username, $password, $email);
	return true;
  }


}


?>
