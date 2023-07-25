<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

 public function __construct(){
        parent::__construct();
         if($this->session->userdata('login')==""){
                   redirect(base_url('/login'));

         }
    }


	public function index(){
	    
	    //$this->data['branch_list']=$this->db->get('branch')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/blog');
		$this->load->view('admin/footer');
	}
	
	public function blog_list(){
	    
	    $data['blog_list']=$this->db->get('blog')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/blog_list',$data);
		$this->load->view('admin/footer');
	} 

	public function blog_save(){
	   
	    $data = $this->input->post();
	    if($_FILES["image"]['name'] !=""){
    	    $config['upload_path']   = './uploads/admin/blog';
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
      
        
        $this->db->insert('blog',$data);
        $this->session->set_flashdata('message', 'Successfully insert');
        redirect(base_url().'blog/blog_list');
      
        

	}
	public function edit_blog($id){
	    $this->db->where('id',$id);
	    $data['blog']=$this->db->get('blog')->row();
	    $this->load->view('admin/header');
		$this->load->view('admin/blog_edit',$data);
		$this->load->view('admin/footer');

	}
	public function blog_update(){
	    $id =$this->input->post('id');
        $data = $this->input->post();
        unset($data['id']);
        //echo $_FILES["image"]['name'];
        if($_FILES["image"]['name'] !=""){
    	    $config['upload_path']   = './uploads/admin/blog';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|webp'; 
            $new_name = date('yymmdd').time() . '-' . $_FILES["image"]['name'];
            $path = $_FILES['image']['name'];
            $new_name = date('yymmdd').time().".".pathinfo($path, PATHINFO_EXTENSION);
            $config['file_name'] = $new_name; 
            $config['encrypt_name'] = false;
            
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('image')){
                $error = array('error' => $this->upload->display_errors());
                //echo "<pre>"; print_r($error); echo "</pre>";
                
            }else{
                //echo "<pre>"; print_r($this->upload->data()); echo "</pre>";
                $data['image'] = $this->upload->data()['file_name'];
                
            }
	    }
	   // echo "<pre>"; print_r($data); echo "</pre>";
	   // exit;
        
        $this->db->where('id',$id);
        $this->db->update('blog',$data);
        $this->session->set_flashdata('message', 'Blog Updated Successfully');
        redirect(base_url().'blog/blog_list');
	}
	

}?>