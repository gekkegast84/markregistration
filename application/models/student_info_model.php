<?php
class student_info_model extends CI_Model 
{ 
    public function get_student_info() 
    {
        $userdata = $this->session->userdata('logged_in');
        $query = $this->db->query("SELECT * FROM student_info WHERE username = '" . $userdata['username'] . "';");
        return $query->result();
    }
    
    public function get_class_info()
    {
        $userdata = $this->session->userdata('logged_in');
        $query = $this->db->query("SELECT * FROM class WHERE classname = '" . $_POST['classname'] . "';");
        return $query->result(); 
    }
}

?>
