<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Miesetan_model extends MY_Model {


    function __construct() {

        parent::__construct();

    }
    

    public function getPenjualanhari(){
        $query =  $this->db->query("
            SELECT SUM(total_penjualan_produk)as total,DayName(tanggal)hari FROM `fakta_penjualan` GROUP by hari
            "              
        );        
        return $query;
    }
    // public function getPenjualanhari(){
    //     $dbasal = $this->load->database('dbasal', TRUE);
    //     $query =  $this->dbasal->query("
    //         SELECT count(invoice)as invoice,Dayname(Tanggal)as hari FROM `penjualan` GROUP by hari
    //         "              
    //     );        
    //     return $query;
    // }

    public function getPengguna(){
        $query =  $this->db->query("
            SELECT count(Source)as twitter from twitter ;
            "              
        );        
        return $query;
    }

    public function getPengunjung(){
        $query =  $this->db->query("
            SELECT Count(total_penjualan_produk)as total from fakta_penjualan;
            "              
        );
        return $query;
    }

    public function getPendapatanprodukhari(){
        $query =  $this->db->query("
            SELECT DayName(tanggal)hari,SUM(total_pendapatan_produk)as total FROM `fakta_penjualan` GROUP by hari
            "              
        );
        return $query;
    }

    public function getTransaksihari(){
        $query = $this->db->query("
            SELECT DayName(tanggal)hari,Count(total_penjualan_produk)as total FROM `fakta_penjualan` GROUP by hari
            "
        );
        return $query;
    }

    public function getPenjualanprodukhari(){
        $query = $this->db->query("
            SELECT (SELECT nama from d_produk p where p.id = f.id_produk) as produk,DayName(tanggal)hari,SUM(total_pendapatan_produk)as total FROM `fakta_penjualan` f where Dayname(tanggal)= 'sunday' GROUP by hari,produk
            ");
        return $query;
    }
    
    public function getStockmakanan(){
        $stat =  $this->db->query("SELECT * FROM d_produk where id_jenis_produk = 1");
        return $stat;
    }
    public function getTotalstockmakanan(){
        $stat =  $this->db->query("SELECT sum(stock)as total FROM d_produk where id_jenis_produk = 1");
        return $stat;
    }
    public function getTotalstockminuman(){
        $stat =  $this->db->query("SELECT sum(stock)as total FROM d_produk where id_jenis_produk = 2");
        return $stat;
    }
    public function getStockminuman(){
        $stat =  $this->db->query("SELECT * FROM d_produk where id_jenis_produk = 2");
        return $stat;
    }
    public function getTotalPenjualan(){
        $query = $this->db->query("SELECT sum(total_penjualan_produk)as total from fakta_penjualan");
        return $query;
    }
    public function getNama(){
        $query = $this->db->query("SELECT DAYNAME(tanggal)as hari,( select nama from d_produk e where e.id = p.id_produk)as nama from fakta_penjualan p where p.id_produk = 7 ");
        return $query;   
    }


}
