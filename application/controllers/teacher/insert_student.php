<?php

class insert_student extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['main_content'] = 'teacher/insert_student/insert_file';
        $this->load->view('template', $data);
    }

    function get_csv() {
        $this->load->model('insert_users_model');
        if ($_FILES['file']['type'] == 'application/vnd.ms-excel' AND $_FILES['file']['error'] == 0) {
            if (($handle = fopen($_FILES['file']['tmp_name'], 'r')) !== FALSE) {
                $row = 1;
                while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                    print_r($data); exit();
                    $data_array = explode(";", $data[0]);
                    $data_array = array('username' => $data_array[0],
                        'surname' => $data_array[1],
                        'initials' => $data_array[2],
                        'nickname' => $data_array[3],
                        'prefix' => $data_array[4],
                        'dob' => $data_array[5],
                        'picture' => $data_array[6],
                        'classname' => $data_array[7],
                        'cohort' => $data_array[8],
                        'city' => $data_array[9],
                        'postcode' => $data_array[10],
                        'street' => $data_array[11],
                        'phone' => $data_array[12],
                        'mobilephone' => $data_array[13],
                        'sex' => $data_array[14],
                        'nationaliteit' => $data_array[15]);
                    
                    if ($row > 1) {
                        echo"if2";print_r($data_array);
                        $this->insert_users_model->insert_student($data_array);
                    }
                    print_r($data_array);
                    $row++;
                }
                fclose($handle);
            } else {
                echo"csv file not found";
            }
        }
    }

}

?>
