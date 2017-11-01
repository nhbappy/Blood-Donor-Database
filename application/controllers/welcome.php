<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		if(! $this->input->get_post('buttonSubmit'))
		{
			$this->load->library('form_validation');
			$this->load->view('welcome_view');
			return;
		}
	}

	public function addNew(){
		
		
		$this->load->library('form_validation');
		$data['message'] = '';
		if(! $this->input->get_post('buttonSubmit'))
		{
			$this->load->view('welcome_view', $data);
			return ;
		}
		$this->form_validation->set_rules('nameBox', 'Full name', 'required');
		$this->form_validation->set_rules('ageBox', 'Age', 'required|numeric|greater_than[16]|less_than[67]');
		$this->form_validation->set_rules('contactNumberBox', 'Phone Number', 'callback_checkCntctNo|numeric');
		$this->form_validation->set_rules('addressBox', 'Address', 'required');
		$this->form_validation->set_rules('usernameBox', 'Username', 'required|is_unique[donors.username]');
		$this->form_validation->set_rules('passwordBox', 'Password', 'required|min_length[7]|matches[confirmPasswordBox]');
		$this->form_validation->set_rules('confirmPasswordBox', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('emailBox', 'Email', 'required|valid_email');
		
		
		
		if($this->form_validation->run('addNew') == false)
		{
			$data['message'] = validation_errors();
			$this->load->view('welcome_view', $data);
			return;
		}
		
		
		
		$donor['name']=$this->input->get_post('nameBox');
		$donor['age']=$this->input->get_post('ageBox');
		$donor['bloodGroup']=$this->input->get_post('bloodGroup');
		$donor['gender']=$this->input->get_post('gender');
		$donor['availability']=$this->input->get_post('availability');
		$donor['contactNumber']=$this->input->get_post('contactNumberBox');
		$donor['address']=$this->input->get_post('addressBox');
		$donor['email']=$this->input->get_post('emailBox');
		$donor['username']=$this->input->get_post('usernameBox');
		$donor['password']=$this->input->get_post('passwordBox');
		$donor['userType']=$this->input->get_post('userType');

		$result = $this->donormodel->addNew($donor);

		if($result == 0){
			redirect('http://localhost/ci226/login','refresh');
		}
		else{
			echo "Username Not Available";
		}
	}
	public function checkCntctNo($contactNumber)
	{
		$pattern = '/[0][1][1|5-9][0-9]{8}/';

		if(preg_match($pattern, $contactNumber))
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('checkCntctNo', 'Invalid Phone number.');
			return false;
		}
	}
}