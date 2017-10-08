<?php 
class Test extends CI_Controller{

     public function index(){
        echo "Hello Test php";
        $this->load->view('test');
    }
      
}
?>