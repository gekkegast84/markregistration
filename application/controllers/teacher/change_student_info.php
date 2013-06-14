<?php
class change_student_info extends CI_Controller 
{

    function __construct() {
        parent::__construct();
        $this->load->model('student_model', '', TRUE);
    }
    
    function index() 
    {
        if ($this->session->userdata('logged_in')) 
        {
            $session_data = $this->session->userdata('logged_in');
            $student = $this->student_model->get_students();
            $data['roles'] = $session_data['roles'];
            foreach ($session_data['roles'] as $role) 
            {
            if ($role['role_id'] == 2 || $role['role_id'] == 3 || $role['role_id'] == 4) 
                {          
                    $data['main_content'] = 'teacher/change_student/show_students_view';
                    $data['username'] = $student;
                }
                else
                {
                    echo"u have no permission on this page!";
                }
            }
        }
        $this->load->view('template', $data);
    }
    public function get_student()
    {
        if (isset($_POST['class']))
        {
            $resultaat = $_POST['class'];
            $data['student'] = $resultaat;
            $data['result'] = $this->student_model->get_results($resultaat);
            $data['main_content'] = 'teacher/change_student/change_student_view';
        }
        else 
        {
            echo"didnt got the post";
        }
        $this->load->view('template', $data);
    }
    public function change_info()
    {
        if (isset($_POST))   
        {
            $data['result'] = $this->student_model->change_results($_POST);  
            $data['main_content'] = 'show_new_student_view';
        }
        else
        {
            echo"didnt got the post";
        }
    }

}
?>