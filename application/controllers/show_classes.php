<?php

class show_classes extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('student_info_model', '', TRUE);
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['roles'] = $session_data['roles'];
            foreach ($session_data['roles'] as $role) {
                if ($role['role_id'] == 1) {
                    $data['classes'] = $this->student_info_model->get_class_info();
                    $data['main_content'] = 'student/show_class_view';
                }
                if ($role['role_id'] != 1) {
                    $data['main_content'] = 'teacher/show_class/get_class_view';
                }
                $this->load->view('template', $data);
            }
        } else {
            echo"You have no permission to be on this page.";
            redirect('login', 'refresh');
        }
    }

    function show() {
        $this->load->model('student_info_model');
        if(isset($_POST['classname']))
        {
            $classname = $_POST['classname'];
            $data['classinfo'] = $this->student_info_model->get_class_info($classname);
            $data['main_content'] = 'teacher/show_class/show_class_view';
        }
        else
        {
            echo"Didnt get it!";
        }
        $this->load->view('template', $data);
    }
}
?>
