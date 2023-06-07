<?php 

class Upload extends CI_Controller{

	public function index(){
		$this->load->view('vw_upload');
	}
  
	 
// 	public function uploadfile(){

// 		$config['upload_path'] = './upload/';
// 		$config['allowed_types'] = 'gif|jpg|png';
// 		$config['encrypt_name'] = 'true';
// 		$this->load->library('upload',$config);

// 		if($this->upload->do_upload('image')){
		
// 			redirect(base_url().'index.php/Upload/index');

// 		}
// 		else{
		  
// 		  print_r($this->upload->display_errors());

// 		}

// }



}



?>
