<?php
$id = 1;
$_GET['schedule']='manis';
$_GET['tinggi']='20';
$_GET['berat']='1995';
$_GET['diameter']='21';
$_GET['count']=0;

edit_data_tebu($id);

function edit_data_tebu($id){
								        				$_GET['count']++; //function edit_data_tebu       
								        				$_GET['count']++; //$this->load->model('db_tebu');
        //$this->load->model('db_tebu');
        												$_GET['count']++; //if awal        
        if($_GET['schedule']&&
           $_GET['tinggi']&&
           $_GET['berat']&&
           $_GET['diameter']){
                										$_GET['count']++; //data_tebu array
                $data_tebu=array(
                    'id'=>$id,
                    'id_schedule'=>$_GET['schedule'],
                    'tinggi'=>$_GET['tinggi'],
                    'berat'=>$_GET['berat'],
                    'diameter'=>$_GET['diameter']
                );
            //$result=$this->db_tebu->edit_data_tebu($data_tebu);
            $result=true; 								$_GET['count']++; //resultnya
            											$_GET['count']++; //if result
            if($result){                
                
            	/*$newdata=array(
                    'notif'=>'edit_data_tebu_berhasil'
                );
                $this->session->set_flashdata($newdata);
                redirect('schedule/', 'refresh');*/

                $notif = 'edit data berhasil';			$_GET['count']++;
                echo $notif;							$_GET['count']++;
                echo "<br>redirect to schedule";		$_GET['count']++;                
                redirect();
            }else{
                										$_GET['count']++; //else
		        /*$newdata=array(
                    'notif'=>'edit_data_tebu_gagal'
                );
                $this->session->set_flashdata($newdata);
                redirect('info_tebu/show_form_data_tebu/'.$id, 'refresh');*/
                $notif = 'edit data gagal';				$_GET['count']++;
                echo $notif;							$_GET['count']++;
                echo "<br>redirect to form data tebu";	$_GET['count']++;
                redirect();
            }											$_GET['count']++; //penutup else
        }else{
                										$_GET['count']++; // pembuka else
				/*$newdata=array(
		            'notif'=>'form_edit_salah'
		        );
		        $this->session->set_flashdata($newdata);
		        redirect('info_tebu/show_form_data_tebu/'.$id, 'refresh');*/                										
                $notif = 'form edit salah';				$_GET['count']++;
                echo $notif;							$_GET['count']++;
                echo "<br>redirect to form data tebu";	$_GET['count']++;
                redirect();
        }												$_GET['count']++; //penutup else
    }													$_GET['count']++; //penutup function
 
    function redirect(){
    $countnya = $_GET['count'];
    $hasil = $countnya / 20 * 100;
    echo '<br>'.$hasil.'%';
    exit();
    }

?>    