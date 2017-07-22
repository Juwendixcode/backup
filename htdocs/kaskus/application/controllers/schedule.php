<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class schedule extends CI_Controller {

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('authtentification', 'refresh');
        }
    }

    public function index (){
        $this->load->model('db_schedule');
        $js_calendar='';
        $js_diagram='';
        $calendar_diagram='';
        $jumlah='';
        $query=$this->db_schedule->get_id_schedule();
        if ($query->num_rows() > 0)
                {
                $i=1;
                   foreach ($query->result() as $row)
                   {
                       $data_schedule['id']=$i;
                       $data_schedule['id_val']=$row->id_schedule;
                       $jenis_tebu=$this->db_schedule->get_jenis($data_schedule['id_val']);
                       if ($jenis_tebu->num_rows() == 1){
                         foreach ($jenis_tebu->result() as $row2){
                           $data_schedule['jenis']=$row2->jenis_tebu;
                         }
                       }
                       $calendar_temp=$this->load->view('calendar',$data_schedule,true);
                       $calendar_diagram.=$calendar_temp;
                       $data_schedule['kegiatan']=$this->db_schedule->get_kegiatan($row->id_schedule);
                       $js_calendar_temp=$this->load->view('js_calendar',$data_schedule,true);
                       $js_calendar.=$js_calendar_temp;

                       $diagram_temp=$this->load->view('diagram_tebu',$data_schedule,true);
                       $calendar_diagram.=$diagram_temp;
                       $data_schedule['diagram']=$this->db_schedule->get_data($row->id_schedule);
                       $data_schedule['std']=$this->db_schedule->get_target($row->id_schedule);
                       $js_diagram_temp=$this->load->view('js_diagram',$data_schedule,true);
                       $js_diagram .=$js_diagram_temp;
                       $i++;
                   }
                }
        $data=array(
            'cal_dig'=>$calendar_diagram,
            'js_diagram'=>$js_diagram,
            'js_calendar'=>$js_calendar,
            'notification'=>'',
            'js_notification'=>''
        );
        if($this->session->flashdata('notif')){
            $notif['val']=$this->session->flashdata('notif');
            $data['notification']=$this->load->view('notification',$notif,true);
            $data['js_notification']=$this->load->view('js_notification',$notif,true);
        }
        $this->load->view('grafik',$data);

    }

    public function show_form_schedule ($edit=''){
        $this->load->model('db_schedule');
        $result['jenis']=$this->db_schedule->get_jenis();
        $data['jenis']=$this->load->view('jenis_pattern',$result,true);
        $data['input_tanggal']=$this->load->view('input_tanggal','',true);
        $data['notification']='';
        $data['js_notification']='';
        if($this->session->flashdata('notif')){
            $notif['val']=$this->session->flashdata('notif');
            $data['notification']=$this->load->view('notification',$notif,true);
            $data['js_notification']=$this->load->view('js_notification',$notif,true);
        }
        if(empty($edit)){
            $data['action']='create_schedule';
            $this->load->view('form_schedule',$data);
        }else{
            $data['action']='edit_schedule/'.$edit;
            $this->load->view('form_schedule',$data);
        }
    }

    public function create_schedule(){
        $this->load->model('db_schedule');
        if($this->input->get('jenis')&&
           $this->input->get('tanggal'))
        {
                $schedule=array(
                    'id_jenis'=>$this->input->get('jenis'),
                    'tanggal'=>$this->input->get('tanggal')
                );
            $result=$this->db_schedule->create_schedule($schedule);
            if($result){
                $newdata=array(
                    'notif'=>'create_schedule_berhasil'
                );
                $this->session->set_flashdata($newdata);
                redirect('schedule/', 'refresh');

            }else{
                $newdata=array(
                    'notif'=>'create_schedule_gagal'
                );
                $this->session->set_flashdata($newdata);
                redirect('schedule/show_form_schedule/', 'refresh');
            }
        }else{
            $newdata=array(
                'notif'=>'form_input_salah'
            );
            $this->session->set_flashdata($newdata);
            redirect('schedule/show_form_schedule/', 'refresh');
        }
    }

    public function edit_schedule($id){
        $this->load->model('db_schedule');
        if($this->input->get('jenis')&&
           $this->input->get('tanggal')){

            $schedule=array(
                    'id_schedule'=>$id,
                    'id_jenis'=>$this->input->get('jenis'),
                    'tanggal'=>$this->input->get('tanggal')
                );
            $result=$this->db_schedule->edit_schedule($schedule);
            if($result){
                $newdata=array(
                    'notif'=>'edit_schedule_berhasil'
                );
                $this->session->set_flashdata($newdata);
                redirect('schedule/', 'refresh');

            }else{
                $newdata=array(
                    'notif'=>'edit_schedule_gagal'
                );
                $this->session->set_flashdata($newdata);
                redirect('schedule/show_form_schedule/'.$id, 'refresh');
            }
        }else{
            $newdata=array(
                'notif'=>'edit_schdule_gagal'
            );
            $this->session->set_flashdata($newdata);
            redirect('schedule/show_form_schedule/'.$id, 'refresh');
        }
    }

    public function delete_schedule($id){
        $this->load->model('db_schedule');
        $result=$this->db_schedule->delete_schedule($id);
        if($result){
            $newdata=array(
                'notif'=>'delete_schedule_berhasil'
            );
            $this->session->set_flashdata($newdata);
            redirect('schedule/', 'refresh');

        }else{
            $newdata=array(
                'notif'=>'delete_schedule_gagal'
            );
            $this->session->set_flashdata($newdata);
            redirect('schedule/', 'refresh');
        }
    }

}

?>
