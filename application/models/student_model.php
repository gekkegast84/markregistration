<?php

class student_model extends CI_Model {

    public function get_students() {
        $query = $this->db->query("SELECT username FROM student_info");
        return $query->result();
    }

    public function get_results($user) {
        $query = $this->db->query("SELECT * FROM student_info WHERE username = '" . $user . "'");
        return $query->result();
    }

    public function change_results($student) {
        print_r($student['username']);
        $this->db->where('username', $student['username']);
        $this->db->update('student_info', $student);
    }

}

?>