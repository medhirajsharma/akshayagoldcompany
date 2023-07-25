<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
    }
    public function ckb4(){
        $this->load->view('ckb4');
        
    }
	public function index(){
	      
        // $c_setting = $this->db->get('common_setting')->row_array();
        $data['c_setting']=$this->db->get('common_setting')->row_array();
        // print_r($data['c_setting']);
        // exit();
        $data['title'] = $data['c_setting']['title'];
        $data['description'] = $data['c_setting']['description'];
        $data['keyword'] = $data['c_setting']['keyword'];
        $data['header'] = $data['c_setting']['header'];
        $data['header_menu'] = $data['c_setting']['header_menu'];
        $data['footer'] = $data['c_setting']['footer'];
        $data['footer_menu'] = $data['c_setting']['footer_menu'];
   
	    $this->load->view('header',$data);
		$this->load->view('index',$data);
		$this->load->view('footer',$data);
	}
	public function about(){
	  
        $data['c_setting']=$this->db->get('common_setting')->row_array();
        // print_r($data['c_setting']);
        // exit();
        $data['title'] = 'About Us ';
        $data['description'] = 'About Us ';
        $data['keyword'] = $data['c_setting']['keyword'];
        $data['header'] = $data['c_setting']['header'];
        $data['footer'] = $data['c_setting']['footer'];
        
        $data['header_menu'] = $data['c_setting']['header_menu'];
        $data['footer_menu'] = $data['c_setting']['footer_menu'];
        
        $this->load->view('header',$data);
		$this->load->view('about',$data);
		$this->load->view('footer',$data);
	}
  

// 	public function service(){
// 	    $data['title'] = "";
//         $data['description'] = "";
//         $data['keyword'] = "";
//         $data['header'] = "";
//         $data['footer'] = ""; 
        
//         $c_setting = $this->db->get('common_setting')->row_array();
//         $data['c_setting']=$this->db->get('common_setting')->row_array();
   
// 	    $this->load->view('header',$data);
// 		$this->load->view('service',$data);
// 		$this->load->view('footer',$data);
// 	}
// 	public function gold_buyer(){
// 	    $data['title'] = "";
//         $data['description'] = "";
//         $data['keyword'] = "";
//         $data['header'] = "";
//         $data['footer'] = ""; 
//         $c_setting = $this->db->get('common_setting')->row_array();
//         $data['c_setting']=$this->db->get('common_setting')->row_array();
//         $this->load->view('header',$data);
// 		$this->load->view('gold_buyer',$data);
// 		$this->load->view('footer',$data);
// 	}
	
