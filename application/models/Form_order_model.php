<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

	class Form_order_model extends CI_Model{  
		public function __construct()
	    {
	        parent::__construct();
	        $this->load->database();
	    }
 		public function add_form($data){
			$this->db->from('form_order');
			$this->db->insert('form_order',$data);
 		}

 		public function get_id_bahan($nama_bahan){
		return $this->db
			->select('id_bahan')
			->where('nama_bahan', $nama_bahan)
			->limit(1)
			->get('bahan');
	    }
	    public function auto_pelanggan($nama_pelanggan){
		return $this->db
			->select('nama_pelanggan, id_pelanggan, telp')
			->where('nama_pelanggan', $nama_pelanggan)
			->limit(1)
			->get('pelanggan');
	    }

	    public function lihat_form_order()
	    {
			$this->db->from('form_order');
			$this->db->order_by('tanggal','DESC');
			$this->db->join('pelanggan', 'pelanggan.id_pelanggan = form_order.id_pelanggan');
			return $this->db->get();
		} 
		public function get_edit_fo($id){
			$this->db->from('form_order');
			$this->db->join('pelanggan', 'pelanggan.id_pelanggan = form_order.id_pelanggan');
			$this->db->where('id_form', $id);
			return $this->db->get();
		}
		public function get_option(){
			$this->db->from('pelanggan');
			return $this->db->get();
		}
		public function update_form($data,$id_form)
		{
		    $this->db->from('form_order');
		    $this->db->where('id_form', $id_form);
		    $this->db->update('form_order', $data);
		}
		public function delete_form($id){
			$this->db->from('form_order');
			$this->db->where('id_form', $id);
			return $this->db->delete('form_order');
		}

		public function delete_form_detail($id){
			$this->db->from('pesanan');
			$this->db->where('id_form_pesan', $id);
			return $this->db->delete('pesanan');
		}

		public function add_pesanan( $id_form_pesan, $id_bahan, $nama_file, $panjang, $tinggi, $qty, $finishing, $total){
			$dt = array(
				
				'id_form_pesan' => $id_form_pesan,
				'id_bahan' => $id_bahan,
				'nama_file' => $nama_file,
				'panjang' => $panjang,
				'tinggi' => $tinggi,
				'qty' => $qty,
				'finishing' => $finishing,
				'total' => $total,
				);

			$this->db->from('pesanan');
			return $this->db->insert('pesanan',$dt);
 		}
		public function get_detail_pemesan($id){
			$this->db->from('pesanan');
		//	$this->db->join('bahan', 'bahan.id_bahan = pesanan.id_bahan');
			$this->db->join('form_order', 'form_order.id_form = pesanan.id_form_pesan');
			$this->db->join('pelanggan', 'pelanggan.id_pelanggan = form_order.id_pelanggan');
			$this->db->where('id_form_pesan', $id);
			return $this->db->get();
		}
		public function get_detail_total($id){
		return $this->db
			->select('id_bahan')
			->where('id_form_pesan', $id)
			
			->get('pesanan');
		}

		public function get_detail_pesanan($id){
			$this->db->from('pesanan');
			$this->db->join('bahan', 'bahan.id_bahan = pesanan.id_bahan');
		//	$this->db->join('form_order', 'form_order.id_form = pesanan.id_form_pesan');
		//	$this->db->join('pelanggan', 'pelanggan.id_pelanggan = form_order.id_pelanggan');
			$this->db->where('id_form_pesan', $id);
			return $this->db->get();
		}
		public function get_edit_detail($id){
			$this->db->from('pesanan');
			$this->db->join('bahan', 'bahan.id_bahan = pesanan.id_bahan');
			$this->db->join('form_order', 'form_order.id_form = pesanan.id_form_pesan');
			$this->db->join('pelanggan', 'pelanggan.id_pelanggan = form_order.id_pelanggan');
			$this->db->where('id_pesanan', $id);
			return $this->db->get();
		}

		public function update_detail($data,$id)
		{
		    $this->db->from('pesanan');
		    $this->db->where('id_pesanan', $id);
		    $this->db->update('pesanan', $data);
		}

		public function return_detail($id){
			$this->db->from('pesanan');
			$this->db->where('id_pesanan', $id);
			return $this->db->get();
		}

		public function delete_detail($id){
			$this->db->from('pesanan');
			$this->db->where('id_pesanan', $id);
			return $this->db->delete('pesanan');
		}


	} 