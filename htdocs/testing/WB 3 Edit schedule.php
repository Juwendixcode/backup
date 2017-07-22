<?php
$_GET['jenis']='manis';
$_GET['tanggal']='1995/12/08';
$_GET['count']=0;
$id =1;
edit_schedule($id);

function edit_schedule($id){        
													        $_GET['count']++; //function edit_schedule   
													        $_GET['count']++; //load model db_schedule
													        $_GET['count']++; // if awal
        //$this->load->model('db_schedule');        
        if($_GET['jenis']&&
           $_GET['tanggal']){
   															$_GET['count']++; //shecule array
            $schedule=array(
                    'id_schedule'=>$id,
                    'id_jenis'=>$_GET['jenis'],
                    'tanggal'=>$_GET['tanggal']
                );
            //$result=$this->db_schedule->edit_schedule($schedule);
            $result=1;									$_GET['count']++; //result
            												$_GET['count']++; // if result
            if($result==$id){
    			/*$newdata=array(
                    'notif'=>'edit_schedule_berhasil'
                );
                $this->session->set_flashdata($newdata);
                redirect('schedule/', 'refresh');*/

                $notif = 'edit schedule berhasil';			$_GET['count']++;
                echo $notif;								$_GET['count']++;
                echo "<br>redirect to schedule";			$_GET['count']++;
                redirects();
            }            
            else{											$_GET['count']++; //else
                
                /*$newdata=array(
                    'notif'=>'edit_schedule_gagal'
                );
                $this->session->set_flashdata($newdata);
                redirect('schedule/show_form_schedule/'.$id, 'refresh');*/
                
                $notif = 'edit schedule gagal';				$_GET['count']++;
                echo $notif;								$_GET['count']++;
                echo "<br>redirect to form schedule";		$_GET['count']++;
                redirects();
            }            									$_GET['count']++; //penutup else
        }else{												$_GET['count']++; //else
                /*$newdata=array(
                'notif'=>'edit_schdule_gagal'
	            );
	            $this->session->set_flashdata($newdata);
	            redirect('schedule/show_form_schedule/'.$id, 'refresh');*/
                $notif = 'edit schedule gagal';				$_GET['count']++;
                echo $notif;								$_GET['count']++;
                echo "<br>redirect to form schedule";		$_GET['count']++;
                redirects();
		}													$_GET['count']++; //penutup else
												            $_GET['count']++; //penutup function
}
//ini skrip testing
function redirects(){
    $countnya = $_GET['count'];
    $hasil = $countnya / 20 * 100;
    echo '<br>'.$countnya.' / 20 * 100 = '.$hasil.' %';
    exit();
}
?>