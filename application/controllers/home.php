<?php

class Home extends CI_Controller(){
      
	public function create(){

		$this->load->model('Commonmodel');
		$countries = $this->Commonmodel->getCountries();
		
		echo "<pre>";
		print_r($countries);
		exit;
		 $this->load->view('create');
		}
		}








?>
