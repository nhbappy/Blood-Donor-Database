<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ConfirmDelete extends CI_Controller {

	public function index($username="")
	{
		if(! $this->session->userdata('username') || $this->session->userdata('userType')=='User')
		{
			echo "Unauthorized Access";
			return;
		}
		
		$data = $this->donormodel->getByUsername($username);
		if($data['userType']=="Admin" && $this->session->userdata('username') != $data['username'])
		{
			echo "You Can't DELETE an ADMIN account";
			return;
		}

		$this->session->set_userdata('delete',$username);
		$thisDonor = $this->donormodel->getByUsername($username);
		$this->parser->parse('confirmDelete_view', $thisDonor);
	}

	public function remove()
	{
		$username = $this->session->userdata('delete');
		
		if(! $this->session->userdata('username') || $this->session->userdata('userType')=='User'){
			echo "Unauthorized Access";
			return;
		}

		if(! $this->input->get_post('buttonConfirm')){
			echo "Unauthorized Access";
			return;
		}

		$this->donormodel->remove($username);
		redirect('http://localhost/ci226/decideuser', 'refresh');
	}
}