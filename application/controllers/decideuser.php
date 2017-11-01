<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Decideuser extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('userType') == 'Admin'){
			redirect('http://localhost/ci226/admin', 'refresh');
		}
		else{
			redirect('http://localhost/ci226/user', 'refresh');
		}
	}
}