<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

	class Pelanggan_model extends CI_Model{  
		public function __construct()
	    {
	        parent::__construct();
	        $this->load->database();
	    }
		public function lihat_pelanggan(){
			$this->db->from('pelanggan');
			return $this->db->get();
		}
		public function get_edit_pelanggan($id){
			$this->db->from('pelanggan');
			$this->db->where('nama_pelanggan',$id);
			return $this->db->get();
		}

		public function update_pelanggan($data,$id_pelanggan)
		{
		    $this->db->from('pelanggan');
		    $this->db->where('id_pelanggan', $id_pelanggan);
		    $this->db->update('pelanggan', $data);
		}

		public function create_pelanggan($data)
		{
		    $this->db->from('pelanggan');
		    $this->db->insert('pelanggan', $data);
		}

		public function delete_pelanggan($id)
		{
		    $this->db->from('pelanggan');
		    $this->db->where('nama_pelanggan', $id);
		    $this->db->delete('pelanggan');
		}
	}  