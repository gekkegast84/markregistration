<?php
class student_grade_model extends CI_Model 
{ 
    public function get_grade_info($thing) 
    {
        $userdata = $this->session->userdata('logged_in');
        $query = $this->db->query("SELECT * FROM grade WHERE student_username = '" . $userdata['username'] . "' 
                                                       AND period = '" . $thing . "'");
        return $query->result();
    }
}
?>