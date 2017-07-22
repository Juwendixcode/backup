<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class db_schedule extends CI_Model {

    function create_schedule($schedule = '') {
        try{
            $date = new DateTime($schedule['tanggal']);
        } catch (Exception $e) {
            return false;
            exit(1);
        }
        $query = $this->db->query("INSERT INTO `schedule`( `username`, `id_jenistebu`, `tanggal_penanaman`)
        VALUES ('".$this->session->userdata('username')."',".$schedule['id_jenis'].",'".$schedule['tanggal']."')");
        $schedule['mode']='create';
        if($query){
            $query = $this->db->query("SELECT id_schedule FROM `schedule` order by id_schedule DESC limit 1");
            if ($query->num_rows() > 0)
                {
                   foreach ($query->result() as $row)
                   {
                        $schedule['id_schedule']=$row->id_schedule;
                   }
                }
            $result=$this->create_kegiatan($schedule);
            return $result;
        }else{
            return false;
        }
    }

    function create_kegiatan($schedule){
        $tanggal_start='';
        $tanggal_end='';
        $date='';

            if($schedule['mode']=='create'){
                //sesi penanaman
                try{
                    $date = new DateTime($schedule['tanggal']);
                } catch (Exception $e) {
                    return false;
                    exit(1);
                }
                $date->add(new DateInterval('P7D'));
                $tanggal_end=$date->format('Y-m-d');

                $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                VALUES (".$schedule['id_schedule'].",'penanaman','".$schedule['tanggal']."','".$tanggal_end."')";
                $this->db->query($query);

                //sesi pemupukan 1
                $date = new DateTime($schedule['tanggal']);
                $date->add(new DateInterval('P2M'));
                $tanggal_start=$date->format('Y-m-d');
                $date->add(new DateInterval('P7D'));
                $tanggal_end=$date->format('Y-m-d');

                $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                VALUES (".$schedule['id_schedule'].",'pemupukan;pengairan;penggemburan','".$tanggal_start."','".$tanggal_end."')";
                $this->db->query($query);

                //sesi pemupukan 2
                try{
                    $date = new DateTime($schedule['tanggal']);
                } catch (Exception $e) {
                    return false;
                    exit(1);
                }
                $date->add(new DateInterval('P3M'));
                $tanggal_start=$date->format('Y-m-d');
                $date->add(new DateInterval('P1M'));
                $tanggal_end=$date->format('Y-m-d');

                $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                VALUES (".$schedule['id_schedule'].",'pemupukan;pengairan','".$tanggal_start."','".$tanggal_end."')";
                $this->db->query($query);

                //klentek
                try{
                    $date = new DateTime($schedule['tanggal']);
                } catch (Exception $e) {
                    return false;
                    exit(1);
                }
                $date->add(new DateInterval('P5M'));
                $tanggal_start=$date->format('Y-m-d');
                $date->add(new DateInterval('P3M'));
                $tanggal_end=$date->format('Y-m-d');

                $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                VALUES (".$schedule['id_schedule'].",'klentek','".$tanggal_start."','".$tanggal_end."')";
                $this->db->query($query);

                    if($schedule['id_jenis']==1){
                        //sesi pemanenan
                        try{
                            $date = new DateTime($schedule['tanggal']);
                        } catch (Exception $e) {
                            return false;
                            exit(1);
                        }
                        $date->add(new DateInterval('P9M'));
                        $tanggal_start=$date->format('Y-m-d');
                        $date->add(new DateInterval('P1M'));
                        $tanggal_end=$date->format('Y-m-d');

                        $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                        VALUES (".$schedule['id_schedule'].",'panen','".$tanggal_start."','".$tanggal_end."')";
                        $this->db->query($query);
                        $result='';
                        //mengupas daun setiap 1 bulan sekali
                        for($i=1;$i<=9;$i++){
                            try{
                                $date = new DateTime($schedule['tanggal']);
                            } catch (Exception $e) {
                                return false;
                                exit(1);
                            }
                            $date->add(new DateInterval('P'.$i.'M'));
                            $tanggal_start=$date->format('Y-m-d');
                            $date->add(new DateInterval('P7D'));
                            $tanggal_end=$date->format('Y-m-d');

                            $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                            VALUES (".$schedule['id_schedule'].",'kupas daun','".$tanggal_start."','".$tanggal_end."')";
                            $result=$this->db->query($query);
                        }
                        return $result;
                    }elseif($schedule['id_jenis']==2){
                       //sesi pemanenan
                        try{
                            $date = new DateTime($schedule['tanggal']);
                        } catch (Exception $e) {
                            return false;
                            exit(1);
                        }
                        $date->add(new DateInterval('P12M'));
                        $tanggal_start=$date->format('Y-m-d');
                        $date->add(new DateInterval('P1M'));
                        $tanggal_end=$date->format('Y-m-d');

                        $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                        VALUES (".$schedule['id_schedule'].",'panen','".$tanggal_start."','".$tanggal_end."')";
                        $this->db->query($query);
                        $result='';
                        //mengupas daun setiap 1 bulan sekali
                        for($i=1;$i<=11;$i++){
                            try{
                                $date = new DateTime($schedule['tanggal']);
                            } catch (Exception $e) {
                                return false;
                                exit(1);
                            }
                            $date->add(new DateInterval('P'.$i.'M'));
                            $tanggal_start=$date->format('Y-m-d');
                            $date->add(new DateInterval('P7D'));
                            $tanggal_end=$date->format('Y-m-d');

                            $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                            VALUES (".$schedule['id_schedule'].",'kupas daun','".$tanggal_start."','".$tanggal_end."')";
                            $result=$this->db->query($query);
                        }
                        return $result;
                    }elseif($schedule['id_jenis']==3){
                        //sesi pemanenan
                        try{
                            $date = new DateTime($schedule['tanggal']);
                        } catch (Exception $e) {
                            return false;
                            exit(1);
                        }
                        $date->add(new DateInterval('P9M'));
                        $tanggal_start=$date->format('Y-m-d');
                        $date->add(new DateInterval('P1M'));
                        $tanggal_end=$date->format('Y-m-d');

                        $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                        VALUES (".$schedule['id_schedule'].",'panen','".$tanggal_start."','".$tanggal_end."')";
                        $this->db->query($query);
                        $result='';
                        //mengupas daun setiap 1 bulan sekali
                        for($i=1;$i<=9;$i++){
                            try{
                                $date = new DateTime($schedule['tanggal']);
                            } catch (Exception $e) {
                                return false;
                                exit(1);
                            }
                            $date->add(new DateInterval('P'.$i.'M'));
                            $tanggal_start=$date->format('Y-m-d');
                            $date->add(new DateInterval('P7D'));
                            $tanggal_end=$date->format('Y-m-d');

                            $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                            VALUES (".$schedule['id_schedule'].",'kupas daun','".$tanggal_start."','".$tanggal_end."')";
                            $result=$this->db->query($query);
                        }
                        return $result;
                    }elseif($schedule['id_jenis']==4){
                       //sesi pemanenan
                        try{
                            $date = new DateTime($schedule['tanggal']);
                        } catch (Exception $e) {
                            return false;
                            exit(1);
                        }
                        $date->add(new DateInterval('P12M'));
                        $tanggal_start=$date->format('Y-m-d');
                        $date->add(new DateInterval('P1M'));
                        $tanggal_end=$date->format('Y-m-d');

                        $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                        VALUES (".$schedule['id_schedule'].",'panen','".$tanggal_start."','".$tanggal_end."')";
                        $this->db->query($query);
                        $result='';
                        //mengupas daun setiap 1 bulan sekali
                        for($i=1;$i<=11;$i++){
                            $date = new DateTime($schedule['tanggal']);
                            $date->add(new DateInterval('P'.$i.'M'));
                            $tanggal_start=$date->format('Y-m-d');
                            $date->add(new DateInterval('P7D'));
                            $tanggal_end=$date->format('Y-m-d');

                            $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                            VALUES (".$schedule['id_schedule'].",'kupas daun','".$tanggal_start."','".$tanggal_end."')";
                            $result=$this->db->query($query);
                        }
                        return $result;
            }
        }elseif($schedule['mode']=='edit'){

            $query="delete from `kegiatan` where `kegiatan` ='kupas daun' and id_schedule=".$schedule['id_schedule'];

            $this->db->query($query);
            //sesi penanaman
                try{
                    $date = new DateTime($schedule['tanggal']);
                } catch (Exception $e) {
                    return false;
                    exit(1);
                }
                $date->add(new DateInterval('P7D'));
                $tanggal_end=$date->format('Y-m-d');

                $query="UPDATE `kegiatan` set `tanggal_start`='".$schedule['tanggal']."',`tanggal_end`='".$tanggal_end."'
                WHERE  `kegiatan`='penanaman' and id_schedule=".$schedule['id_schedule'];
                $this->db->query($query);

                //sesi pemupukan 1
                try{
                    $date = new DateTime($schedule['tanggal']);
                } catch (Exception $e) {
                    return false;
                    exit(1);
                }
                $date->add(new DateInterval('P2M'));
                $tanggal_start=$date->format('Y-m-d');
                $date->add(new DateInterval('P7D'));
                $tanggal_end=$date->format('Y-m-d');

                $query="UPDATE `kegiatan` set `tanggal_start`='".$tanggal_start."',`tanggal_end`='".$tanggal_end."'
                WHERE  `kegiatan`='pemupukan;pengairan;penggemburan' and id_schedule=".$schedule['id_schedule'];
                $this->db->query($query);

                //sesi pemupukan 2
                try{
                    $date = new DateTime($schedule['tanggal']);
                } catch (Exception $e) {
                    return false;
                    exit(1);
                }
                $date->add(new DateInterval('P3M'));
                $tanggal_start=$date->format('Y-m-d');
                $date->add(new DateInterval('P1M'));
                $tanggal_end=$date->format('Y-m-d');

                $query="UPDATE `kegiatan` set `tanggal_start`='".$tanggal_start."',`tanggal_end`='".$tanggal_end."'
                WHERE  `kegiatan`='pemupukan;pengairan' and id_schedule=".$schedule['id_schedule'];
                $this->db->query($query);

                //klentek
                try{
                    $date = new DateTime($schedule['tanggal']);
                } catch (Exception $e) {
                    return false;
                    exit(1);
                }
                $date->add(new DateInterval('P5M'));
                $tanggal_start=$date->format('Y-m-d');
                $date->add(new DateInterval('P3M'));
                $tanggal_end=$date->format('Y-m-d');

                $query="UPDATE `kegiatan` set `tanggal_start`='".$tanggal_start."',`tanggal_end`='".$tanggal_end."'
                WHERE  `kegiatan`='klentek' and id_schedule=".$schedule['id_schedule'];
                $this->db->query($query);
            if($schedule['id_jenis']==1){
                //sesi pemanenan

                try{
                    $date = new DateTime($schedule['tanggal']);
                } catch (Exception $e) {
                    return false;
                    exit(1);
                }
                $date->add(new DateInterval('P9M'));
                $tanggal_start=$date->format('Y-m-d');
                $date->add(new DateInterval('P1M'));
                $tanggal_end=$date->format('Y-m-d');

                $query="UPDATE `kegiatan` set `tanggal_start`='".$tanggal_start."',`tanggal_end`='".$tanggal_end."'
                WHERE  `kegiatan`='panen' and id_schedule=".$schedule['id_schedule'];
                $this->db->query($query);
                $result='';
                //mengupas daun setiap 1 bulan sekali
                for($i=1;$i<=9;$i++){
                    try{
                        $date = new DateTime($schedule['tanggal']);
                    } catch (Exception $e) {
                        return false;
                        exit(1);
                    }
                    $date->add(new DateInterval('P'.$i.'M'));
                    $tanggal_start=$date->format('Y-m-d');
                    $date->add(new DateInterval('P7D'));
                    $tanggal_end=$date->format('Y-m-d');

                    $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                            VALUES (".$schedule['id_schedule'].",'kupas daun','".$tanggal_start."','".$tanggal_end."')";
                    $result=$this->db->query($query);
                }
                return $result;
            }elseif($schedule['id_jenis']==2){
               //sesi pemanenan
                try{
                    $date = new DateTime($schedule['tanggal']);
                } catch (Exception $e) {
                    return false;
                    exit(1);
                }
                $date->add(new DateInterval('P12M'));
                $tanggal_start=$date->format('Y-m-d');
                $date->add(new DateInterval('P1M'));
                $tanggal_end=$date->format('Y-m-d');

                $query="UPDATE `kegiatan` set `tanggal_start`='".$tanggal_start."',`tanggal_end`='".$tanggal_end."'
                WHERE  `kegiatan`='panen' and id_schedule=".$schedule['id_schedule'];
                $this->db->query($query);
                $result='';
                //mengupas daun setiap 1 bulan sekali
                for($i=1;$i<=11;$i++){
                    try{
                        $date = new DateTime($schedule['tanggal']);
                    } catch (Exception $e) {
                        return false;
                        exit(1);
                    }
                    $date->add(new DateInterval('P'.$i.'M'));
                    $tanggal_start=$date->format('Y-m-d');
                    $date->add(new DateInterval('P7D'));
                    $tanggal_end=$date->format('Y-m-d');

                    $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                            VALUES (".$schedule['id_schedule'].",'kupas daun','".$tanggal_start."','".$tanggal_end."')";
                    $result=$this->db->query($query);
                }
                return $result;
            }elseif($schedule['id_jenis']==3){
                //sesi pemanenan
                try{
                    $date = new DateTime($schedule['tanggal']);
                } catch (Exception $e) {
                    return false;
                    exit(1);
                }
                $date->add(new DateInterval('P9M'));
                $tanggal_start=$date->format('Y-m-d');
                $date->add(new DateInterval('P1M'));
                $tanggal_end=$date->format('Y-m-d');

                $query="UPDATE `kegiatan` set `tanggal_start`='".$tanggal_start."',`tanggal_end`='".$tanggal_end."'
                WHERE  `kegiatan`='panen' and id_schedule=".$schedule['id_schedule'];
                $this->db->query($query);
                $result='';
                //mengupas daun setiap 1 bulan sekali
                for($i=1;$i<=9;$i++){
                    try{
                        $date = new DateTime($schedule['tanggal']);
                    } catch (Exception $e) {
                        return false;
                        exit(1);
                    }
                    $date->add(new DateInterval('P'.$i.'M'));
                    $tanggal_start=$date->format('Y-m-d');
                    $date->add(new DateInterval('P7D'));
                    $tanggal_end=$date->format('Y-m-d');

                    $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                            VALUES (".$schedule['id_schedule'].",'kupas daun','".$tanggal_start."','".$tanggal_end."')";
                    $result=$this->db->query($query);
                }
                return $result;
            }elseif($schedule['id_jenis']==4){
               //sesi pemanenan
                try{
                    $date = new DateTime($schedule['tanggal']);
                } catch (Exception $e) {
                    return false;
                    exit(1);
                }
                $date->add(new DateInterval('P12M'));
                $tanggal_start=$date->format('Y-m-d');
                $date->add(new DateInterval('P1M'));
                $tanggal_end=$date->format('Y-m-d');

                $query="UPDATE `kegiatan` set `tanggal_start`='".$tanggal_start."',`tanggal_end`='".$tanggal_end."'
                WHERE  `kegiatan`='panen' and id_schedule=".$schedule['id_schedule'];
                $this->db->query($query);
                $result='';
                //mengupas daun setiap 1 bulan sekali
                for($i=1;$i<=11;$i++){
                    try{
                        $date = new DateTime($schedule['tanggal']);
                    } catch (Exception $e) {
                        return false;
                        exit(1);
                    }
                    $date->add(new DateInterval('P'.$i.'M'));
                    $tanggal_start=$date->format('Y-m-d');
                    $date->add(new DateInterval('P7D'));
                    $tanggal_end=$date->format('Y-m-d');

                    $query="INSERT INTO `kegiatan`(`id_schedule`, `kegiatan`, `tanggal_start`, `tanggal_end`)
                            VALUES (".$schedule['id_schedule'].",'kupas daun','".$tanggal_start."','".$tanggal_end."')";
                    $result=$this->db->query($query);
                }
                return $result;
            }
        }
    }

    function delete_schedule($id = '') {
        //insert new post
        $query = $this->db->query("DELETE FROM `schedule` WHERE id_schedule=$id");
        return $query;
    }

    function edit_schedule($schedule = '') {
        //insert new post
        try{
            $date = new DateTime($schedule['tanggal']);
        } catch (Exception $e) {
            return false;
            exit(1);
        }
        $query = $this->db->query("UPDATE `schedule` set `tanggal_penanaman`='".$schedule['tanggal']."',`id_jenistebu`=".$schedule['id_jenis']."
            WHERE id_schedule=".$schedule['id_schedule']);
        $schedule['mode']='edit';
        if($query){
            $result=$this->create_kegiatan($schedule);
            return $result;
        }else{
            return false;
        }
    }

    function get_jenis($id_schedule='all') {
      if($id_schedule=='all'){
          $query = $this->db->query("SELECT `id_jenistebu`, `jenis_tebu` FROM `jenis_tebu` WHERE 1");//
          return $query;
      }else {
        $query = $this->db->query("SELECT `id_schedule`,j.id_jenistebu, `jenis_tebu` FROM jenis_tebu j
          join schedule s on j.id_jenistebu=s.id_jenistebu
           WHERE id_schedule=$id_schedule");//
        return $query;
      }
    }

    function get_id_schedule(){
        $query = $this->db->query("SELECT  DISTINCT `id_schedule` FROM `schedule` WHERE `username`='".$this->session->userdata('username')."' ");
        return $query;
    }

    function get_data($id_schedule) {
        $query = $this->db->query("SELECT `username`, avg(`diameter`) rata_diameter, avg(`tinggi`) rata_tinggi, avg(`berat`) rata_berat, MONTHNAME(`tanggal`) bulan FROM `tebu` WHERE `id_schedule`=$id_schedule group by MONTHNAME(`tanggal`) order by `tanggal`");
        return $query;
    }
    function get_target($id_schedule) {
        $query = $this->db->query("SELECT `id_schedule`, `username`, jenis_tebu.id_jenistebu, `jenis_tebu`, `std_tinggi`, `std_berat`, `std_diameter`,`lama_penanaman` FROM `schedule` join jenis_tebu on schedule.id_jenistebu=jenis_tebu.id_jenistebu where `id_schedule`=$id_schedule");
        return $query;
    }

    function get_kegiatan($id_schedule){
        $query = $this->db->query("SELECT `kegiatan`, `tanggal_start`, `tanggal_end` FROM `kegiatan` WHERE `id_schedule`= $id_schedule");
        return $query;
    }

}
?>
