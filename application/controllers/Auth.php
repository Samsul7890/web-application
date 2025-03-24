<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url','form','html');
		$this->load->model('User_model');
	}
	public function index()
	{	
		if($this->session->userdata('level') == 'Administrator') 
        {
            return redirect('Form_order');
        }
        
		//$title = $this->title;
		$this->load->view('login');
	}
	public function login_user()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        // if ($this->form_validation->run())
        // {
        //    $username = $this->input->post('username');
        //    $password = $this->input->post('password');
        //    $this->m_users->user_login($username,$password);
        // }
        if($this->form_validation->run() == TRUE)
        {
            $username   = $this->input->post('username');
            $password   = $this->input->post('password');

            $this->load->model('User_model');
            $validasi_login = $this->User_model->validasi_login($username, $password);

            if($validasi_login->num_rows() > 0)
            {
                $data_user = $validasi_login->row();

                $session = array(
                    'id_user' => $data_user->id_user,
                    'password' => $data_user->password,
                    'username'=>$data_user->nama_pengguna,
                    'level' => $data_user->level,
                );
                $this->session->set_userdata($session); 

                if ($data_user->level == 'Administrator') {
                    echo "<script>alert('Selamat Datang $data_user->nama_pengguna Anda berhasil login');</script>";
                    redirect('Form_order','refresh');
                } elseif ($data_user->level == 'Deskprint'){
                    echo "<script>alert('Selamat Datang $data_user->nama_pengguna Anda berhasil login');</script>";
                    redirect('Form_order/buat_form','refresh');
                } else{
                    echo "<script>alert('Selamat Datang $data_user->nama_pengguna Anda berhasil login');</script>";
                    redirect('Form_order','refresh');
                }
                
            }
            else
            {
                $this->session->set_flashdata('login_response', 'Login Gagal!! Username Dan Password Tidak Valid!!');
                redirect('Auth');
            }
        }
        else
        {
            $this->index();
        }	
    }
    public function logout()
    {
    	$this->session->sess_destroy();
        $this->session->unset_userdata(array('level', 'username'));
        redirect('Auth');
    }
}