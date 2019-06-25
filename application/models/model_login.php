<?php
	
	class Model_login extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}
		
		function pelelang($username, $password)
		{
            $this->load->database();
			$this -> db -> select('username, password');
			$this -> db -> from('tbl_pelelang');
			$this -> db -> where('username', $username);
			$this -> db -> where('password', $password);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				
				$result = $query->result();
				
				return $result;
			}
			else
			{
				return false;
			}
		}

		function admin($username, $password)
		{
            $this->load->database();
			$this -> db -> select('nm_admin, password');
			$this -> db -> from('tbl_admin');
			$this -> db -> where('nm_admin', $username);
			$this -> db -> where('password', $password);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				
				$result = $query->result();
				
				return $result;
			}
			else
			{
				return false;
			}
		}
		function kode_lock($kode)
		{
            $this->load->database();
			$this -> db -> select('kode');
			$this -> db -> from('tbl_validation');
			$this -> db -> where('kode', $kode);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				
				$result = $query->result();
				
				return $result;
			}
			else
			{
				return false;
			}
		}
		function member($email, $password)
		{
            $this->load->database();
			$this -> db -> select('email, password,status');
			$this -> db -> from('tbl_member');
			$this -> db -> where('email', $email);
			$this -> db -> where('password', $password);
			$this -> db -> where('status', 'bismillahirrahmanirrahim');
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				
				$result = $query->result();
				
				return $result;
			}
			else
			{
				return false;
			}
		}
		
	}