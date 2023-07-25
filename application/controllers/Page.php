<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

 public function __construct(){
        parent::__construct();
         if($this->session->userdata('login')==""){
                   redirect(base_url('/login'));

         }
    }


	public function index(){
	    
	    //$this->data['branch_list']=$this->db->get('branch')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/page');
		$this->load->view('admin/footer');
	}
	
	public function page_list(){
	    
	    $data['page_list']=$this->db->get('page')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/page_list',$data);
		$this->load->view('admin/footer');
	} 

	public function page_save(){
	   
	    $data = $this->input->post();
	    if($_FILES["image"]['name'] !=""){
    	    $config['upload_path']   = './uploads/admin/page';
            $config['allowed_types'] = 'gif|jpg|png|webp'; 
            $new_name = date('yymmdd').time() . '-' . $_FILES["image"]['name'];
            $path = $_FILES['image']['name'];
            $new_name = date('yymmdd').time().".".pathinfo($path, PATHINFO_EXTENSION);
            $config['file_name'] = $new_name; 
            $config['encrypt_name'] = false;
            
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('image')){
                $error = array('error' => $this->upload->display_errors());
                
            }else{
                $data['image'] = $this->upload->data()['file_name'];
                
            }
	    }
      
        
        $this->db->insert('page',$data);
        $this->session->set_flashdata('message', 'Successfully insert');
        redirect(base_url().'page/page_list');
      
        

	}
	public function edit_page($id){
	    $this->db->where('id',$id);
	    $data['page']=$this->db->get('page')->row();
	    $this->load->view('admin/header');
		$this->load->view('admin/page_edit',$data);
		$this->load->view('admin/footer');

	}
	public function page_update(){
	    $id =$this->input->post('id');
        $data = $this->input->post();
        unset($data['id']);
        //echo $_FILES["image"]['name'];
        if($_FILES["image"]['name'] !=""){
    	    $config['upload_path']   = './uploads/admin/page';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|webp'; 
            $new_name = date('yymmdd').time() . '-' . $_FILES["image"]['name'];
            $path = $_FILES['image']['name'];
            $new_name = date('yymmdd').time().".".pathinfo($path, PATHINFO_EXTENSION);
            $config['file_name'] = $new_name; 
            $config['encrypt_name'] = false;
            
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('image')){
                $error = array('error' => $this->upload->display_errors());
           //  echo "<pre>"; print_r($error); echo "</pre>";
           //  exit;
                
            }else{
                //echo "<pre>"; print_r($this->upload->data()); echo "</pre>";
                $data['image'] = $this->upload->data()['file_name'];
                
            }
	    }
	   // echo "<pre>"; print_r($data); echo "</pre>";
	   // exit;
        
        $this->db->where('id',$id);
        $this->db->update('page',$data);
        $this->session->set_flashdata('message', 'page Updated Successfully');
        redirect(base_url().'page/page_list');
	}
	
	   public function what_our(){
	       $this->load->view('admin/header');
		$this->load->view('admin/what_our');
		$this->load->view('admin/footer');
	   }
		public function what_our_list(){
	    
	    $data['page_list']=$this->db->get('what_our')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/what_our_list',$data);
		$this->load->view('admin/footer');
	} 
	
	public function what_our_save(){
	    
	    $data = $this->input->post();
	   // if($_FILES["image"]['name'] !=""){
    // 	    $config['upload_path']   = './uploads/admin/page';
    //         $config['allowed_types'] = 'gif|jpg|png'; 
    //         $new_name = date('yymmdd').time() . '-' . $_FILES["image"]['name'];
    //         $path = $_FILES['image']['name'];
    //         $new_name = date('yymmdd').time().".".pathinfo($path, PATHINFO_EXTENSION);
    //         $config['file_name'] = $new_name; 
    //         $config['encrypt_name'] = false;
            
    //         $this->load->library('upload', $config);
    //         if ( ! $this->upload->do_upload('image')){
    //             $error = array('error' => $this->upload->display_errors());
                
    //         }else{
    //             $data['image'] = $this->upload->data()['file_name'];
                
    //         }
	   // }
      
        
        $this->db->insert('what_our',$data);
        $this->session->set_flashdata('message', 'Successfully insert');
        redirect(base_url().'page/what_our_list');
	}
	
	public function what_our_edit($id){
	    $this->db->where('id',$id);
	    $data['page']=$this->db->get('what_our')->row();
	    $this->load->view('admin/header');
		$this->load->view('admin/what_our_edit',$data);
		$this->load->view('admin/footer');
	}
	
		public function what_our_update(){
	    $id =$this->input->post('id');
        $data = $this->input->post();
        unset($data['id']);
        
        $this->db->where('id',$id);
        $this->db->update('what_our',$data);
        $this->session->set_flashdata('message', 'page Updated Successfully');
        redirect(base_url().'page/what_our_list');
	}
	

}?>