<?php

class M_transaksi extends CI_Model{

	function __construct() {
        $this->load->database();
        $this->load->library('session');
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
}
?>