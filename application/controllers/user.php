<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->model('donormodel');
		$data['donors'] = $this->donormodel->getAll();
		$data['currentUser'] = $this->session->userdata('name');

		if(! $this->session->userdata('username') || $this->session->userdata('userType')=='Admin'){
			echo "Unauthorized Access";
			return;
		}
		
		$this->parser->parse('user_view', $data);
	}
}