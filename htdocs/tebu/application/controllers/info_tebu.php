<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class info_tebu extends CI_Controller {
    
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('authtentification', 'refresh');
        }
    }

    public function index (){
        $this->load->model('db_tebu');
        $data['data_tebu']=$this->db_tebu->get_tebu();
        $data['table']=$this->load->view('table_pattern',$data,true);
        $data['notification']='';
        $data['js_notification']='';
        if($this->session->flashdata('notif')){
            $notif['val']=$this->session->flashdata('notif');
            $data['notification']=$this->load->view('notification',$notif,true);
            $data['js_notification']=$this->load->view('js_notification',$notif,true);
        }
        $this->load->view('table',$data);
    }

    public function testing2(){
        $this->load->model('db_tebu');
        $data['data_tebu']=$this->db_tebu->get_tebu();
        $this->load->view('testing2',$data);
    }

    public function show_form_data_tebu ($edit=''){
        $this->load->model('db_tebu');
        $data['input_tanggal']='';
        $data['notification']='';
        $data['js_notification']='';
        $result['schedule']=$this->db_tebu->get_schedule();
        $data['schedule']=$this->load->view('schedule_pattern',$result,true);
        if($this->session->flashdata('notif')){
            $notif['val']=$this->session->flashdata('notif');
            $data['notification']=$this->load->view('notification',$notif,true);
            $data['js_notification']=$this->load->view('js_notification',$notif,true);
        }
        if(empty($edit)){
            $data['action']='input_data_tebu';
            $data['input_tanggal']=$this->load->view('input_tanggal','',true);
            $this->load->view('form_data_tebu',$data);
        }else{
            $data['action']='edit_data_tebu/'.$edit;
            $this->load->view('form_data_tebu',$data);
        }
    }
    
    public function input_data_tebu(){
        $this->load->model('db_tebu');
        if($this->input->get('schedule')&&
           $this->input->get('tanggal')&&
           $this->input->get('tinggi')&&
           $this->input->get('berat')&&
           $this->input->get('diameter')){
                $data_tebu=array(
                    'id_schedule'=>$this->input->get('schedule'),
                    'tanggal'=>$this->input->get('tanggal'),
                    'tinggi'=>$this->input->get('tinggi'),
                    'berat'=>$this->input->get('berat'),
                    'diameter'=>$this->input->get('diameter')
                );
            $result=$this->db_tebu->insert_data_tebu($data_tebu);
            if($result){
                $newdata=array(
                    'notif'=>'input_data_tebu_berhasil'
                );
                $this->session->set_flashdata($newdata);
                redirect('info_tebu/', 'refresh');
                
            }else{
                $newdata=array(
                    'notif'=>'input_data_tebu_gagal'
                );
                $this->session->set_flashdata($newdata);
                redirect('info_tebu/show_form_data_tebu', 'refresh');
            }
        }else{
            $newdata=array(
                'notif'=>'form_input_salah'
            );
            $this->session->set_flashdata($newdata);
            redirect('info_tebu/show_form_data_tebu', 'refresh');
        }
        
        
    }
    public function edit_data_tebu($id){
        $this->load->model('db_tebu');
        if($this->input->get('schedule')&&
           $this->input->get('tinggi')&&
           $this->input->get('berat')&&
           $this->input->get('diameter')){
                $data_tebu=array(
                    'id'=>$id,
                    'id_schedule'=>$this->input->get('schedule'),
                    'tinggi'=>$this->input->get('tinggi'),
                    'berat'=>$this->input->get('berat'),
                    'diameter'=>$this->input->get('diameter')
                );
            $result=$this->db_tebu->edit_data_tebu($data_tebu);
            if($result){
                $newdata=array(
                    'notif'=>'edit_data_tebu_berhasil'
                );
                $this->session->set_flashdata($newdata);
                redirect('schedule/', 'refresh');
                
            }else{
                $newdata=array(
                    'notif'=>'edit_data_tebu_gagal'
                );
                $this->session->set_flashdata($newdata);
                redirect('info_tebu/show_form_data_tebu/'.$id, 'refresh');
            }
        }else{
            $newdata=array(
                'notif'=>'form_edit_salah'
            );
            $this->session->set_flashdata($newdata);
            redirect('info_tebu/show_form_data_tebu/'.$id, 'refresh');
        }
    }
    
    public function delete_data_tebu($id){
        $this->load->model('db_tebu');
        $result=$this->db_tebu->delete_data_tebu($id);
        if($result){
            $newdata=array(
                'notif'=>'delete_data_tebu_berhasil'
            );
            $this->session->set_flashdata($newdata);
            redirect('schedule/', 'refresh');

        }else{
            $newdata=array(
                'notif'=>'delete_data_tebu_gagal'
            );
            $this->session->set_flashdata($newdata);
            redirect('info_tebu/', 'refresh');
        }
    }
}

?>