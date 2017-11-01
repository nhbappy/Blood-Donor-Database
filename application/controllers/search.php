<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$data['currentUser'] = $this->session->userdata('name');
		if(! $this->session->userdata('username')){
			echo "Unauthorized Access";
			return;
		}

		if(! $this->input->get_post('buttonNsearch') && ! $this->input->get_post('buttonADsearch') && ! $this->input->get_post('buttonBGsearch') && ! $this->input->get_post('buttonAVsearch'))
		{
			$this->parser->parse('searchBy_view', $data);
			return;
		}
	}

	public function byName()
	{
		$data['currentUser'] = $this->session->userdata('name');
		if(! $this->input->get_post('buttonNsearch'))
		{
			$this->parser->parse('searchBy_view', $data);
			return;
		}

		$data['donors'] = $this->donormodel->searchByName($this->input->get_post('nameBox'));

		if($this->session->userdata('userType')=='Admin'){
			$this->parser->parse('searchedListAdmin_view',$data);
		}
		else{
			$this->parser->parse('searchedListUser_view',$data);
		}
	}

	public function byAddress()
	{
		$data['currentUser'] = $this->session->userdata('name');
		if(! $this->input->get_post('buttonADsearch'))
		{
			$this->parser->parse('searchBy_view', $data);
			return;
		}

		$data['donors'] = $this->donormodel->searchByAddress($this->input->get_post('addressBox'));

		if($this->session->userdata('userType')=='Admin'){
			$this->parser->parse('searchedListAdmin_view',$data);
		}
		else{
			$this->parser->parse('searchedListUser_view',$data);
		}
	}

	public function byBloodGroup()
	{
		$data['currentUser'] = $this->session->userdata('name');
		if(! $this->input->get_post('buttonBGsearch'))
		{
			$this->parser->parse('searchBy_view', $data);
			return;
		}

		$data['donors'] = $this->donormodel->searchByBloodGroup($this->input->get_post('bloodGroup'));

		if($this->session->userdata('userType')=='Admin'){
			$this->parser->parse('searchedListAdmin_view',$data);
		}
		else{
			$this->parser->parse('searchedListUser_view',$data);
		}
	}

	public function byAvailability()
	{
		$data['currentUser'] = $this->session->userdata('name');
		if(! $this->input->get_post('buttonAVsearch'))
		{
			$this->load->view('searchBy_view', $data);
			return;
		}

		$data['donors'] = $this->donormodel->searchByAvailability($this->input->get_post('availability'));

		if($this->session->userdata('userType')=='Admin'){
			$this->parser->parse('searchedListAdmin_view',$data);
		}
		else{
			$this->parser->parse('searchedListUser_view',$data);
		}
	}
}