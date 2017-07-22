<?php

class Db_member extends CI_Model {

    function create_member($data_regis = '') {
        $data_return = '';
        $query = $this->db->query("SELECT *FROM user WHERE username ='".$data_regis['username']."'");

        if ($query->num_rows() > 0) {
            if ($query->num_rows() > 0) {
                $newdata = array(
                    'notif' => 'sign_up_same_username'
                );
                $this->session->set_flashdata($newdata);
            }
            return FALSE;
        } else {
                $query = $this->db->query("INSERT INTO `user`(`id_kecamatan`, `username`, `email`, `password`, `no_telp`) 
                VALUES ('".$data_regis['id_kecamatan']."','".$data_regis['username']."','".$data_regis['email']."',
                md5('".$data_regis['password']."'),'".$data_regis['no_telp']."')");
            return true; 
        }
    }
    
    function check_user($login = "") {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM `user` WHERE username='".$login['username']."' and password=md5('".$login['password']."')");
        if ($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
        
    }
    
    function get_kecamatan() {
        $query = $this->db->query("SELECT `id_kecamatan`, `kecamatan` FROM `kecamatan` WHERE 1");
        return $query;
    }
}
?>