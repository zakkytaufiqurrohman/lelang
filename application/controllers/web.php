<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$data['data']    = $this->db->query("SELECT * FROM tbl_barang_lelang order by id_barang_lelang desc limit 4");
		$data['content'] = 'home';
		$this->load->view('index',$data);
	}
	public function login()
	{
		$data['content'] = 'login';
		$this->load->view('index',$data);
	}
	public function register()
	{
		$data['content'] = 'register';
		$this->load->view('index',$data);
	}
	public function cara()
	{
		$data['content'] = 'cara';
		$this->load->view('index',$data);
	}
	public function ketentuan()
	{
		$data['content'] = 'ketentuan';
		$this->load->view('index',$data);
	}

	public function info()
	{
		$data['content'] = 'info';
		$this->load->view('index',$data);
	}
	public function cari(){
		$keyword = $this->input->post('keyword');
		$data['data'] = $this->db->query("SELECT *
FROM tbl_barang_lelang
WHERE nama_barang LIKE '$keyword'");
		$data['keyword'] = $this->input->post('keyword');
		$data['content'] = "cari";
		$this->load->view('index',$data);

	}
	public function kategori(){
		if($this->session->userdata('username')){
		$username = $this->session->userdata('username');
		$sql = $this->db->query("SELECT * from tbl_pelelang where username = '$username'");
		foreach ($sql->result() as $key => $value) {
			
		}
		$data['id_pelelang'] = $value->id_pelelang;
		$data['data']   = $this->db->get_where('tbl_barang_lelang',$data);
		$data['content'] = 'kategori';
		$this->load->view('index',$data);
		}else{

		$data['data']   = $this->db->get('tbl_barang_lelang');
		$data['content'] = 'kategori';
		$this->load->view('index',$data);
		}
	}


	public function lelang()
	{	
		if($this->session->userdata('username')){
		$username = $this->session->userdata('username');
		$sql = $this->db->query("SELECT * from tbl_pelelang where username = '$username'");
		foreach ($sql->result() as $key => $value) {
			
		}
		$data['id_pelelang'] = $value->id_pelelang;
		$data['content'] = 'lelang';
		$this->load->view('index',$data);
		}else{
			redirect('index.php/web/register');
		}
	}

	public function detail_barang($id_barang_lelang){
		$data['id_barang_lelang'] = $id_barang_lelang;
		$data['data']             = $this->db->get_where('tbl_barang_lelang',$data);
		$data['content']          = 'detail_barang';
		$this->load->view('index',$data);
	}
	public function proses_add_kandidat(){
		$id_barang_lelang =  $this->input->post('id_barang_lelang');
		$nama_kandidat =  $this->input->post('nama_kandidat');
		$email =  $this->input->post('email');
		$harga =  $this->input->post('harga');
		$username = $this->session->userdata('username');

		$sql = $this->db->query("SELECT * FROM tbl_barang_lelang where id_barang_lelang='$id_barang_lelang'");
		foreach ($sql->result() as $key => $v) {
		$id_pelelang = $v->id_pelelang;
			
		}
		
		$data = array('id_barang_lelang' => $id_barang_lelang ,
					   'nama_kandidat'   => $nama_kandidat,
					   'email'	=>$email,
				       'id_pelelang'   => $id_pelelang,
					   'harga'   => $harga
					  
					   
		 );

		$this->db->insert('tbl_kandidat',$data);
		//echo var_dump($data);
		redirect('index.php/web/detail_barang/'.$id_barang_lelang);
	}

	public function data_barang(){
		$username = $this->session->userdata('username');
		$sql = $this->db->query("SELECT * from tbl_pelelang where username = '$username'");
		foreach ($sql->result() as $key => $value) {
			
		
		$data['data'] = $this->db->query("SELECT * FROM tbl_kandidat where id_pelelang='$value->id_pelelang'");
	}
		$data['content'] = "data_barang";
		$this->load->view('index',$data);
	}

	public function data_barang_all(){
		$username = $this->session->userdata('username');
		$sql = $this->db->query("SELECT * from tbl_pelelang where username = '$username'");
		foreach ($sql->result() as $key => $value) {
			
		
		$data['data'] = $this->db->query("SELECT * FROM tbl_barang_lelang where id_pelelang='$value->id_pelelang'");
	}
		$data['content'] = "data_barang_all";
		$this->load->view('index',$data);
	}

	public function edit_barang($id_barang_lelang){
		$data['id_barang_lelang'] = $id_barang_lelang;
		$data['data'] = $this->db->get_where('tbl_barang_lelang',$data);
		$data['content'] = 'edit_barang';
		$this->load->view('index',$data);
	}

	public function pilih(){
		$id_barang_lelang = $this->input->post('id_barang_lelang');
		$id_komentar = $this->input->post('id_komentar');
		$data = array('status' => 1 );
		$this->db->where('id_komentar',$id_komentar);
		$this->db->update('tbl_kandidat',$data);
		$this->db->where('id_barang_lelang',$id_barang_lelang);
		$this->db->update('tbl_barang_lelang',$data);
		redirect('index.php/web/data_barang');
	}
	public function pilih_barang($id_barang_lelang){
		$data['id_barang_lelang'] = $id_barang_lelang;
		$data = array('status' => 1 );
		$this->db->where('id_barang_lelang',$id_barang_lelang);
		$this->db->update('tbl_barang_lelang',$data);
		redirect('index.php/web/kategori');
	}
	public function proses_add_lelang(){
		$kode_barang  =  $this->input->post('kode_barang');
		$id_pelelang  =  $this->input->post('id_pelelang');
		$nama_pelelang  =  $this->input->post('nama_pelelang');
		$tanggal_buka  =  $this->input->post('tanggal_buka');
		$nama_barang  =  $this->input->post('nama_barang');
		$keterangan  =  $this->input->post('keterangan');
		$tanggal_selesai  =  $this->input->post('tanggal_selesai');
		$harga_buka  =  $this->input->post('harga_buka');
		$lokasi  =  $this->input->post('lokasi');
		$file  =  $_FILES['userfile']['name'];;

		  $config['upload_path']          = 'assets/foto_lelang';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']             = '82024';
                $config['max_width']            = '82600';
                $config['max_height']           = '82200';
                $this->load->library('upload', $config);


                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());
                        redirect('index.php/web/lelang');
               }
                else
                {
                        $data = array('upload_data' => $this->upload->data());  
                        $data = array('kode_barang'       => $kode_barang,
                        			  'id_pelelang'     => $id_pelelang,
                        			  'nama_barang'     => $nama_barang,
                        			  'tanggal_buka'      => $tanggal_buka,
                        			  'tanggal_selesai'   => $tanggal_selesai,
                        			  'harga_buka'		  => $harga_buka,
                        			  'keterangan'		  => $keterangan,
                        			  'lokasi'		      => $lokasi,
                        			  'foto'              => $file
                         );     

                        	$this->db->insert('tbl_barang_lelang',$data);
                        	redirect('index.php/web/data_barang_all');


                 }
	}


	public function proses_edit_lelang(){
		$id_barang_lelang  =  $this->input->post('id_barang_lelang');
		$kode_barang  =  $this->input->post('kode_barang');
		$id_pelelang  =  $this->input->post('id_pelelang');
		$nama_pelelang  =  $this->input->post('nama_pelelang');
		$tanggal_buka  =  $this->input->post('tanggal_buka');
		$nama_barang  =  $this->input->post('nama_barang');
		$keterangan  =  $this->input->post('keterangan');
		$tanggal_selesai  =  $this->input->post('tanggal_selesai');
		$harga_buka  =  $this->input->post('harga_buka');
		$lokasi  =  $this->input->post('lokasi');
		$file  =  $_FILES['userfile']['name'];;

		if($file == ''){

                        $data = array('kode_barang'       => $kode_barang,
                        			  'id_pelelang'       => $id_pelelang,
                        			  'nama_barang'    	  => $nama_barang,
                        			  'tanggal_buka'      => $tanggal_buka,
                        			  'tanggal_selesai'   => $tanggal_selesai,
                        			  'harga_buka'		  => $harga_buka,
                        			  'keterangan'		  => $keterangan,
                        			  'lokasi'		      => $lokasi
                         );     

                        	$this->db->where('id_barang_lelang',$id_barang_lelang);
                        	$this->db->update('tbl_barang_lelang',$data);
                        	redirect('index.php/web/data_barang_all');


                 
             }else{

             	$config['upload_path']          = 'assets/foto_lelang';
                $config['allowed_types']        = 'gif|jpg|png|JPG|jpeg';
                $config['max_size']             = '82024';
                $config['max_width']            = '82600';
                $config['max_height']           = '82200';
                $this->load->library('upload', $config);


                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());
                        redirect('index.php/web/lelang');
               }
                else
                {
                        $data = array('upload_data' 	  => $this->upload->data());  
                        $data = array('kode_barang'       => $kode_barang,
                        			  'id_pelelang'    	  => $id_pelelang,
                        			  'nama_barang'       => $nama_barang,
                        			  'tanggal_buka'      => $tanggal_buka,
                        			  'tanggal_selesai'   => $tanggal_selesai,
                        			  'harga_buka'		  => $harga_buka,
                        			  'keterangan'		  => $keterangan,
                        			  'lokasi'		      => $lokasi,
                        			  'foto'              => $file
                         );     

                        	$this->db->where('id_barang_lelang',$id_barang_lelang);
                        	$this->db->update('tbl_barang_lelang',$data);
                        	redirect('index.php/web/data_barang_all');


                 }

             }


	}
	public function proses_register(){
		$nama_pelelang = $this->input->post('nama_pelelang');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');

		$data = array('nama_pelelang' => $nama_pelelang ,
					  'username' => $username,
					  'password' => $password,
					  'alamat' => $alamat,
					  'no_hp' => $no_hp,
		 );

		$this->db->insert('tbl_pelelang',$data);
		redirect('index.php/web/login');
	}

	public function hapus_barang($id_barang_lelang){
			$data['id_barang_lelang']	= $id_barang_lelang;
			$sql			= $this->db->delete('tbl_barang_lelang',array('id_barang_lelang'=>$id_barang_lelang));
			$sql			= $this->db->delete('tbl_kandidat',array('id_barang_lelang'=>$id_barang_lelang));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $id_barang_lelang ?>");window.location="<?php echo base_url(); ?>index.php/web/data_barang_all";
			</script>
			<?php	
		}else{
			?>	
			gagal
			<?php	
		}
		
	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */