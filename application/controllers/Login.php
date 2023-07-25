<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	

    public function index(){
		$this->load->view('admin/login');
		
	}
	
	public function check(){
		$this->db->where('user_id', $this->input->post('username'));
		$this->db->where('password', $this->input->post('password'));
		$result = $this->db->get('login')->row();

		if(@count($result) >0){

			$m= array('login' =>'true');
			$this->session->set_userdata('login', $result);
		 
		}
		else{
			$m= array('login'=>'false');
		}
		
		echo json_encode($m);
	} 

}
