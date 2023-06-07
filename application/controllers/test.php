<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller{

	
public function abc()

     {

		$this->load->model('Demomodel');
		$data=[];
		$data['countries'] = $this->Demomodel->getCountries();
		
        
		
		// $data['countries']=$countries;

         if($this->input->post('country_id')){

		 echo  $this->Demomodel->getCities($this->input->post('country_id'));
	}
		// print_r($cities);
        
		// $data['cities']=$cities;
	    // $citiesString=$this->load->view('cities-select',$data,true);

		//  $response['cities']= $citiesString;
		// echo json_encode($response);
	


		if($this->Demomodel->authorized() == true){
		  
					
					redirect(base_url().'index.php/test/login');
	
		}

                $config['upload_path'] = './picture/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['encrypt_name'] = 'TRUE';
				$config['overwrite']='TRUE';
				// $config['max_size']    = '100px';
                // $config['max_width']   = '1024px';
                // $config['max_height']    = '768px';
	$this->load->library('upload',  $config);
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name','name','required');
    $this->form_validation->set_rules('email','email','required|valid_email|is_unique[signup.email]');
    $this->form_validation->set_rules('phone','phone','required|exact_length[11]');
    $this->form_validation->set_rules('password','password','required|min_length[8]');
    $this->form_validation->set_rules('pass','pass','required|matches[password]');
	$this->form_validation->set_rules('country','country','required');
	$this->form_validation->set_rules('city','city','required');
    // $this->form_validation->set_rules('image','image','required');
    $this->form_validation->set_error_delimiters('<div class=text-danger>','</div>');
    if($this->form_validation->run() == TRUE  ){


   // print_r($_FILES['image']);
   // exit;

        if(!empty($_FILES['image']['name'])) {


      if($this->upload->do_upload('image')){

      	$data = $this->upload->data();
      	// echo "<pre>";
      	// print_r($data); 
      	// echo "</pre>";
      	// exit;
	$this->load->model('Demomodel');
	$formArray=array();
	$formArray['name']=$this->input->post('name');
	$formArray['email']=$this->input->post('email');
	$formArray['phone']=$this->input->post('phone');
	$formArray['country']=$this->input->post('country');
	$formArray['city']=$this->input->post('city');
	$formArray['password']=password_hash($this->input->post('password'),PASSWORD_BCRYPT);
	$formArray['image']=$data['file_name'];
	$formArray['created_at']=date(format: 'Y-m-d H:i:s');
	$this->Demomodel->create($formArray);
	$this->session->set_flashdata('msg','Your account has been created successfully.');
	redirect(base_url().'index.php/Test/abc');

		}

		else{
			$error=$this->upload->display_errors(); 
			$data['errorImageUpload']=$error;
			$this->load->view('abc',$data);
		}



   }
   	


   	else{

	$formArray=array();
	$formArray['name']=$this->input->post('name');
	$formArray['email']=$this->input->post('email');
	$formArray['phone']=$this->input->post('phone');
	$formArray['password']=password_hash($this->input->post('password'),PASSWORD_BCRYPT);
	// $formArray['image']=$this->input->post('image');
	$formArray['created_at']=date(format: 'Y-m-d H:i:s');
	$this->Demomodel->create($formArray);

	  $this->session->set_flashdata('msg','Your account has been created successfully.');
	  redirect(base_url().'index.php/Test/abc');
   	}




      
    

	
     }


else
{

$this->load->view('abc',$data);


	

}

	 }




    public function login(){

      
		$this->load->model('Demomodel');
		if($this->Demomodel->authorized() == true){ 
		  
					
					redirect(base_url().'index.php/test/dashboard');
	
		}


	 
	  $this->load->library('form_validation');
	  $this->form_validation->set_rules('email','email','required|valid_email');
	  $this->form_validation->set_rules('password','password','required');
	  $this->form_validation->set_error_delimiters('<div class=text-danger>','</div>');
	  if($this->form_validation->run() == TRUE  ){

        $email=$this->input->post('email');
		$user=$this->Demomodel->checkUser($email);
            if(!empty($user)){
				$password=$this->input->post('password');
				if(password_verify($password,$user['password']) == TRUE){
                    
					$sessArray['id']   = $user['id'];
					$sessArray['name'] = $user['name'];
					$sessArray['email']= $user['email'];
					$sessArray['phone']= $user['phone'];
					$sessArray['image']= $user['image'];
					$this->session->set_userdata('user',$sessArray);
					redirect(base_url().'index.php/test/dashboard');
                 
				}
				else{
					$this->session->set_flashdata('ms','Either email or password is incorrect,please try again.');
				    redirect(base_url().'index.php/test/login');
				}

			}
			else{
				$this->session->set_flashdata('ms','Either email or password is incorrect,please try again.');
				redirect(base_url().'index.php/test/login');
			}

	  } 
	  else{

		$this->load->view('login');
	  }

 
	}

   public function dashboard(){
	$this->load->model('Demomodel');

	// $this->load->Demomodel->get_image_data();
	
    $this->load->library('pagination');    
	$config['base_url'] = base_url('index.php/test/dashboard');
    $config['total_rows'] = $this->Demomodel->num_rows();
    $config['per_page'] = 3;
	$config['full_tag_open'] = "<ul class='pagination'>";
	$config['full_tag_close'] = "</ul>";
	$config['next_tag_open'] = "<li class='page-item '>";
	$config['next_tag_close'] = "</li>";
	$config['prev_tag_open'] = "<li class='page-item '>";
	$config['prev_tag_close'] = "</li>";
	$config['num_tag_open'] = "<li class='page-item '>";
	$config['num_tag_close'] = "</li>";
	$config['cur_tag_open'] = "<li class='page-item active'><a class='page-link'>";
	$config['cur_tag_close'] = "<span class='sr-only>'(current)</span></a></li>";
	$config['attributes'] = array('class' => 'page-link');
	$this->pagination->initialize($config);
	$data['students']=$this->Demomodel->getAllData($config['per_page'],$this->uri->segment(3));

	    
       
		// $data['students']=$this->Demomodel->getAllData();
		 
		
     

	if($this->Demomodel->authorized() == false){
      
		        $this->session->set_flashdata('msg','You are not authorized to access this section.');
				
				redirect(base_url().'index.php/test/login');

	}

	$user=$this->session->userdata('user');
	$data['user']=$user;
    //   print_r($data);
	$this->load->view('dashboard',$data);

	
}

    public function logout(){
	$this->session->unset_userdata('user');
	redirect(base_url().'index.php/test/login');
}
    public function edit($id){


		$this->load->model('Demomodel');
		$data=[];
		$data['student'] =$this->Demomodel->getCountries();
		$data['student']=$this->Demomodel->getUserData($id);
		$data['student']=$this->Demomodel->editData($id,$data);
		// $this->load->view('edit',$data);
		// print_r($data['student']);
		

		

		

	// $this->load->library('form_validation');
    // $this->form_validation->set_rules('name','name','required');
    // $this->form_validation->set_rules('email','email','required|valid_email');
    // $this->form_validation->set_rules('phone','phone','required|exact_length[11]');
    // $this->form_validation->set_rules('password','password','required|min_length[8]');
    // $this->form_validation->set_rules('pass','pass','required|matches[password]');
	// $this->form_validation->set_rules('country','country','required');
	// $this->form_validation->set_rules('city','city','required');
    // $this->form_validation->set_rules('image','image','required');
    // $this->form_validation->set_error_delimiters('<div class=text-danger>','</div>');
   


		


	// $name=$this->input->post('name');
	// $email=$this->input->post('email');
	// $phone=$this->input->post('phone');
	// $image=$this->$update_filename;
	// $password=$this->input->post('password');
	// $country=$this->input->post('country');
	// $city=$this->input->post('city');
	// $UpdateData=$this->Demomodel->updateData($id,$name,$email,$phone,$image);

	//     if($UpdateData){
	// $this->session->set_flashdata('msg','Your account has been updated successfully.');
	//   redirect(base_url().'index.php/Test/dashboard'); 
	// 	}
	// 	else{
	// 		redirect(base_url().'index.php/Test/edit'); 
	// 	}

	// 	$update_filename= time(). "-".str_replace('','-',$_FILES['image1']['name']);

	// 	$config=[
	// 		'upload_path'=>"./picture/",
	// 		'allowed_types'=>"jpg|jpeg|png",
	// 		'file_name'=>$update_filename,
	// 	];
          
	// 	$this->load->library('upload',$config);
		

	// 	$old_filename = $this->input->post('image');
	// 	$new_filename = $_FILES['image1']['name'];

	// 	if($new_filename == TRUE){
			
	// 		if($this->upload->do_upload('image1')){
	// 			if(file_exists("./picture/".$old_filename)){
	// 				unlink('./picture/'.$old_filename);
	// 			}
	// 		}
	// 	}

	// 	else{
	// 		$update_filename = $old_filename;
	// 	}
   	         
	// 	$data=[
	// 		'name'=>$this->input->post('name'),
	// 		'email'=>$this->input->post('email'),
	// 		'phone'=>$this->input->post('phone'),
	// 		'image1'=> $update_filename
	// 	];
	// 	$student= $this->Demomodel->updateData($id,$data);
	// 	redirect(base_url().'index.php/Test/edit/'.$id);
    //  }

      
		// $this->load->view('edit',$data);
	// 	return $this->edit($id);
	  
 


	$this->load->model('Demomodel');
	$this->load->library('form_validation');
    $this->form_validation->set_rules('name','name','required');
    $this->form_validation->set_rules('email','email','required|valid_email');
    $this->form_validation->set_rules('phone','phone','required|exact_length[11]');
    // $this->form_validation->set_rules('password','password','required|min_length[8]');
    // $this->form_validation->set_rules('pass','pass','required|matches[password]');
	// $this->form_validation->set_rules('country','country','required');
	// $this->form_validation->set_rules('city','city','required');
    $this->form_validation->set_rules('image','image','required');
    $this->form_validation->set_error_delimiters('<div class=text-danger>','</div>');
    if($this->form_validation->run() ){

		$update_filename = time(). "-".str_replace('','-',$_FILES['image']['name']);

		$config=[
			'upload_path'=>"./picture/",
			'allowed_types'=>"jpg|jpeg|png",
			'file_name'=>$update_filename,
		];
          
		$this->load->library('upload',$config);
		

		$old_filename = $this->input->post('image');
		$new_filename = $_FILES['image']['name'];

		if($new_filename == TRUE){
			
			if($this->upload->do_upload('image')){
				if(file_exists("./picture/".$old_filename)){
					unlink('./picture/'.$old_filename);
				}
			}
		}

		else{
			$update_filename = $old_filename;
		}
   	         
		$data=[
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'phone'=>$this->input->post('phone'),
			'image'=> $update_filename
		];
		$student= $this->Demomodel->updateData($id,$data);
		redirect(base_url().'index.php/Test/dashboard');
     }
	 else
	 {
	
		 $this->load->view('edit',$data);
	 }


	 }
 public  function delete($id)
	 {

		$this->load->model('Demomodel');
		$deleteData=$this->Demomodel->delData($id);
		echo $this->uri->segment(3);
		if($deleteData){
		redirect(base_url().'index.php/test/dashboard');}
		else{
		redirect(base_url().'index.php/test/dashboard');
		} 
	}


//  public function update($id){
// 	$this->load->model('Demomodel');
// 	$this->load->library('form_validation');
//  $this->form_validation->set_rules('name','name','required');
//  $this->form_validation->set_rules('email','email','required|valid_email');
//  $this->form_validation->set_rules('phone','phone','required|exact_length[11]');
//  $this->form_validation->set_rules('password','password','required|min_length[8]');
//  $this->form_validation->set_rules('pass','pass','required|matches[password]');
//  $this->form_validation->set_rules('country','country','required');
//  $this->form_validation->set_rules('city','city','required');
//  $this->form_validation->set_rules('image','image','required');
//  $this->form_validation->set_error_delimiters('<div class=text-danger>','</div>');
//  if($this->form_validation->run() ){


		




// 		$update_filename= time(). "-".str_replace('','-',$_FILES['image1']['name']);

// 		$config=[
// 			'upload_path'=>"./picture/",
// 			'allowed_types'=>"jpg|jpeg|png",
// 			'file_name'=>$update_filename,
// 		];
          
// 		$this->load->library('upload',$config);
		

// 		$old_filename = $this->input->post('image');
// 		$new_filename = $_FILES['image1']['name'];

// 		if($new_filename == TRUE){
			
// 			if($this->upload->do_upload('image1')){
// 				if(file_exists("./picture/".$old_filename)){
// 					unlink('./picture/'.$old_filename);
// 				}
// 			}
// 		}

// 		else{
// 			$update_filename = $old_filename;
// 		}
   	         
// 		$data=[
// 			'name'=>$this->input->post('name'),
// 			'email'=>$this->input->post('email'),
// 			'phone'=>$this->input->post('phone'),
// 			'image1'=> $update_filename
// 		];
// 		$student= $this->Demomodel->updateData($id,$data);
// 		redirect(base_url().'index.php/Test/dashboard/'.$id);
//      }
// 	 else
// 	 {
	
// 		return $this->edit($id);
// 	 }
//  }

 public function sub(){

	
	// $this->load->library('form_validation');
    // $this->form_validation->set_rules('email','email','required|valid_email');
	// $this->form_validation->set_error_delimiters('<div class=text-danger>','</div>');
    // if($this->form_validation->run() == TRUE  ){

   $this->load->model('Demomodel');
	$formArray=array();
	
	$formArray['email']=$this->input->post('email');
	$this->Demomodel->insert_sub($formArray);

	redirect(base_url().'index.php/test/dashboard');



	
    
	
		
		$this->load->view('sub');
	

	
 }

}


?>
