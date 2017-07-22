<?php

class M_driver extends CI_Model{

	function __construct() {
        $this->load->database();
        // $this->load->library('session');
    }

    function selectAllDriver() {
        $query = $this->db->query("
                SELECT * FROM driver WHERE status = 1
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
    
    function getLatLngDriver(){
		$query = $this->db->query("
			SELECT * FROM `config_driver` ");
        return $query->result_array();
    }

}
?>