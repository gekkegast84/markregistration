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
        $this->load->model('student_grade_model');
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            echo "<b>username: </b>" . $session_data['username'];
            date_default_timezone_set('Europe/Amsterdam');
            $date = date('Y/m/d H:i:s');
            echo "<b></br>Current time: </b>" . $date;
            echo'<br/><b>this report is official.</b>';
            if (isset($_POST['vak'])) {
                $period = $_POST['vak'];
                $data['periode'] = $period;
                $data['periodes'] = $this->student_grade_model->insert_user($period);
                $data['main_content'] = 'student/student_grade_view';
            } else {
                echo "u didnt choose a lesson";
            }
            $this->load->view('template', $data);
        }
    }

}
?>

