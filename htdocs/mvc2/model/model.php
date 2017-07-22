<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi

		function __construct(){
			$mysqli = new mysqli('localhost', 'root', 
                       '', 'mvc');
		}
		
		function execute($query){
			$mysqli = new mysqli('localhost', 'root', 
                       '', 'mvc');
			$rs = $mysqli->query ($query);
			return $rs;
		}
		
		function selectAll(){
			$query = "select * from mahasiswa";
			return $this->execute($query);
		}
		
		function selectMhs($nim){
			$query = "select * from mahasiswa where nim='$nim'";
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			$query = "update mahasiswa set nim='$nim', nama='$nama', angkatan='$angkatan', fakultas='$fakultas', program='$prodi' where nim='$nim'";
			return $this->execute($query);
		}
		
		function deleteMhs($nim){
			$query = "delete from mahasiswa where nim='$nim'";
			return $this->execute($query);
		}
		
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			$query = "insert into mahasiswa values ('$nim', '$nama', '$angkatan', '$fakultas', '$prodi')";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>