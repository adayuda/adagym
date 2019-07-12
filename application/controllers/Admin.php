<?php
class Admin extends Ci_Controller{
    function __construct(){
        parrent:__construct();
        $this->load->model('M_admin', 'a');
    }

    function showData(){
        $kd = $this->input->get('kd_gym');
        echo json_encode($this->a->showData($kd));	
    }

    function updateAdmin(){
        $kd = $this->input->get('kd_gym');
        echo json_encode($this->a->updateAdmin($kd));
    }
}
?>