<?php 
class Test extends CI_Controller{

     public function index(){
        echo "Hello Test php";
        $this->load->view('test');
    echo "Model";
   $this->load->model('Model_class');

   $data = array('name'=>'Shehryar');
   
   $this->db->insert("student",$data); 
}
      
}
?>