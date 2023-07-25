<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

       public function __construct(){
        parent::__construct();
         if($this->session->userdata('login')==""){
                   redirect(base_url('/login'));

         }
    }



	public function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/common_setting');
		$this->load->view('admin/footer');
	}
	public function commonSetting(){
		$this->load->view('admin/header');
		$this->load->view('admin/common_setting');
		$this->load->view('admin/footer');

	}

  public function logout(){
      
      $this->session->unset_userdata('login');
      $this->session->sess_destroy();
      redirect(base_url('/login'));
  }


	public function addCommonSetting(){
	    
	        if($_FILES['logo']['name']!=""){
    			  $config['upload_path']   = './uploads/admin';
    		      $config['allowed_types'] = 'gif|jpg|png|webp'; 
    		      $new_name = date('yymmdd').time() . '-' . $_FILES["logo"]['name'];
    		      $path = $_FILES['logo']['name'];
    		      $new_name = date('yymmdd').time().".".pathinfo($path, PATHINFO_EXTENSION);
    		      $config['file_name'] = $new_name; 
    		      $config['encrypt_name'] = false;
    		      
    		      
    		      $this->load->library('upload', $config);
    		      $this->upload->do_upload('logo');
    		}else{
    			$new_name = '2222010127271643290212.png';
    		}
    		/*if(is_array($this->input->post('mobile_no'))){
          	$mobile = implode(",", array_filter($this->input->post('mobile_no')));
          }else{
          	$mobile = $this->input->post('mobile_no');
          }
    
          if(is_array($this->input->post('email'))){
          	$email = implode(",",array_filter($this->input->post('email')));
          }else{
          	$email = $this->input->post('email');
          }*/
    		$mobile = $this->input->post('mobile_no');
    		$email = $this->input->post('email');
    		$title = $this->input->post('title');
    		$keyword = $this->input->post('keyword');
    		$description = $this->input->post('description');
    		
    		$header = $this->input->post('header');
    		$footer = $this->input->post('footer');
    		$header_menu = $this->input->post('header_menu');
    		$footer_menu = $this->input->post('footer_menu');
    		
    	    $youtube1 = $this->input->post('youtube1');
    	    $youtube2 = $this->input->post('youtube2');
    		
    		$data = array(
    		    'logo' => $new_name, 
    		    'mobile_no' =>$mobile,
    		    'header_mobile_no'=>$this->input->post('header_mobile_no'),
    		    'email'=>$email,
    		    'title'=>$title,
    		    'keyword'=>$keyword,
    		    'description' =>$description,
    		    'header' =>$header,
    		    'footer' => $footer,
    		    'header_menu' =>$header_menu,
    		    'footer_menu' => $footer_menu,
    		    'YouTube1'=>$youtube1,
    		    'YouTube2'=>$youtube2
    		    
		    );
    		
    	//	print_r($data);exit;
    		if($this->input->post('id')){
    
    		    $this->db->where('id', $this->input->post('id'));
                $result = $this->db->update('common_setting', $data);
              if($result){
              	$x = array('status'=>true, 'message'=>'Successfully update');
              }else{
              	$x = array('status'=>false, 'message'=>'Something wend wrong try again!');
              }
            }else{
              $result = $this->db->insert('common_setting',$data);
              if($result){
              	$x = array('status'=>true, 'message'=>'Successfully insert');
              }else{
              	$x = array('status'=>false, 'message'=>'Something wend wrong try again!');
              }  
            }
            
          header("Content-Type: application/json");
          echo json_encode($x);


	}
	
	public function siteSetting(){
		$this->load->view('admin/header');
		$this->load->view('admin/site_setting');
		$this->load->view('admin/footer');

	}
	public function blog(){
		$this->load->view('admin/header');
		$this->load->view('admin/blog');
		$this->load->view('admin/footer');
	}

	public function loadCommonSetting(){
		$result = $this->db->get('common_setting')->row_array();
		if($result){
			$x = array('status'=>true, 'data'=>$result);
		}else{
			$x = array('status'=>false, 'data'=>'');
		}
		header("Content-Type: application/json");
      	echo json_encode($x);
	}
}
