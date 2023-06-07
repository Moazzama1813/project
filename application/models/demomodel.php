<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Demomodel extends CI_Model { 
	

	public function create($formArray){
		$this->db->insert('signup',$formArray);
	}

	public function checkUser($email){
     
		 $this->db->where('email',$email);
		 return  $row=$this->db->get('signup')->row_array();

	}
    
	public function authorized(){
		$user=$this->session->userdata('user');
		if(!empty($user)){
			return true;
		}
		else
		{
			return false;
		}
     
		
		

	}

	    public function getAllData($limit,$offset){

	    $q=$this->db->limit($limit,$offset);
		$q=$this->db->get('signup');
        return $q->result();

	}

	public function get_image_data($id)
{   $q=$this->db->where('id',$id);
	$q=$this->db->get('signup');
   $q= $image_path = './picture/';
    $base64_image = base64_encode($q);

    echo $base64_image;
}


	public function updateData($id, $data){

		// $data['name']=$name;
		// $data['email']=$email;
		// $data['phone']=$phone;
		// $data['image']=$image;
		// $data['password']=$password;
		// $data['country']=$country;
		// $data['city']=$city;

		$this->db->where('id',$id);
		 return $this->db->update('signup',$data);

	}

	public function editData($id){
     $query=$this->db->get_where('signup',['id'=>$id]);
	 return $query->row();
	}

	// public function updateData($data,$id){

	// 	 return $this->db->update('signup',$data,['id'=>$id]);

	// }
 
	public function delData($id) 
	 {
		$this->db->where('id',$id);
		return $this->db->delete('signup');

	 }
    
	  public function num_rows(){
		$q=$this->db->get('signup');
        return $q->num_rows();

	  }

	  public function getUserData($id){
	  $this->db->where('id',$id);
		$q=$this->db->get('signup');
		return $q->row();
  
	}
  
      public function getCountries(){
		$this->db->order_by('country_name','ASC');
		$query = $this->db->get('country');
		// print_r($query);
		return $query->result();
	  }
    
	  public function getCities($country_id){
		$this->db->where('country_id',$country_id);
		$this->db->order_by('city_name','ASC');
		$query = $this->db->get('city');
		$output='<option value="">Select a City</option>';
		foreach($query->result() as $row){
			$output .= '<option value="'.$row->city_id.'">'.$row->city_name.'</option>';


		}
		return  $output;
		
		
		
	  }



	  public function insert_sub($formArray){
		$this->db->insert('sub',$formArray);
	}
}





?> 
