<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class authtentification extends CI_Controller {

    public function index() {//show login page
        $data['notification']='';
        $data['js_notification']='';
        if($this->session->flashdata('notif')){
            $notif['val']=$this->session->flashdata('notif');
            $data['notification']=$this->load->view('notification',$notif,true);
            $data['js_notification']=$this->load->view('js_notification',$notif,true);
        }
        $this->load->view('login',$data);
    }

    public function testing() {//show login page        
        $this->load->model('db_member');
        $result['kecamatan']=$this->db_member->get_kecamatan();
        $data['kecamatan']=$this->load->view('kecamatan',$result,true);
        $this->load->view('testing',$data);
    }

    public function show_regis() {//show login page
        $this->load->model('db_member');
        $result['kecamatan']=$this->db_member->get_kecamatan();
        $data['kecamatan']=$this->load->view('kecamatan',$result,true);
        $this->load->view('register',$data);
    }

    public function sign_up() {
        $this->load->model('db_member');
        //check if client make a change in html value with inspect element
        if (!isset($_POST['username']) ||
                !isset($_POST['email']) ||
                !isset($_POST['no_telp']) ||
                !isset($_POST['password']) ||
                preg_match('(\'|\")', $_POST['username']) ||
                !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
        ) {
            $newdata = array(
                'notif' => 'form_sign_up_salah'
            );
            $this->session->set_flashdata($newdata);
            redirect('authtentification/show_regis', 'refresh');
        }
        //continue make account-------------------------------------------------
        $data_regis = array(
            'username' => $this->input->post('username'),
            'id_kecamatan' => $this->input->post('kecamatan'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'no_telp' => $this->input->post('no_telp')
        );
        
        $check = $this->db_member->create_member($data_regis);
        if ($check) {
            //success to make account
            //give notif to login with new account in login page
            $newdata = array(
                'notif' => 'success_sign_up'
            );
            $this->session->set_flashdata($newdata);
            redirect('authtentification', 'refresh');
        } else {
            $newdata = array(
                'notif' =>'fail_sign_up'
                );
            $this->session->set_flashdata($newdata);
            redirect('authtentification/show_regis', 'refresh');
            
        }
    }
    
    public function login(){
        $this->load->model('db_member');
        //check if client make a change in html value with inspect element
        if (    !isset($_POST['username']) ||
                !isset($_POST['password']) ||
                preg_match('(\'|\")', $_POST['username']) //username not allowed used quote ( ' / " )
        ){
            $newdata = array(
                'notif' => 'form_login_salah'
            );
            $this->session->set_flashdata($newdata);
            redirect('authtentification', 'refresh');
        }
        $data_regis = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $check = $this->db_member->check_user($data_regis);
        if ($check) {
            $this->session->set_userdata('username',$this->input->post('username'));
            redirect('schedule', 'refresh');
        } else {
            $newdata = array(
                'notif' =>'fail_login'
                );
            $this->session->set_flashdata($newdata);
            redirect('authtentification', 'refresh');
        }
        
    }
    public function logout(){
        $this->session->unset_userdata('username');
        redirect('authtentification', 'refresh');
    }

}

?>
