<?php
$_POST['username'] = 'amin';
$_POST['email'] = 'amin@gmail.com';
$_POST['no_telp'] = '90812948';
$_POST['password'] = null;

sign_up();

function sign_up() {
        //$this->load->model('db_member');         
        if (!isset($_POST['username']) ||
                !isset($_POST['email']) ||
                !isset($_POST['no_telp']) ||
                !isset($_POST['password']) ||
                preg_match('(\'|\")', $_POST['username']) ||
                !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
        ) {
         /*
            $newdata = array(
                'notif' => 'form_sign_up_salah'
            );
            $this->session->set_flashdata($newdata);
            redirect('authtentification/show_regis', 'refresh');*/
            $notif = 'format form salah';
            echo $notif;
            echo "<br>redirect to form regis";
            exit();
        }
        $data_regis = array(
            'username' => $_POST['username'],
            'id_kecamatan' => 'kec 1',
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'no_telp' => $_POST['no_telp']
        );        
        }        
        //$check = $this->db_member->check_user($data_regis);
        $check = true;
        if ($check) {
            /*            $newdata = array(
                'notif' => 'success_sign_up'
            );
            $this->session->set_flashdata($newdata);
            redirect('authtentification', 'refresh');*/
            $notif = 'berhasil sign up';
            echo $notif;
            echo "<br>redirect to form login";
            exit();
        } else {
            /*$newdata = array(
                'notif' =>'fail_sign_up'
                );
            $this->session->set_flashdata($newdata);
            redirect('authtentification/show_regis', 'refresh');*/
            $notif = 'gagal sign up';
            echo $notif;
            echo "<br>redirect to form regis";
            exit();
    }

?>