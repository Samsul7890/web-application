<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->library('session');
		$model = array('User_model','Form_order_model');
		$this->load->model($model);
	}

	public function index()
    {   $trans  = array(
        'trans' => $this->Form_order_model->lihat_form_order()->result_array());
        $data = array(
            'get_user' => $this->User_model->lihat_pengguna()->result_array());
        $this->load->view('Template/header', $trans);
        $this->load->view('User/user_view', $data);
        $this->load->view('Template/footer');
    }

    public function user_create(){
        $data = array(
            'nama_pengguna' => $this->input->post('nama_pengguna'),
            'password' => md5($this->input->post('password')),
            'level' => $this->input->post('level')
            );
        $this->User_model->create_user($data);
        redirect('User');
    }

    public function edit_user($id){
        $trans  = array(
        'trans' => $this->Form_order_model->lihat_form_order()->result_array());
        $data = array( 
            'get_edit'=>$this->User_model->get_edit_user($id)->row_array());
        $this->load->view('Template/header', $trans);
        $this->load->view('User/user_edit', $data);
        $this->load->view('Template/footer');
    }

    public function user_update($id){

        if( ! empty($_POST['password']))
			{
	        $data = array(
	         	'nama_pengguna' => $this->input->post('nama_pengguna'),
	            'password' => md5($this->input->post('password')),
	            'level' => $this->input->post('level')
	            );
	        $this->User_model->update_user($data,$id); 
	        redirect('User');
	    }
	    else{
	    	$data = array(
	         	'nama_pengguna' => $this->input->post('nama_pengguna'),
	            'level' => $this->input->post('level')
	            );
	        $this->User_model->update_user($data,$id); 
	        redirect('User');
	    }
    }
    
    public function user_delete($id){
        $this->User_model->delete_user($id); 
        redirect('User');
    }
}?>