<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$thisDonor['currentUser'] = $this->session->userdata('name');
		$thisDonor = $this->donormodel->getByUsername($this->session->userdata('username'));

		$this->parser->parse('profile_view', $thisDonor);
	}
}