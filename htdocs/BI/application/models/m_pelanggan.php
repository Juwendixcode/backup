<?php

class M_pelanggan extends CI_Model{

	function __construct() {
        $this->load->database();
        $this->load->library('session');
    }

    function selectAllPelanggan() {
        $query = $this->db->query("
                SELECT
                id,
                nama_depan,
                nama_belakang,
                email,
                no_telepon,
                alamat,
                created_on,
                (select count(id) from transaksi where id_pelanggan = pelanggan.id) as jumlah_transaksi
                FROM pelanggan
            ");
        return $query->result();
    }

    function getJumlahPelanggan()	{
		$query = $this->db->query("
			SELECT COUNT(id) AS jumlah FROM `pelanggan`
			");
        return $query->result_array();
    }

	function getJumlahPelangganAktif()	{
		$query = $this->db->query("
			SELECT COUNT(id) AS jumlah FROM `pelanggan` WHERE `status` = '1'
			");
        return $query->result_array();
    }

	function getJumlahPelangganNon()	{
		$query = $this->db->query("
			SELECT COUNT(id) AS jumlah FROM `pelanggan` WHERE `status` = '2'
			");
        return $query->result_array();
    }

	function getJumlahPelangganBanned()	{
		$query = $this->db->query("
			SELECT COUNT(id) AS jumlah FROM `pelanggan` WHERE `status` = '3'
			");
        return $query->result_array();
    }

}
?>