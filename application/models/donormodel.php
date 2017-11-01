<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donormodel extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function getAll()
	{
		$sql = "SELECT * FROM donors";
		$result = $this->db->query($sql);
		
		return $result->result_array();
	}

	public function getByUsername($username)
	{
		$sql = "SELECT * FROM `donors` WHERE username='$username'";
		$result = $this->db->query($sql);
		return $result->row_array();
	}

	public function searchByName($name)
	{
		$sql = "SELECT * FROM `donors` WHERE name='$name'";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function searchByAddress($address)
	{
		$sql = "SELECT * FROM `donors` WHERE address='$address'";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function searchByBloodGroup($bloodGroup)
	{
		$sql = "SELECT * FROM `donors` WHERE bloodGroup='$bloodGroup'";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function searchByAvailability($availability)
	{
		$sql = "SELECT * FROM `donors` WHERE availability='$availability'";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function addNew($donor)
	{
		$donor['password']=md5($donor['password']);

		$sql = "INSERT INTO `donors`(`name`, `gender`, `bloodGroup`, `age`, `availability`, `contactNumber`, `address`, `email`, `username`, `password`, `userType`) VALUES ('$donor[name]','$donor[gender]','$donor[bloodGroup]','$donor[age]','$donor[availability]','$donor[contactNumber]','$donor[address]','$donor[email]','$donor[username]','$donor[password]','$donor[userType]')";
		$result = $this->db->query($sql);
	}

	public function update($data)
	{
		$data['password']=md5($data['password']);

		$sql = "UPDATE `donors` SET `name`='$data[name]',`age`='$data[age]',`availability`='$data[availability]',`contactNumber`='$data[contactNumber]',`address`='$data[address]',`email`='$data[email]',`password`='$data[password]' WHERE `username`='$data[username]'";
		$this->db->query($sql);
	}

	public function remove($username)
	{
		$sql = "DELETE FROM donors WHERE username='$username'";
		$this->db->query($sql);
	}

	public function login($donor)
	{
		$sql = "SELECT * FROM `donors` WHERE username='$donor[username]' AND password='$donor[password]'";
		$result = $this->db->query($sql);
		
		if($result->num_rows == 1){
			return true;
		}
		else{
			return false;
		}
	}

	public function sendMessage($info)
	{
		$query="INSERT INTO `allmessages`(`messageFrom`, `messageTo`, `messageBody`, `dateTime`) VALUES ('$info[from]','$info[to]','$info[body]','$info[dateTime]')";
		$this->db->query($query);

		if($this->session->userdata('userType') == 'Admin'){
			redirect('http://localhost/ci226/admin', 'refresh');
		}
		else{
			redirect('http://localhost/ci226/user', 'refresh');
		}
	}

	public function inboxMessages()
	{
		$username = $this->session->userdata('username');
		$sql = "SELECT * FROM `allMessages` WHERE messageTo='$username' ORDER BY `dateTime` DESC";
		$result = $this->db->query($sql);
		
		return $result->result_array();
	}

	public function outboxMessages()
	{
		$username = $this->session->userdata('username');
		$sql = "SELECT * FROM `allMessages` WHERE messageFrom='$username' ORDER BY `dateTime` DESC";
		$result = $this->db->query($sql);
		
		return $result->result_array();
	}

	public function select_data()
    {
        $query = $this->db->get('report');
        return $query->result();
    }
}