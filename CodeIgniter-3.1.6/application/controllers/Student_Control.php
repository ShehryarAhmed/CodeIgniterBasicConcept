<?php 
class Student_Control extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->databse();
    }
}

?>