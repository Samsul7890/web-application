<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

	class User_model extends CI_Model{  
		public function __construct()
	    {
	        parent::__construct();
	        $this->load->database();
	    }
	    function validasi_login($username, $password)
		{
		return $this->db
			->select('id_user, nama_pengguna, password, level', false)
			->where('nama_pengguna', $username)
			->where('password', md5($password))
			->limit(1)
			->get('user');
		}
		public function lihat_pengguna(){
			$this->db->from('user');
			return $this->db->get();
		}
		public function get_edit_user($id){
			$this->db->from('user');
			$this->db->where('id_user',$id);
			return $this->db->get();
		}

		public function update_user($data, $id)
		{
		    $this->db->from('user');
		    $this->db->where('id_user', $id);
		    $this->db->update('user', $data);
		}

		public function create_user($data)
		{
		    $this->db->from('user');
		    $this->db->insert('user', $data);
		}

		public function delete_user($id)
		{
		    $this->db->from('user');
		    $this->db->where('id_user', $id);
		    $this->db->delete('user');
		}
	}