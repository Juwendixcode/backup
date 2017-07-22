<?php

class M_transaksi extends CI_Model{

	function __construct() {
        $this->load->database();
        // $this->load->library('session');
    }

	function getJumlahTransaksi()	{
		$query = $this->db->query("
			SELECT COUNT(id_transaksi) AS jumlah FROM `history_transaksi`
			");
        return $query->result_array();
    }

    function getJumlahTransaksiReject()	{
		$query = $this->db->query("
			SELECT COUNT(id_transaksi) AS jumlah FROM `history_transaksi` WHERE `status` = '7'
			");
        return $query->result_array();
    }

    function getJumlahTransaksiCancel()	{
		$query = $this->db->query("
			SELECT COUNT(id_transaksi) AS jumlah FROM `history_transaksi` WHERE `status` = '5'
			");
        return $query->result_array();
    }

    function getJumlahTransaksiSukses()	{
		$query = $this->db->query("
			SELECT COUNT(id_transaksi) AS jumlah FROM `history_transaksi` WHERE `status` = '4'
			");
        return $query->result_array();
    }

    function getJumlahTransaksiContact()	{
		$query = $this->db->query("
			SELECT COUNT(id_transaksi) AS jumlah FROM `history_transaksi` WHERE `status` = '1'
			");
        return $query->result_array();
    }

    // BI ----------------------------------------------------------------------------

	function getBI()	{
		$query = $this->db->query("
			SELECT * FROM `dashboard`
			");
        return $query->result_array();
    }    

    // DRIVER ----------------------------------------------------------------

    function selectAllDriver() {
        $query = $this->db->query("
                SELECT * FROM `driver`
            ");
        return $query->result();
    }

    function getJumlahDriver()	{
		$query = $this->db->query("
			SELECT COUNT(id) AS jumlah FROM `driver`
			");
        return $query->result_array();
    }

    function getJumlahDriverAktif()	{
		$query = $this->db->query("
			SELECT COUNT(id) AS jumlah FROM `driver` WHERE `status` = '1'
			");
        return $query->result_array();
    }

    function getJumlahDriverNon()	{
		$query = $this->db->query("
			SELECT COUNT(id) AS jumlah FROM `driver` WHERE `status` = '2'
			");
        return $query->result_array();
    }

    function getJumlahDriverBanned()	{
		$query = $this->db->query("
			SELECT COUNT(id) AS jumlah FROM `driver` WHERE `status` = '3'
			");
        return $query->result_array();
    }



    // PELANGGAN -------------------------------------------------------------------

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
                FROM `pelanggan`
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