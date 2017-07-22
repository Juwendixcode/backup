<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mangjek_model extends MY_Model {


    function __construct() {

        parent::__construct();

    }
    // public function getDataEvent(){
    //     $this->db->select('*');
    //     $this->db->from('data_event');
    //     return $this->db->get();
    // }
    public function getPenjualan(){
        $stat =  $this->db->query("Select Total_Harga,month(Tanggal) from 'penjualan'");
        return $stat;
    }
    




    //    public function getDriver(){
    //     $stat =  $this->db->query("SELECT d.bulan,d.count as tambah,
    //            @running_sum:=@running_sum + d.count AS jumlah
    //       FROM (  SELECT MONTHNAME(created_at) as bulan, COUNT(id) AS `count`
    //                 FROM driver
    //                WHERE created_at >= NOW() - INTERVAL 1 YEAR 
    //             AND YEAR(created_at)=2017 GROUP BY MONTH(created_at)
    //             ORDER BY MONTH(created_at) ) d
    //       JOIN (SELECT @running_sum := 0 AS dummy) dummy");

    //     return $stat;
    // }
    // public function getTotalUser(){
    //   $total=$this->db->query("SELECT COUNT(id) as jumlah FROM pelanggan WHERE status=1");
    //   return $total;

    // }
    //  public function getTotalDriver(){
    //   $totalD=$this->db->query("SELECT COUNT(id) as jumlah FROM driver WHERE status=1");
    //   return $totalD;

    // }
    // public function getTransaksi(){
    //   $transaksi=$this->db->query("SELECT MONTHNAME(h.waktu) as bulan,SUM(CASE WHEN h.status=4 THEN 1 ELSE 0 END) as reject,SUM(CASE WHEN h.status=5 THEN 1 ELSE 0 END) as cancel,SUM(CASE WHEN h.status=7 THEN 1 ELSE 0 END) as finish FROM history_transaksi h ,transaksi t WHERE h.waktu >= NOW() - INTERVAL 1 YEAR AND YEAR(h.waktu)=2017 AND t.id=h.id_transaksi AND h.status AND t.id_driver<> '' GROUP BY MONTH(h.waktu)");
    //   return $transaksi;

    // }

}
