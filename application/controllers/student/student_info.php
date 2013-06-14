<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class student_info extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->model('student_info_model');
        $student_info = (array) $this->student_info_model->get_student_info();
        $data['student_info_view'] = array();
        foreach ($student_info as $student) {
            $student = (array) $student;
            array_push($data['student_info_view'], $student);
        }
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['roles'] = $session_data['roles'];
            foreach ($session_data['roles'] as $role) {
                if ($role['role_id'] == 1) {
                    $data['main_content'] = 'student/student_info_view';
                }
                $this->load->view('template', $data);
            }
        } else {
            echo"You have no permission to be on this page.";
            redirect('login', 'refresh');
        }
    }

}
?>

