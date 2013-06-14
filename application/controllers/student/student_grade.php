<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class student_grade extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['roles'] = $session_data['roles'];
            foreach ($session_data['roles'] as $role) {
                if ($role['role_id'] == 1) {
                    $data['main_content'] = 'student/student_period_view';
                }
                $this->load->view('template', $data);
            }
        } else {
            echo"You have no permission to be on this page.";
            redirect('login', 'refresh');
        }
    }

    function show_grades() {
        var_dump($_POST);
        $this->load->model('student_grade_model');
        if (isset($_POST['vak'])) {

            $period = $_POST['vak'];
            $data['periode'] = $period;
            $data['periodes'] = $this->student_grade_model->get_grade_info($period);
            $data['main_content'] = 'student/student_grade_view';
            
            if ($period['grade'] <= 5.5) {
                echo"<div class='badmark'>";
                echo"</div>";
            } else if ($period['grade'] > 5.5) {
                echo"<div class='goodmark'>";
                echo"</div>";
            } else if ($period['grade'] >= 8) {
                echo"<div class='greatmark'>";
                echo"</div>";
            }
        } else {
            echo "u didnt choose a lesson";
        }
        $this->load->view('template', $data);
    }

}
?>

