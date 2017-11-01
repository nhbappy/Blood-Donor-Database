<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EditProfile extends CI_Controller {

	public function index()
	{
		if(! $this->session->userdata('username'))
		{
			echo "Unauthorized Access";
			return;
		}

		if(! $this->input->get_post('buttonUpdate'))
		{
			$this->load->library('form_validation');

			$donor = $this->donormodel->getByUsername($this->session->userdata('username'));
			$this->parser->parse('editProfile_view',$donor);

			return;
		}
		
		//$donor = $this->donormodel->getByUsername($this->session->userdata('username'));
		//$this->parser->parse('editProfile_view',$donor);
	}

	public function updateProfile($username="")
	{
		$this->load->library('form_validation');
		$data['message'] = '';
		if(! $this->input->get_post('buttonUpdate'))
		{
			$this->load->view('editProfile_view', $data);
			return ;
		}
		$this->form_validation->set_rules('nameBox', 'Full name', 'required');
		$this->form_validation->set_rules('ageBox', 'Age', 'required|numeric|greater_than[16]|less_than[67]');
		$this->form_validation->set_rules('contactNumberBox', 'Phone Number', 'callback_checkCntctNo|numeric');
		$this->form_validation->set_rules('addressBox', 'Address', 'required');
		$this->form_validation->set_rules('emailBox', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('passwordBox', 'Password', 'required|min_length[7]|matches[confirmPasswordBox]');
		
		
		
		if($this->form_validation->run('addNew') == false)
		{
			$donor = $this->donormodel->getByUsername($this->session->userdata('username'));
			$donor['message'] = validation_errors();
			$this->parser->parse('editProfile_view',$donor);
			return;
		}

		$donor['username'] = $this->session->userdata('username');
		$donor['name']=$this->input->get_post('nameBox');
		$donor['age']=$this->input->get_post('ageBox');
		$donor['availability']=$this->input->get_post('availability');
		$donor['contactNumber']=$this->input->get_post('contactNumberBox');
		$donor['address']=$this->input->get_post('addressBox');
		$donor['email']=$this->input->get_post('emailBox');
		$donor['password']=$this->input->get_post('passwordBox');

		

		$this->donormodel->update($donor);
		redirect('http://localhost/ci226/profile','refresh');
	}
}