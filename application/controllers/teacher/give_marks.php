<?php
class give_marks extends CI_Controller 
{

    function __construct() {
        parent::__construct();
        $this->load->model('give_marks_model', '', TRUE);
    }
    
    function index() 
    {
        
        if ($this->session->userdata('logged_in')) 
        {
            $session_data = $this->session->userdata('logged_in');
            $lesson = $this->give_marks_model->get_lesson($session_data['username']);
            $data['roles'] = $session_data['roles'];
            foreach ($session_data['roles'] as $role) 
                {
                    if ($role['role_id'] == 2 || $role['role_id'] == 3 || $role['role_id'] == 4) 
                    {          
                        $data['main_content'] = 'teacher/give_marks/get_lesson_view';
                        $data['lesson'] = $lesson;
                    }
                    else
                    {
                        echo"u have no permission on this page!";
                    }
                }
                $this->load->view('template', $data);
        }
    }
    
    public function get_class()
    {
        var_dump($_POST);
        $this->load->model('give_marks_model');
        if(isset($_POST['vak']))
        {
            $vak = $_POST['vak'];
            $data['classroom'] = $vak;
            $data['classes'] = $this->give_marks_model->get_class($vak);
            $data['main_content'] = 'teacher/give_marks/get_class_view';
        }
        else
        {
            echo "u didnt choose a lesson";
        }
        $this->load->view('template', $data);
    }
    
        public function get_student()
        {
            $this->load->model('give_marks_model');
            if(isset($_POST['class']))
            {
                $class = $_POST['class'];
                $data['student'] = $class;
                $data['studentjes'] = $this->give_marks_model->get_student($class);
                $data['main_content'] = 'teacher/give_marks/get_student_view';
                var_dump($_POST);
            }
            else
            {
                echo"no classroom given";
            }
        $this->load->view('template', $data);
        }
        
        public function get_grade()
        { 
            $this->load->model('give_marks_model');
            if(isset($_POST['class']))
            {
                echo'I found the post';
                $mark = $_POST['class'];
                $data['mark'] = $mark;
                $data['marking'] = $this->give_marks_model->get_marks($mark);
                $data['main_content'] = 'teacher/give_marks/get_grade_view';
            }
            $this->load->view('template', $data);
        }
        
        public function report()
        {    
            
            if(isset($_POST['change']))
            {
                $data['marking'] = $this->give_marks_model->change();
            }
        }
}
?>
