<?php 
//error_reporting(0);

class Login_pelelang extends ci_controller{

	public function __construct(){
        parent::__construct();
        $this->load->model('model_login');                 
    }

	public function index(){

		$username       		= $this->input->post('username');
		$password			    = $this->input->post('password');

		$sql = $this->db->query("SELECT * FROM tbl_pelelang where username='$username'");
		foreach ($sql->result() as $row) {
		
				if($row->status ==0){
					$data['status'] = '0';
					$data['username']  = $username;
					$data['content']  = 'login';
					$this->load->view('index',$data);
				
			}else{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');// disini terdapat callback : callback_check_database. digunakan untuk memanggil function check_database() dibawah.

        		if($this->form_validation->run() == FALSE){
        			//redirect('login?gagal=1','refresh');
        			redirect('index.php/web/login?gagal=1','refresh');

				  }else{
				        			redirect('index.php/web/lelang','refresh');
				        		}
					}


			}
		}
	public function check_database(){
		$username		= $this->input->post('username');
		$password			= $this->input->post('password');

        $this->load->model('model_login');                 
		$result=$this->model_login->pelelang($username,$password);

		if($result){
			foreach($result as $row){

				$this->session->set_userdata('username',$row->username);
			}
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function sigup(){
		$nama_member		= $this->input->post('nama_member');
		$email_member		= $this->input->post('email_member');
		$password_member	= $this->input->post('password_member');
		$no_hp				= $this->input->post('no_hp');
		$alamat				= $this->input->post('alamat');
		$tahun				= $this->input->post('tahun');
		$bulan				= $this->input->post('bulan');

		$data = array('nama_member' 		=> $nama_member ,
					  'email_member' 		=> $email_member,
					  'password_member' 	=> $password_member,
					  'no_hp'			 	=> $no_hp,
					  'bulan'			 	=> $bulan,
					  'tahun'			 	=> $tahun,
					  'alamat'			 	=> $alamat
		 );
			$sukses  = $this->db->insert('tbl_member',$data);
			if($sukses){
				$sql = "SELECT id_member from tbl_member order by id_member desc limit 1";
				$rs=$this->db->query($sql);

				foreach ($rs->result() as $key) {
					$s="INSERT INTO tbl_cart set id_member='$key->id_member'";
					$this->db->query($s);
				}
				$data['data'] = "1";
				$this->load->view('v_login',$data);
			}else{
				$this->load->view('v_login');
			}

	}




public function logout(){
        $this->session->unset_userdata('username');
        redirect('index.php','refresh');
    }
}