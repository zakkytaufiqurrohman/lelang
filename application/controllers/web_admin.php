<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web_admin extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('nm_admin')){
		$data['content']  = 'web-admin/home';

		$this->load->view('web-admin/index',$data);
		}else{
			$this->load->view('web-admin/login');
		}
	}

	public function data_pelelang(){
		$data['data'] = $this->db->get('tbl_pelelang');
		$data['content']  = 'web-admin/data_pelelang';
		$this->load->view('web-admin/index',$data);
	}
	public function galeri(){
		$data['data'] = $this->db->get('tbl_barang_lelang');
		$data['content']  = 'web-admin/galeri';
		$this->load->view('web-admin/index',$data);
	}
	public function data_barang(){
		$data['data'] = $this->db->get('tbl_barang_lelang');
		$data['content']  = 'web-admin/data_barang';
		$this->load->view('web-admin/index',$data);
	}
	public function data_admin(){
		$data['data'] = $this->db->get('tbl_admin');
		$data['content']  = 'web-admin/data_admin';
		$this->load->view('web-admin/index',$data);
	}

	public function konfirmasi_pelelang($id_pelelang){
		$data['id_pelelang'] = $id_pelelang;
		$data = array('status' => 1  );
		$this->db->where('id_pelelang',$id_pelelang);
		$this->db->update('tbl_pelelang',$data);
		redirect('index.php/web_admin/data_pelelang');

	}
	
	public function data_kandidat(){
		$data['data'] = $this->db->query("SELECT * FROM tbl_kandidat 
											
			");
		$data['content']  = 'web-admin/data_kandidat';
		$this->load->view('web-admin/index',$data);
	}
	
	
 public function hapus_pelelang($id_pelelang){
			$data['id_pelelang']	= $id_pelelang;
			$sql			= $this->db->delete('tbl_pelelang',array('id_pelelang'=>$id_pelelang));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $id_pelelang ?>");window.location="<?php echo base_url(); ?>index.php/web_admin/data_pelelang";
			</script>
			<?php	
		}else{
			?>	
			gagal
			<?php	
		}
		
	}

	public function hapus_barang($id_barang_lelang){
			$data['id_barang_lelang']	= $id_barang_lelang;
			$sql			= $this->db->delete('tbl_barang_lelang',array('id_barang_lelang'=>$id_barang_lelang));
			$sql			= $this->db->delete('tbl_kandidat',array('id_barang_lelang'=>$id_barang_lelang));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $id_barang_lelang ?>");window.location="<?php echo base_url(); ?>index.php/web_admin/data_barang";
			</script>
			<?php	
		}else{
			?>	
			gagal
			<?php	
		}
		
	}

	public function hapus_kandidat($id_komentar){
			$data['id_komentar']	= $id_komentar;
			$sql			= $this->db->delete('tbl_kandidat',array('id_komentar'=>$id_komentar));
			if($sql){
			?>	
			<script type="text/javascript">
			alert("sukses di hapus data <?php echo $id_komentar ?>");window.location="<?php echo base_url(); ?>index.php/web_admin/data_kandidat";
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