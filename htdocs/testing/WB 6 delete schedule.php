<?php

$id=1;
$_GET['count']=0;
delete_schedule($id);

function delete_schedule($id){
																	$_GET['count']++; //function delete_schedule
        //$this->load->model('db_schedule');
																	$_GET['count']++; //load model
        //$result=$this->db_schedule->delete_schedule($id);

		$database=2;												$_GET['count']++; //result
															        $_GET['count']++; //if result
        if($database==$id){
        															
        	/*		
        	$newdata=array(
                'notif'=>'delete_schedule_berhasil'
            );
            $this->session->set_flashdata($newdata);
            redirect('schedule/', 'refresh');												            
            */																	
            $notif = 'delete schedule berhasil';					$_GET['count']++; 
                echo $notif;										$_GET['count']++;
                echo "<br>redirect to schedule";					$_GET['count']++;                 
            redirect();
        }else{        	
        															$_GET['count']++; //else
            /*
            $newdata=array(
                'notif'=>'delete_schedule_gagal'
            );
            $this->session->set_flashdata($newdata);
            redirect('schedule/', 'refresh');*/

            $notif = 'delete schedule gagal';						$_GET['count']++;
                echo $notif;										$_GET['count']++;
                echo "<br>redirect to schedule";					$_GET['count']++;  
            redirect();
        }															$_GET['count']++; //penutup else
        															$_GET['count']++; //penutup function
    }
    
    function redirect(){
    $countnya = $_GET['count'];
    $hasil = $countnya / 13 * 100;
    echo '<br>'.$countnya.' / 13 * 100 = '.$hasil.' %';
    exit();
    }
?>