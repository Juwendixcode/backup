<?php
    $_GET['jenis']=Null;
    $_GET['tanggal']='1995/12/08';
    $_GET['count']=0;
    create_schedule(0);

    function create_schedule(){
        //$this->load->model('db_schedule');
													        $_GET['count']++; //function create schedule
													        $_GET['count']++; //load model db_schedule
													        $_GET['count']++; //if awal
        if($_GET['jenis']&&
           $_GET['tanggal'])
        {
                $schedule=array(
                    'id_jenis'=>$_GET['jenis'],
                    'tanggal'=>$_GET['tanggal']
                );						
															$_GET['count']++; //schedule array
            
            //$result=$this->db_schedule->create_schedule($schedule);    					
            
            $result=FALSE;									$_GET['count']++; //result
            												$_GET['count']++; //if result
            if($result){
                /*$newdata=array(
                    'notif'=>'create_schedule_berhasil'
                );
                $this->session->set_flashdata($newdata);
                redirect('schedule/', 'refresh');*/
                
                $notif = 'create schedule berhasil';		$_GET['count']++;
                echo $notif;								$_GET['count']++;
                echo "<br>redirect to schedule";			$_GET['count']++;  
                redirect();
            }else{
                											$_GET['count']++; //else
                /*$newdata=array(
                    'notif'=>'create_schedule_gagal'
                );
                $this->session->set_flashdata($newdata);
                redirect('schedule/show_form_schedule/', 'refresh');*/
                
                $notif = 'create schedule gagal';			$_GET['count']++;
                echo $notif;								$_GET['count']++;
                echo "<br>redirect to form schedule";		$_GET['count']++;    
                redirect();
            }												$_GET['count']++; //penutup else
        }else{
            												$_GET['count']++; //else
            /*$newdata=array(
                'notif'=>'form_input_salah'
            );
            $this->session->set_flashdata($newdata);
            redirect('schedule/show_form_schedule/', 'refresh');*/
            $notif = 'create schedule gagal';				$_GET['count']++;
                echo $notif;								$_GET['count']++;
                echo "<br>redirect to form schedule";		$_GET['count']++;    
                redirect();
          }													$_GET['count']++; //penutup else
    }														$_GET['count']++; //penutup function
     function redirect(){
    $countnya = $_GET['count'];
    $hasil = $countnya / 20 * 100;
    echo '<br>'.$hasil.'%';
    exit();
    }
?>
            