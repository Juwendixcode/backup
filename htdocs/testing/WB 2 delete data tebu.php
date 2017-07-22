<?php

$id = 1;
delete_data_tebu($id);

function delete_data_tebu($id){
        //$this->load->model('db_tebu');
		//$result=$this->db_tebu->delete_data_tebu($id);
        $adaDiDatabase=7;
        if($id==$adaDiDatabase){           
            /*$newdata=array(
                'notif'=>'delete_data_tebu_berhasil'
            );
            $this->session->set_flashdata($newdata);
            redirect('schedule/', 'refresh');*/
            
            $notif = 'delete data tebu berhasil';
            echo $notif;
            echo "<br>redirect to schedule";
        }else{
            /*$newdata=array(
                'notif'=>'delete_data_tebu_gagal'
            );
            $this->session->set_flashdata($newdata);
            redirect('info_tebu/', 'refresh');*/
            $notif = 'delete data tebu gagal';
            echo $notif;
            echo "<br>redirect to info tebu";
        }
    }

    ?>