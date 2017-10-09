<?php 
class Student_Control extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    function hello(){
        echo "Hello CODe";
    }
    function index(){
        $query = $this->db->get("student"); 
        $data['records'] = $query->result(); 
           
        $this->load->helper('url'); 
        $this->load->view('Student_view',$data); 
    }
    public function add_student_view() { 
        $this->load->helper('form'); 
        $this->load->view('Student_add'); 
     } 
     public function add_student() { 
        $this->load->model('Student_model');
           
        $data = array( 
           'id' => $this->input->post('roll_no'), 
           'name' => $this->input->post('name') 
        ); 
        		
        $this->Student_model->insert($data); 
              $query = $this->db->get("student"); 
              $data['records'] = $query->result(); 
              $this->load->view('Student_view',$data); 
        
    }
    public function update_student_view() { 
        $this->load->helper('form'); 
        $roll_no = $this->uri->segment('3'); 
        $query = $this->db->get_where("student",array("roll_no"=>$id));
        $data['records'] = $query->result(); 
        $data['old_roll_no'] = $roll_no; 
        $this->load->view('Student_edit',$data); 
     }

     public function update_student(){
        $this->load->model('Student_model');
        $data = array(
        'id' => $this->input->post('roll_no'),
        'name' => $this->input->post('name')
        );
        $old_roll_no = $this->input->post('old_roll_no');
        $this->Student_model->update($data,$old_roll_no);
        $query = $this->db->get("student");
        $data['records'] = $query->result();
        $this->load->view('Student_view',$data);
        }

        function delete(){
            $this->load->model('Student_model');
            $roll_no =  $this->input->post('roll_no');
            $this->Student_model->delete($roll_no);
            $query = $this->db->get("student");
            $data['records'] = $query->result();
            $this->load->view('Student_view',$data);
        }
 
}
?>