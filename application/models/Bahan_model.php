<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

	class Bahan_model extends CI_Model{  
		public function __construct()
	    {
	        parent::__construct();
	        $this->load->database();
	    }
		public function lihat_bahan(){
			$this->db->from('bahan');
			return $this->db->get();
		}
		public function get_edit_bahan($id){
			$this->db->from('bahan');
			$this->db->where('id_bahan',$id);
			return $this->db->get();
		}

		public function update_bahan($data, $id)
		{
		    $this->db->from('bahan');
		    $this->db->where('id_bahan', $id);
		    $this->db->update('bahan', $data);
		}

		public function create_bahan($data)
		{
		    $this->db->from('bahan');
		    $this->db->insert('bahan', $data);
		}

		public function delete_bahan($id)
		{
		    $this->db->from('bahan');
		    $this->db->where('id_bahan', $id);
		    $this->db->delete('bahan');
		}
	}  