<?php
class insert_users_model extends CI_Model 
{ 
    public function insert_student($thing) 
    {
        print_r($thing);
        echo"insert";
       /* $userdata = $this->session->userdata('logged_in');
        $query = $this->db->query("SELECT * FROM grade WHERE student_username = '" . $userdata['username'] . "' 
                                                       AND period = '" . $thing . "'
                                                       AND `public` = '1'");
        return $query->result();*/
    }
}
?>
