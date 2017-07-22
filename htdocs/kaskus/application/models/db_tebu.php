<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Db_tebu extends CI_Model {
    
    function insert_data_tebu($data_tebu = '') {
        $this->load->database();
        //insert new post
        $query = $this->db->query("INSERT INTO `tebu`(`username`, `id_schedule`, `diameter`, `tinggi`, `berat`, `tanggal`) 
            VALUES ('".$this->session->userdata('username')."',".$data_tebu['id_schedule'].",".$data_tebu['diameter'].",".$data_tebu['tinggi'].",".$data_tebu['berat'].",'".$data_tebu['tanggal']."')");
        return $query;
    }
    
    function delete_data_tebu($id = '') {
        //insert new post
        $query = $this->db->query("DELETE FROM `tebu` WHERE id_tebu=$id");
        return $query;
    }
    
    
    function edit_data_tebu($data_tebu = '') {
        //insert new post
        $query = $this->db->query("UPDATE `tebu` 
        SET `id_schedule`=".$data_tebu['id_schedule'].",
        `diameter`=".$data_tebu['diameter'].",
        `tinggi`=".$data_tebu['tinggi'].",
        `berat`=".$data_tebu['berat']." 
        WHERE `id_tebu`=".$data_tebu['id']);
        return $query;
    }
    
    function get_tebu() {
        //insert new post
        $query = $this->db->query("SELECT `id_tebu`,`id_schedule`, `diameter`, `tinggi`, `berat`, `tanggal` FROM `tebu` 
        WHERE username='".$this->session->userdata('username')."'");//
        return $query;
    }
    
    function get_schedule(){
        $this->load->database();
        $query = $this->db->query("SELECT `id_schedule` FROM `schedule` WHERE `username`='".$this->session->userdata('username')."'");
        return $query;
    }
        
//query get avg tebu / month    SELECT `id_tebu`, `username`, `id_schedule`, avg(`diameter`), avg(`tinggi`), avg(`berat`), month(`tanggal`) FROM `tebu` WHERE 1 group by month(`tanggal`)
}
?>