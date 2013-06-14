<?php

Class User_model extends CI_Model {

    function login($username, $password) {
        $this->db->select('username, password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', hash('sha256', $password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function find_role($username) {
        $this->db->select('role_id');
        $this->db->from('give_roles');
        $this->db->where('username', $username);

        $query = $this->db->get();

        //return ($query->num_rows() > 0) ? $query->result() : FALSE;

        if ($query->num_rows() > 0) {
            $returnArray = array();
            foreach ($query->result() as $key) {
                array_push($returnArray, $key->role_id);
            }
            return $returnArray;
        } else {
            return FALSE;
        }
    }

    function getRoleName($permid) {
        $this->db->select('name');
        $this->db->from('roles');
        $this->db->where('id', $permid);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $returnArray = array();
            foreach ($query->result() as $key) {
                array_push($returnArray, $key->name);
            }
            $returnArray();
        } else {
            return FALSE;
        }
    }

    public function find_class($userid) {
        $this->db->select('id');
        $this->db->from('give_class');
        $this->db->where('id', $userid);

        $query = $this->db->get();

        //return ($query->num_rows() > 0) ? $query->result() : FALSE;

        if ($query->num_rows() > 0) {
            $returnArray = array();
            foreach ($query->result() as $key) {
                array_push($returnArray, $key->role_id);
            }
            return $returnArray;
        } else {
            return FALSE;
        }
    }
}
?>

