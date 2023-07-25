<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {

 public function __construct(){
        parent::__construct();
         if($this->session->userdata('login')==""){
                   redirect(base_url('/login'));

         }
    }



	public function index(){
	    
	    $this->data['branch_list']=$this->db->get('branch')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/branch_list',$this->data);
		$this->load->view('admin/footer');
	}
	
	public function add(){
	    
		$this->load->view('admin/header');
		$this->load->view('admin/branch_add');
		$this->load->view('admin/footer');

	}
	public function post_save(){
	    
	     if($_FILES['image_uplode']['name']!=""){
    			  $config['upload_path']   = './uploads/admin/branch';
    		      $config['allowed_types'] = 'gif|jpg|png|webp'; 
    		      $new_name = date('yymmdd').time() . '-' . $_FILES["image_uplode"]['name'];
    		      $path = $_FILES['image_uplode']['name'];
    		      $new_name = date('yymmdd').time().".".pathinfo($path, PATHINFO_EXTENSION);
    		      $config['file_name'] = $new_name; 
    		      $config['encrypt_name'] = false;
    		      

    		      $this->load->library('upload', $config);
    		      $this->upload->do_upload('image_uplode');
    		}else{
    			$new_name ='2222020203031643888288.jpg';
    		}
	    
	    
	    $data=array(
	        'image_uplode'=>$new_name,
	        'google_map_url'=>$this->input->post('google_map_url'),

	        'city'=>$this->input->post('city'),
	        'lat'=>$this->input->post('lat'),
	        'long'=>$this->input->post('long'),
	        'name'=>$this->input->post('name'),
	        'seo_title'=>$this->input->post('seo_title'),
	        'seo_keyword'=>$this->input->post('seo_keyword'),
	        'seo_description'=>$this->input->post('seo_description'),
	        'url'=>$this->input->post('url'),
	        'page_title'=>$this->input->post('page_title'),
	        'header'=>$this->input->post('header'),
	        'footer'=>$this->input->post('footer'),
	        'status'=>$this->input->post('status'),
	        'description'=>$this->input->post('description'),
	        'address'=>$this->input->post('address'),
	        'mobile'=>$this->input->post('mobile'),

	        
	        );
	        
	        $this->db->insert('branch',$data);
	        
	        $this->session->set_flashdata('message', 'Data Save  Successfully');
            redirect('branch/index');

	}
	public function edit_branch($id){
	    $this->db->where('id',$id);
	    $this->data['branch_edit']=$this->db->get('branch')->row();
	    $this->load->view('admin/header');
		$this->load->view('admin/branch_edit',$this->data);
		$this->load->view('admin/footer');

	}
	public function post_update($id){
	    
	    
	     if($_FILES['image_uplode']['name']!=""){
    			  $config['upload_path']   = './uploads/admin/branch';
    		      $config['allowed_types'] = 'gif|jpg|png|webp'; 
    		      $new_name = date('yymmdd').time() . '-' . $_FILES["image_uplode"]['name'];
    		      $path = $_FILES['image_uplode']['name'];
    		      $new_name = date('yymmdd').time().".".pathinfo($path, PATHINFO_EXTENSION);
    		      $config['file_name'] = $new_name; 
    		      $config['encrypt_name'] = false;
    		      
    		     // print_r($config['file_name']);exit;
    		      
    		      $this->load->library('upload', $config);
    		      $this->upload->do_upload('image_uplode');
    		}else{
    			$new_name =$this->input->post('image');
    		}
	    
	    
	    
	     $data=array(
	         
	        'image_uplode'=>$new_name,
            'google_map_url'=>$this->input->post('google_map_url'),
	        'city'=>$this->input->post('city'),
	        'lat'=>$this->input->post('lat'),
	        'long'=>$this->input->post('long'),
	        'name'=>$this->input->post('name'),
	        'seo_title'=>$this->input->post('seo_title'),
	        'seo_keyword'=>$this->input->post('seo_keyword'),
	        'seo_description'=>$this->input->post('seo_description'),
	        'url'=>$this->input->post('url'),
	        'page_title'=>$this->input->post('page_title'),
	        'header'=>$this->input->post('header'),
	        'footer'=>$this->input->post('footer'),
	        'status'=>$this->input->post('status'),
	        'description'=>$this->input->post('description'),
	        'address'=>$this->input->post('address'),
	        'mobile'=>$this->input->post('mobile'),
	        
	        );
	        
	        $this->db->where('id',$id);
	        $this->db->update('branch',$data);
	        $this->session->set_flashdata('message', 'Data Update  Successfully');
            redirect('branch/index');
	}
}?>