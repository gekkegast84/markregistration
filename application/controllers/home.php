<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model', '', TRUE);
    }

    function index() {
        if ($this->session->userdata('logged_in')) {

            $session_data = $this->session->userdata('logged_in');
            $data['roles'] = $session_data['roles'];
            foreach ($session_data['roles'] as $role) {
                if ($role['role_id'] == 1) {
                    $data['main_content'] = 'student/leerling_view';
                } else if ($role['role_id'] == 2) {
                    $data['main_content'] = 'teacher/leraar_view';
                }
                  else if($role['role_id'] == 3) {
                    $data['main_content'] = 'teacher/leraar_view';
                  }
                  else if($role['role_id'] == 4) {
                    $data['main_content'] = 'teacher/leraar_view';
                  }
            }
            $this->load->view('template', $data);
        } else {
            echo"You have no permission to be on this page.";
            redirect('login', 'refresh');
        }
    }

    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }

}
?>

