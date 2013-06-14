<?php
class give_marks_model extends CI_Model 
{ 
    public function get_lesson($iets) 
    {
        $query = $this->db->query("SELECT lesson FROM lesson WHERE teacher = '" . $iets ."'");
        return $query->result();
    }
    
    public function get_class($vakje) 
    {
        $query = $this->db->query("SELECT classroom FROM lesson WHERE lesson = '" . $vakje ."'");
        return $query->result();
    }
    
    public function get_student($klas)
    {
        $query = $this->db->query("SELECT username FROM student_info WHERE classname = '" . $klas ."'");
        return $query->result();  
    }
    
    public function get_marks($usert)
    {
        $query = $this->db->query("SELECT * FROM grade WHERE student_username = '" . $usert . "'");
        return $query->result();  
    }
    
    public function change()
    {               
        $this->db->where('id', $id);
        $this->db->update('grade', $data);      
    }
}
?>