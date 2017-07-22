<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class API extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->database();
        $this->load->model('Mangjek_model');
        date_default_timezone_set('Asia/Jakarta');
    }
     function index_get() {
        $this->response("Ok :)", 200);
    }

   
    function get_data_pelanggan_month_get(){
        $statistikPelanggan=$this->Mangjek_model->getPelanggan();
        $this->response($statistikPelanggan->result(),200);

    }
     function get_data_driver_month_get(){
        $statistikDriver=$this->Mangjek_model->getDriver();
        $this->response($statistikDriver->result(),200);

    }
    function get_data_drivercustomer_get(){
        $statistikPelanggan=$this->Mangjek_model->getPelanggan();
        $statistikDriver=$this->Mangjek_model->getDriver();
        $message= array(
                'pelanggan'=>$statistikPelanggan->result(),
                'driver'=>$statistikDriver->result()
            );
        $this->response($message,200);

    }
    function get_total_drivercustomer_get(){
        $totalUser=$this->Mangjek_model->getTotalUser();
        $totalDriver=$this->Mangjek_model->getTotalDriver();
        $resultUser=$totalUser->result();
        $resultDriver=$totalDriver->result();
        $message= array(
                'Pelanggan'=>$resultUser[0]->jumlah,
                'Driver'=>$resultDriver[0]->jumlah
            );
        $this->response($message,200);

    }
    function get_total_transaksi_perstatus_get(){
        $totalTransaksi=$this->Mangjek_model->getTransaksi();
        $this->response($totalTransaksi->result(),200);

    }
    
}
