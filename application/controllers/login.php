<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['main_content'] = 'login_view';
        
        $this->load->helper(array('form'));
        $this->load->view('template', $data);
    }

}