// 	public function pledge_gold(){
// 	    $data['title'] = "";
//         $data['description'] = "";
//         $data['keyword'] = "";
//         $data['header'] = "";
//         $data['footer'] = ""; 
//         $c_setting = $this->db->get('common_setting')->row_array();
//         $data['c_setting']=$this->db->get('common_setting')->row_array();
//         $this->load->view('header',$data);
// 		$this->load->view('pledge_gold',$data);
// 		$this->load->view('footer',$data);
// 	}
	
	public function contact(){
	    $data['c_setting']=$this->db->get('common_setting')->row_array();
        // print_r($data['c_setting']);
        // exit();
       
        $data['header_menu'] = $data['c_setting']['header_menu'];
        $data['footer_menu'] = $data['c_setting']['footer_menu'];
        
        $data['title'] = 'Contact Us ';
        $data['description'] = 'Contact Us ';
        $data['keyword'] = $data['c_setting']['keyword'];
        $data['header'] = $data['c_setting']['header'];
        $data['footer'] = $data['c_setting']['footer'];
   
	    $this->load->view('header',$data);
		$this->load->view('contact',$data);
		$this->load->view('footer',$data);
	}
	public function branch(){
	    
	    $data['c_setting']=$this->db->get('common_setting')->row_array();
        // print_r($data['c_setting']);
        // exit();
        $data['title'] = 'Branch';
        $data['description'] = 'Branch';
        $data['keyword'] = $data['c_setting']['keyword'];
        $data['header'] = $data['c_setting']['header'];
        $data['footer'] = $data['c_setting']['footer'];
        
        $data['header_menu'] = $data['c_setting']['header_menu'];
        $data['footer_menu'] = $data['c_setting']['footer_menu'];
        
        
        $sql = "SELECT * FROM `branch` WHERE city ='Karnataka'";
        $data['karnataka'] = $this->db->query($sql)->result();
        
        $sql = "SELECT * FROM `branch` WHERE city ='Tamilnadu'";
        $data['tamilnadu'] = $this->db->query($sql)->result();
        
        
   
	    $this->load->view('header',$data);
		$this->load->view('branch',$data);
		$this->load->view('footer',$data);
	}
	
	public function branchs($city,$name,$type=""){
	    
	   
        
	      
        $c_setting = $this->db->get('common_setting')->row_array();
        $data['c_setting']=$this->db->get('common_setting')->row_array();
        
        
        
        $sql = "SELECT * FROM `branch` WHERE city ='".$city. "' AND url= '".$name."'";
        $data['branchs'] = $this->db->query($sql)->row();
        
        // print_r($data['branchs']);
        // exit;
        
        
        $data['title'] = $data['branchs']->seo_title;
        $data['description'] = $data['branchs']->seo_description;
        $data['keyword'] = $data['branchs']->seo_keyword;
        $data['header'] = $data['branchs']->header;
        $data['footer'] = $data['branchs']->footer; 
        
        $data['header_menu'] = $data['c_setting']['header_menu'];
        $data['footer_menu'] = $data['c_setting']['footer_menu'];
        
	    $this->load->view('header',$data);
		$this->load->view('branchs',$data);
		$this->load->view('footer',$data);
	    
	}
	
	
	public function branch_services($city){
	   // echo $city;
	   
        $data['footer'] = ""; 
        
	      
        $c_setting = $this->db->get('common_setting')->row_array();
        $data['c_setting']=$this->db->get('common_setting')->row_array();
        
        $data['title'] = 'Branch Services';
        $data['description'] = 'Branch Services';
        $data['keyword'] = "";
        $data['header'] = "";
        
        $data['header_menu'] = $data['c_setting']['header_menu'];
        $data['footer_menu'] = $data['c_setting']['footer_menu'];
       
        
        $sql = "SELECT * FROM `branch` WHERE city ='".$city. "'";
        //AND name= '".$name."'";
        $data['karnataka'] = $this->db->query($sql)->result();
   
	    $this->load->view('header',$data);
		$this->load->view('branch_services',$data);
		$this->load->view('footer',$data);
	}
	
	public function branch_locator(){
	    
	    $data['footer'] = ""; 
        
	      
        $c_setting = $this->db->get('common_setting')->row_array();
        $data['c_setting']=$this->db->get('common_setting')->row_array();
        
        $data['title'] = "Branch Locator";
        $data['description'] = " Branch Locator";
        $data['keyword'] = "";
        $data['header'] = "";
        
        $data['header_menu'] = $data['c_setting']['header_menu'];
        $data['footer_menu'] = $data['c_setting']['footer_menu'];
       
        
        $sql = "SELECT * FROM `branch`";
        //AND name= '".$name."'";
        $data['branch_data'] = $this->db->query($sql)->result();
   
	    $this->load->view('header',$data);
		$this->load->view('branch_locator',$data);
		$this->load->view('footer',$data);
	}
	
	public function branch_lat_long(){
	   // print_r($_POST);
	    $lat = $this->input->post('lat');
        $long = $this->input->post('long');
 
        $user_latitude = $lat;// user input latitude
        $user_longitude = $long; // user input logtitude
        
        $sql = "SELECT ROUND(6371 * acos (cos ( radians($user_latitude) ) * cos( radians( lat ) ) * cos( radians( `long` ) - radians($user_longitude) ) + sin ( radians($user_latitude) ) * sin( radians( lat ) ))) AS distance,branch.* FROM branch ORDER BY distance ASC LIMIT 4";
        $r= $this->db->query($sql)->result();
        $html ="";
        foreach($r as $key=>$value){
      
        $html = $html .'
           <div class="col-lg-4">
            <div class="card">
              <div class="card-body inside-branch">
                <ul>
                 <a href="/branches/'.$value->city.'/'. $value->url.'" style="background-color:transparent !important;text-decoration:none;">
                    <h2>'.$value->name.'</h2>
                    </a>
                    <div class="branch-img">
                    <a href="/branches/'.$value->city.'/'. $value->url.'">
                    <img src="/uploads/admin/branch/'.$value->image_uplode.'" class="card-img-top" alt="..." width="100%"></a>
                   </div>
        
                 
                 <li><i class="fas fa-map-marker-alt"></i><a href="'.$value->google_map_url.'" target="_new">
                 '.$value->address.'
               
                 </a></li>
              </ul>
              <a href="'.$value->google_map_url.'" target="_blank" style="text-decoration:none;" class="get_direction">Get Direction</a>
              </div>
              </div>
          </div>';
            
        } 
        echo $html;
 
 
	}
	
	
	
	public function sendMail(){
	    //echo "<pre>"; print_r($_POST); echo "</pre>";
	    $this->load->library('email');
	    
        $this->email->to('akshayagoldcompany916@gmail.com');
        $this->email->from($this->input->post('email'));
      
        
        $this->email->subject('Contact us from akshayagoldcompany website mail');
        $this->email->set_mailtype('html');
        $this->email->message(
            'Name '.$this->input->post('name').'<br/> Mobile number '.
             $this->input->post('mobile').
            '<br/> Message '.$this->input->post('message')
            );
       
        $result = $this->email->send();
        if($result){
            $x = array('status'=>true, 'message'=>'Thank you for sending your email we connect soon to you');
        }else{
            $x = array('status'=>false, 'message'=>'Error! something went wrong please try again');
        }
        header("Content-Type: application/json");
        echo json_encode($x);
	}
	
	public function blog_per_page($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('blog');
        
        return $query->result_array();
    }
    
	public function blogs(){
	    $c_setting = $this->db->get('common_setting')->row_array();
	    $data['c_setting']=$c_setting;
        
        $data['title'] = $data['c_setting']['title'];
        $data['description'] = $data['c_setting']['description'];
        $data['keyword'] = $data['c_setting']['keyword'];
        $data['header'] = $data['c_setting']['header'];
        $data['footer'] = $data['c_setting']['footer'];
        
        $data['header_menu'] = $data['c_setting']['header_menu'];
        $data['footer_menu'] = $data['c_setting']['footer_menu'];
        
       
        $this->load->library('pagination');
	    
	    $config = array();
        $config["base_url"] = base_url().'welcome/blogs';
        $config["total_rows"] = $this->db->count_all('blog');
        $config["per_page"] = 1;
        $config["uri_segment"] = 3;
        
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="blog-page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="blog-page-item active"><a href="javascript:">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="blog-page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="blog-page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="blog-page-item">';
        $config['last_tag_close'] = '</li>';
    
    
    
        $config['prev_link'] = '<i class="fas fa-chevron-left"></i>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
    
    
        $config['next_link'] = '<i class="fas fa-chevron-right"></i>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["links"] = $this->pagination->create_links();
        
        $data['blog'] = $this->blog_per_page($config["per_page"], $page);
        $data['page'] = $page;
        //   echo 'hi';
          
         $this->load->view('header',$data);
		 $this->load->view('blog',$data);
		 $this->load->view('footer',$data);
	}
	
    public function login(){
		$this->load->view('sign_in');
	}
	

	public function blogSingle($id){

	    $data['c_setting']=$this->db->get('common_setting')->row_array();
        // print_r($data['c_setting']);
        // exit();
        $data['title'] = $data['c_setting']['title'];
        $data['description'] = $data['c_setting']['description'];
        $data['keyword'] = $data['c_setting']['keyword'];
        $data['header'] = $data['c_setting']['header'];
        $data['footer'] = $data['c_setting']['footer'];
        
        $data['header_menu'] = $data['c_setting']['header_menu'];
        $data['footer_menu'] = $data['c_setting']['footer_menu'];
        
        $this->db->where('id', $id);
	    $data['blog'] = $this->db->get('blog')->row_array();
	    //echo $id;
   
	    $this->load->view('header',$data);
		$this->load->view('blog_single',$data);
		$this->load->view('footer',$data);
	}
	public function routes($url){
	    if($url=='blog'){
	        $this->blogs();
	       
	    }
	    
	    $this->db->where('url', $url);
		$d=$this->db->get('routes')->row();
		
		if(count((array)$d) >0){
		    
		
		   if($d->page_type=='page'){
		       $this->db->where('id', $d->id);
		       
		       $data['page']=$this->db->get('page')->row_array();
		       
		        $data['c_setting']=$this->db->get('common_setting')->row_array();
                $data['title'] = $data['c_setting']['title'];
                $data['description'] = $data['c_setting']['description'];
                $data['keyword'] = $data['c_setting']['keyword'];
                $data['header'] = $data['c_setting']['header'];
                $data['footer'] = $data['c_setting']['footer'];
                
                $data['header_menu'] = $data['c_setting']['header_menu'];
        $data['footer_menu'] = $data['c_setting']['footer_menu'];
   
        	    $this->load->view('header',$data);
        	    $this->load->view('page_template',$data);
        	    $this->load->view('review',$data);
        	    $this->load->view('portfolio',$data);
        	  	$this->load->view('footer',$data);
		       
		   }
		   
		   if($d->page_type=='blog'){
		       $this->db->where('id', $d->id);
		       
		       $data['page']=$this->db->get('page')->row_array();
		       
		        $data['c_setting']=$this->db->get('common_setting')->row_array();
                $data['title'] = $data['c_setting']['title'];
                $data['description'] = $data['c_setting']['description'];
                $data['keyword'] = $data['c_setting']['keyword'];
                $data['header'] = $data['c_setting']['header'];
                $data['footer'] = $data['c_setting']['footer'];
                
                $data['header_menu'] = $data['c_setting']['header_menu'];
                $data['footer_menu'] = $data['c_setting']['footer_menu'];
   
        	    $this->load->view('header',$data);
        	    $this->load->view('blog',$data);
        		$this->load->view('footer',$data);
		       
		   }
	    }
	    
 
	}

}
