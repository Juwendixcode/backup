<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_controller {

	public function __construct(){
	        parent:: __construct();
	        $autoload['helper'] = array('url');
	    }
	 
	public function index()
	    {
			$this->load->view('v_login');	
	    }

	public function cekLogin() {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

//        echo "$email | $pass";
        $this->load->database();
        $data = $this->db->query("select * from admin where email = '$email'");
	
        if ($d = $data->result_array()) {
            $emailDB = $d[0]['email'];
            $passDB = $d[0]['password'];
//            var_dump($d);
            if ($passDB != $pass) {
                echo "<script> alert('Password Salah'); window.location.href='".base_url()."';</script>";
                // $this->load->view('v_login', $this->pesanerror);
            } else {
                
                $this->load->library('session');
                $this->session->set_userdata('id', $d[0]['id']);
                $this->session->set_userdata('nik', $d[0]['nik']);
                $this->session->set_userdata('email', $d[0]['email']);
                header('Location: ' . base_url() . "index.php/C_dashboard/dash");
            }
        } else {
//            echo 'tidak ada data';
            // $this->pesanerror = array(
            //     "pesan" => "User Admin tidak terdaftar"
            // );
            // $this->load->view('v_login', $this->pesanerror);
            echo "<script> alert('User Admin tidak terdaftar'); window.location.href='".base_url()."';</script>";
        }
    }

	public function logout()
		{
			$this->load->view('v_login');	
		}

	public function dash()
		{
			$this->load->database();
			$this->load->library('googlemaps');

	        $this->load->model('m_transaksi');
			$data['juml_transaksi']=$this->m_transaksi->getJumlahTransaksi();
			$data['juml_transaksi4']=$this->m_transaksi->getJumlahTransaksiReject();
			$data['juml_transaksi5']=$this->m_transaksi->getJumlahTransaksiCancel();
			$data['juml_transaksi7']=$this->m_transaksi->getJumlahTransaksiSukses();
			$data['juml_transaksi1']=$this->m_transaksi->getJumlahTransaksiContact();

			$data['juml_driver']=$this->m_transaksi->getJumlahDriver();
			$data['juml_driver1']=$this->m_transaksi->getJumlahDriverAktif();
			$data['juml_driver2']=$this->m_transaksi->getJumlahDriverNon();
			$data['juml_driver3']=$this->m_transaksi->getJumlahDriverBanned();

			$data['juml_pelanggan']=$this->m_transaksi->getJumlahPelanggan();
			$data['juml_pelanggan1']=$this->m_transaksi->getJumlahPelangganAktif();
			$data['juml_pelanggan2']=$this->m_transaksi->getJumlahPelangganNon();
			$data['juml_pelanggan3']=$this->m_transaksi->getJumlahPelangganBanned();

			// $data['bi']=$this->m_transaksi->getBI();			

			$this->load->model('m_driver');
			// $data['juml_driver']=$this->m_driver->getJumlahDriver();
			// $data['juml_driver1']=$this->m_driver->getJumlahDriverAktif();
			// $data['juml_driver2']=$this->m_driver->getJumlahDriverNon();
			// $data['juml_driver3']=$this->m_driver->getJumlahDriverBanned();

			$this->load->model('m_pelanggan');
			// $data['juml_pelanggan']=$this->m_pelanggan->getJumlahPelanggan();
			// $data['juml_pelanggan1']=$this->m_pelanggan->getJumlahPelangganAktif();
			// $data['juml_pelanggan2']=$this->m_pelanggan->getJumlahPelangganNon();
			// $data['juml_pelanggan3']=$this->m_pelanggan->getJumlahPelangganBanned();

			// echo '<pre>'; print_r( $data['juml_transaksi']); echo '<pre/>';

			$dataLngLat=$this->m_driver->getLatLngDriver();
			$dataLnglatOrder=$this->m_pelanggan->getJumlahPelangganOrder();
			// $config['center'] = '-2.976160, 104.742426';
			// $config['zoom'] = '15';
			// $this->googlemaps->initialize($config);

			// SET MARKER //

			$marker1 = array();
			for ($i=0; $i < count($dataLngLat) ; $i++) { 
				$marker1['position'] = $dataLngLat[$i]['latitude'].','. $dataLngLat[$i]['longitude'];
				// $marker1['draggable'] = TRUE;
				$marker1['icon']= base_url().'/assets/ic_m_ride_pin.png';
				$marker1['animation'] = 'DROP';	
				// var_dump($marker1);
				$this->googlemaps->add_marker($marker1);
			}
			$marker2 = array();
			for ($i=0; $i <count($dataLnglatOrder) ; $i++) {
				$marker2['position'] = $dataLnglatOrder[$i]['start_latitude'].','. $dataLnglatOrder[$i]['start_longitude'];
				$marker2['infowindow_content'] = 'Order';
				$marker2['icon']= base_url().'/assets/ic_loc_blue.png';
				$marker2['animation'] = 'DROP';	
				// var_dump($marker1);
				$this->googlemaps->add_marker($marker2); 
			}

			$marker2['infowindow_content'] = 'Order';
				// $marker = $marker1;

			// END MARKER //

			// $marker = array();
			// $marker['position'] = '-2.976160, 104.742426';
			// $marker['infowindow_content'] = '1 - Hello World!';
			// $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
			// $this->googlemaps->add_marker($marker);

			// $marker = array();
			// $marker['position'] = '-3.976160, 114.742426';
			// $marker['infowindow_content'] = '1 - Hello World!';
			// $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
			// $this->googlemaps->add_marker($marker);


			// $marker = array();
			// $marker['position'] = '-5.976160, 124.742426';
			// $marker['infowindow_content'] = '1 - Hello World!';
			// $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
			// $this->googlemaps->add_marker($marker);

			// $marker = array();
			// $marker['position'] = '-4.949087, 94.747569';
			// $marker['onclick'] = 'alert("You just clicked me!!")';
			// $this->googlemaps->add_marker($marker);

			// $marker = array();
			// $marker['position'] = '-2.949087, 104.747569';
			// $marker['onclick'] = 'alert("You just clicked me!!")';
			// $this->googlemaps->add_marker($marker);

			// SELECT DROP-DOWN

			$data['kecamatan']='Alang Alang Lebar';

			if(isset($_POST['pilih'])){
		    $select1 = $_POST['pilih'];
		    switch ($select1) {
		        case 'al':
		        	$data['kecamatan']='Alang alang lebar';
		            $config['center'] = '-2.935085, 104.698441';
					$config['zoom'] = '15';
					$this->googlemaps->initialize($config);
		            break;
		        case 'kn':
			        $data['kecamatan']='Kemuning';
		            $config['center'] = '-2.954630, 104.749177';
					$config['zoom'] = '15';
					$this->googlemaps->initialize($config);
		            break;
		        case 'kd':
		        	$data['kecamatan']='Kalidoni';
		            $config['center'] = '-2.965906, 104.810442';
					$config['zoom'] = '15';
					$this->googlemaps->initialize($config);
		            break;
	            case 'it1':
	            	$data['kecamatan']='Ilir Timur I';
		            $config['center'] = '-2.973930, 104.755011';
					$config['zoom'] = '15';
					$this->googlemaps->initialize($config);
		            break;
		        case 'it2':
		        	$data['kecamatan']='Ilir Timur II';
		            $config['center'] = '-2.961460, 104.781265';
					$config['zoom'] = '15';
					$this->googlemaps->initialize($config);
		            break;
		        case 'ib1':
		        	$data['kecamatan']='Ilir Barat I';
		            $config['center'] = '-2.986564, 104.717095';
					$config['zoom'] = '15';
					$this->googlemaps->initialize($config);
		            break;
		        case 'ib2':
		        	$data['kecamatan']='Ilir Barat II';
		            $config['center'] = '-2.998325, 104.743344';
					$config['zoom'] = '15';
					$this->googlemaps->initialize($config);
		            break;
		        case 'gd':
		        	$data['kecamatan']='Gandus';
		            $config['center'] = '-3.000495, 104.674886';
					$config['zoom'] = '15';
					$this->googlemaps->initialize($config);
		            break;
		        case 'bk':
		        	$data['kecamatan']='Bukit Kecil';
		            $config['center'] = '-2.988549, 104.749177';
					$config['zoom'] = '15';
					$this->googlemaps->initialize($config);
		            break;
	            case 'su1':
	            	$data['kecamatan']='Seberang Ulu I';
		            $config['center'] = '-3.010085, 104.769596';
					$config['zoom'] = '15';
					$this->googlemaps->initialize($config);
		            break;
		        case 'su2':
		        	$data['kecamatan']='Seberang Ulu II';
		            $config['center'] = '-3.000066, 104.792936';
					$config['zoom'] = '15';
					$this->googlemaps->initialize($config);
		            break;
		        case 'sk':
			        $data['kecamatan']='Sako';
		            $config['center'] = '-2.928015, 104.787364';
					$config['zoom'] = '15';
					$this->googlemaps->initialize($config);
		            break;
		        case 'pj':
		        	$data['kecamatan']='Plaju';
		            $config['center'] = '-2.999743, 104.816278';
					$config['zoom'] = '15';
					$this->googlemaps->initialize($config);
		            break;
		        default:
		            # code...
		            break;
		    	}
			}

			$data['map'] = $this->googlemaps->create_map();

			// END SELECT

			// $data['map'] = $this->googlemaps->create_map();

			// $this->load->view('v_noty');
			$this->load->view('v_dashboard', $data);
			// $this->load->view('v_dashboard');
		}

	public function inbox()
		{
			$this->load->view('v_inbox');
		}

	public function composed()
		{
			$this->load->view('v_composed');
		}

	public function setData()
	    {
	    	$this->load->database();

	    	$this->load->model('m_transaksi');
	        // $this->load->model('m_driver');
			$data['allDriver']=$this->m_transaksi->selectAllDriver();

			// $this->load->model('m_pelanggan');
			// $data['allPelanggan']=$this->m_pelanggan->selectAllPelanggan();
			$data['allPelanggan']=$this->m_transaksi->selectAllPelanggan();

			// echo '<pre>'; print_r( $data['allDriver']); echo '<pre/>';

			$this->load->view('v_setdata', $data);
			// $this->load->view('v_setdata');
	    }	

	public function profil()
		{
			$this->load->view('v_profil');
		}
 
}

?>