<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_controller {

	public function __construct(){
	        parent:: __construct();
	        $autoload['helper'] = array('url');
	    }
	 
	public function index()
	    {
	    	$this->load->database();

	        $this->load->model('m_transaksi');
			$data['juml_transaksi']=$this->m_transaksi->getJumlahTransaksi();
			$data['juml_transaksi4']=$this->m_transaksi->getJumlahTransaksiReject();
			$data['juml_transaksi5']=$this->m_transaksi->getJumlahTransaksiCancel();
			$data['juml_transaksi7']=$this->m_transaksi->getJumlahTransaksiSukses();

			$this->load->model('m_driver');
			$data['juml_driver']=$this->m_driver->getJumlahDriver();
			$data['juml_driver1']=$this->m_driver->getJumlahDriverAktif();
			$data['juml_driver2']=$this->m_driver->getJumlahDriverNon();
			$data['juml_driver3']=$this->m_driver->getJumlahDriverBanned();

			$this->load->model('m_pelanggan');
			$data['juml_pelanggan']=$this->m_pelanggan->getJumlahPelanggan();
			$data['juml_pelanggan1']=$this->m_pelanggan->getJumlahPelangganAktif();
			$data['juml_pelanggan2']=$this->m_pelanggan->getJumlahPelangganNon();
			$data['juml_pelanggan3']=$this->m_pelanggan->getJumlahPelangganBanned();

			// echo '<pre>'; print_r( $data['juml_transaksi']); echo '<pre/>';

			$this->load->view('v_dashboard', $data);
	    }

	public function setData()
	    {
	    	$this->load->database();
	        $this->load->model('m_driver');
			$data['allDriver']=$this->m_driver->selectAllDriver();

			$this->load->model('m_pelanggan');
			$data['allPelanggan']=$this->m_pelanggan->selectAllPelanggan();

			// echo '<pre>'; print_r( $data['allDriver']); echo '<pre/>';

			$this->load->view('v_setdata', $data);
	    }
 
}

?>