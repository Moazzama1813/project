<?php

Class Commonmodel extends CI_Model{


	   public function getCountries(){
		$countries = $this->db->get('country')->result_array();
		return $countries;
	  }

}


?>
