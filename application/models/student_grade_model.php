<?php
class student_grade_model extends CI_Model 
{ 
    public function insert_user($thing) 
    {
        $userdata = $this->session->userdata('logged_in');
        $query = $this->db->query("SELECT * FROM grade WHERE student_username = '" . $userdata['username'] . "' 
                                                       AND period = '" . $thing . "'
                                                       AND `public` = '1'");
        return $query->result();
    }
}
?>
