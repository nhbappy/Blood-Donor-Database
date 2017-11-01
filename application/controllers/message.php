<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {

	public function index($username)
	{
		$message['currentUser'] = $this->session->userdata('name');
		if(! $this->session->userdata('username')){
			echo "Unauthorized Access";
			return;
		}
		$this->session->set_userdata('sendTo',$username);
		$message['to'] = $username;

		if(! $this->input->get_post('buttonSend'))
		{
			$this->parser->parse('message_view', $message);
			return;
		}
	}

	public function sendMessage(){
		$info['to'] = $this->session->userdata('sendTo');
		$info['from'] = $this->session->userdata('username');
		$info['body']=$this->input->get_post('messageBody');
		date_default_timezone_set('Asia/Dhaka');
		$info['dateTime'] = date('d/m/Y h:i:s a', time());
		
		$this->donormodel->sendMessage($info);
	}

	public function inboxMessages(){
		$inbox['currentUser'] = $this->session->userdata('name');
		$inbox['messages'] = $this->donormodel->inboxMessages();
		$this->parser->parse('inbox_view', $inbox);
	}

	public function outboxMessages(){
		$outbox['currentUser'] = $this->session->userdata('name');
		$outbox['messages'] = $this->donormodel->outboxMessages();
		$this->parser->parse('outbox_view', $outbox);
	}
}