<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['donors'] = $this->donormodel->getAll();
		$data['currentUser'] = $this->session->userdata('name');

		if(! $this->session->userdata('username') || $this->session->userdata('userType')=='User'){
			echo "Unauthorized Access";
			return;
		}
		
		$this->parser->parse('admin_view', $data);
	}

	public function viewDetails($username=""){
		if($username == ""){
			echo "No Records Found";
			return;
		}

		if(! $this->session->userdata('username') || $this->session->userdata('userType')=='User'){
			echo "Unauthorized Access";
			return;
		}
		
		$data = $this->donormodel->getByUsername($username);
		$this->parser->parse('detailsprofile_view', $data);
	}
}