<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class API extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->database();                
        $this->load->model('Miesetan_model');
        date_default_timezone_set('Asia/Jakarta');
    }
     function index_get() {
        $this->response("Ok :)", 200);
    }

     function get_penjualanhari_get(){
        $data=$this->Miesetan_model->getPenjualanhari();                
        $this->response($data->result(),200);
     }
     function get_penjualanprodukhari_get(){
        $data=$this->Miesetan_model->getPenjualanprodukhari();                
        $this->response($data->result(),200);
     }

     function get_makanan_get(){
        $data=$this->Miesetan_model->getStockmakanan();                
        $this->response($data->result(),200);
     }
     function get_minuman_get(){
        $data=$this->Miesetan_model->getStockminuman();                
        $this->response($data->result(),200);
     }
     function get_total_penjualan_get(){
        $totalPenjualan=$this->Miesetan_model->getTotalPenjualan();
        $this->response($totalPenjualan->result(),200);
     }
     function get_nama_get(){
        $totalPenjualan=$this->Miesetan_model->getNama();
        $this->response($totalPenjualan->result(),200);
     }

    function get_transaksihari_get(){
        $data=$this->Miesetan_model->getTransaksihari();
        $this->response($data->result(),200);
    }
    
    function get_pendapatanprodukhari_get(){
        $data=$this->Miesetan_model->getPendapatanprodukhari();
        $this->response($data->result(),200);
    }
    
}
