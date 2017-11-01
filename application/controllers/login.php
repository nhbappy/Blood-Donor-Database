<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if(! $this->input->get_post('buttonLogin'))
		{
			$this->load->view('login_view');
			return;
		}

		$username=$this->input->get_post('usernameBox');
		$password=md5($this->input->get_post('passwordBox'));

		$donor['username']=$username;
		$donor['password']=$password;

		$this->load->model('donormodel');
		
		if($this->donormodel->login($donor) == false){
			echo "Invalid Login";
			return;
		}

		$result=$this->donormodel->login($donor);

		$thisDonor = $this->donormodel->getByUsername($username);

		$this->load->helper('url');
		$this->load->library('session');

		$this->session->set_userdata('username',$thisDonor['username']);
		$this->session->set_userdata('name',$thisDonor['name']);
		$this->session->set_userdata('userType',$thisDonor['userType']);

		$tempUser = $this->session->userdata('name');
		
		if($tempUser){
			if($thisDonor['userType'] == 'Admin'){
				redirect('http://localhost/ci226/admin', 'refresh');
			}
			else{
				redirect('http://localhost/ci226/user', 'refresh');
			}
		}
		else{
			echo "Unauthorized Access";
		}
	}
}