<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
    
      public function __construct(){
        parent::__construct();
         if($this->session->userdata('login')==""){
                   redirect(base_url('/login'));

         }
    }
    
    
    
	public function sliderSetting(){
		$this->load->view('admin/header');
		$this->load->view('admin/slider_setting');
		$this->load->view('admin/footer');

	}

    public function addSliderSetting(){       
        $this->load->library('upload');
        $dataInfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['slider']['name']);
        for($i=0; $i<$cpt; $i++){           
            $_FILES['slider']['name']= $files['slider']['name'][$i];
            $_FILES['slider']['type']= $files['slider']['type'][$i];
            $_FILES['slider']['tmp_name']= $files['slider']['tmp_name'][$i];
            $_FILES['slider']['error']= $files['slider']['error'][$i];
            $_FILES['slider']['size']= $files['slider']['size'][$i];    
    
            $this->upload->initialize($this->set_upload_options());
            
            $this->upload->do_upload('slider');
            $dataInfo[] = $this->upload->data();
            
        }
        
        $cpt1 = count($_FILES['mobile_silder']['name']);
        for($i=0; $i<$cpt1; $i++){           
            $_FILES['mobile_silder']['name']= $files['mobile_silder']['name'][$i];
            $_FILES['mobile_silder']['type']= $files['mobile_silder']['type'][$i];
            $_FILES['mobile_silder']['tmp_name']= $files['mobile_silder']['tmp_name'][$i];
            $_FILES['mobile_silder']['error']= $files['mobile_silder']['error'][$i];
            $_FILES['mobile_silder']['size']= $files['mobile_silder']['size'][$i];    
    
            $this->upload->initialize($this->set_upload_options());
            
            $this->upload->do_upload('mobile_silder');
            $dataInfo1[] = $this->upload->data();
            
        }
    //echo "<pre>"; print_r($dataInfo1); echo "</pre>";
    //exit;
    foreach($dataInfo as $k=>$v){
        //echo $v['file_name'];
        // print_r($dataInfo1[$k]['file_name']);
        // exit;
        $result = $this->db->insert('slider', array("slider"=>$v['file_name'], "mobile_slider" =>$dataInfo1[$k]['file_name']));
        if($result){
            $x = array('status'=>true, 'message'=>'Slider added successfully');
        }else{
            $x = array('status'=>false, 'message'=>'Error! try again');
        }
    }
    header("Content-Type: application/json");
    echo json_encode($x);
       
    }
    
	public function loadSliderSetting(){
	    
		$result = $this->db->get('slider')->result_array();
		if($result){
			$x = array('status'=>true, 'data'=>$result);
		}else{
			$x = array('status'=>false, 'data'=>'');
		}
		header("Content-Type: application/json");
      	echo json_encode($x);
	}

	public function deleteSlider($id){
	    //echo $id;
	    $this->db->where('id', $id);
        $result = $this->db->delete('slider');
	    
        if($result){
            $x = array('status'=>true, 'message'=>'Record deleted successfully');
        }else{
            $x = array('status'=>false, 'message'=>'Error! try again');
        }
        
        header("Content-Type: application/json");
      	echo json_encode($x);
	}

    private function set_upload_options(){   
        //upload an image options
        $config = array();
        $config['upload_path'] = './uploads/admin/slider';
        $config['allowed_types'] = 'gif|jpg|png|webp';
        $config['overwrite']     = FALSE;
        $new_name = date('yymmdd').time() . '-' . $_FILES["slider"]['name'];
        $path = $_FILES['slider']['name'];
        $new_name = date('yymmdd').time().".".pathinfo($path, PATHINFO_EXTENSION);
        $config['file_name'] = $new_name; 
    
        return $config;
    }

	
}
