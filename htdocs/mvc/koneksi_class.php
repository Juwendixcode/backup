<?php
//membuat class databse
class database {
    // properti
    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPass = "";
    private $dbName = "praktikumweb";

    // method koneksi MySQL
    function connectMySQL() {
        mysql_connect($this->dbHost, $this->dbUser, $this->dbPass);
        mysql_select_db($this->dbName) or die("Database tidak ada!");
    }

    // method tambah data (insert)	
    function tambahData($nomorProgram, $namaProgram, $suratKeterangan) {
        $query = "INSERT INTO proker (nomorProgram, namaProgram, suratKeterangan) VALUES ('$nomorProgram', '$namaProgram','$suratKeterangan')";
        $hasil = mysql_query($query);

        if ($hasil)
            echo"<meta http-equiv='refresh' content='0; url=index.php'>";
        else
            echo "Data Anggota gagal disimpan ke database";
    }

    // method tampil data 	
    function tampilData() {
        $query = mysql_query("SELECT * FROM proker ORDER BY nomorProgram");
        while ($row = mysql_fetch_array($query))
            $data[] = $row;
        return $data;
    }

    // method hapus data
    function hapusData($id_data) {
        $query = mysql_query("DELETE FROM proker WHERE nomorProgram='$id_data'");
        echo "<p>Data dengan ID " . $id_data . " sudah dihapus</p>";
    }

    // method membaca data 
    function bacaData($field, $id_data) {
        $query = "SELECT * FROM proker WHERE nomorProgram = '$id_data'";
        $hasil = mysql_query($query);
        $data = mysql_fetch_array($hasil);
        if ($field == 'nomorProgram')
            return $data['nomorProgram'];
        else if ($field == 'namaProgram')
            return $data['namaProgram'];
        else if ($field == 'suratKeterangan')
            return $data['suratKeterangan'];
    }

    // method untuk proses update data
    function updateData($nomorProgram, $namaProgram, $suratKeterangan) {
        $query = "UPDATE proker SET	nomorProgram='$nomorProgram', namaProgram ='$namaProgram', suratKeterangan='$suratKeterangan' WHERE nomorProgram='$nomorProgram'";
        mysql_query($query);
        echo "<p>Data sudah di update.</p>";
    }

}
?>
