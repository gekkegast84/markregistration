<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class view_marks extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model', '', TRUE);
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            foreach ($session_data['roles'] as $role) {
                if ($role['role_name'] == 1) {
                    $data['main_content'] = 'student/student_mark_view';
                    $this->user_model->getmarks();
                }
                if ($role['role_name'] == 2) {
                    $data['main_content'] = 'teacher/teacher_mark_view';
                }
            }
            foreach ($this->user_model->getMarks() as $key => $value) {
                $data[$key] = $value;
            }
            $this->load->view('template', $data);
        } else {
            redirect('login', 'refresh');
        }
    }

}

?>
