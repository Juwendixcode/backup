<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends MY_Model {


    function __construct() {

        parent::__construct();

    }
    public function getDataEvent(){
        $this->db->select('*');
        $this->db->from('data_event');
        return $this->db->get();
    }
    public function getPelanggan(){
    	$this->db->select(' d.bulan,d.count as tambah,@running_sum:=@running_sum + d.count AS jumlah');
    	$this->db->from('(  SELECT MONTHNAME(created_on) as bulan, COUNT(id) AS `count`
            FROM pelanggan
           WHERE created_on >= NOW() - INTERVAL 1 YEAR 
        AND YEAR(created_on)=2017 GROUP BY MONTH(created_on)
        ORDER BY MONTH(created_on) ) d');
        $this->db->join('(SELECT @running_sum := 0 AS dummy) dummy');
        return $this->db->get();
    }

}
