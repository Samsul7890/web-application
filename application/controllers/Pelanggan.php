<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $model = array('Pelanggan_model','Form_order_model');
        $this->load->model($model);
        //if (!$this->session->has_userdata('session_id')) {
         //   $this->session->set_flashdata('alert', 'belum_login');
         //   redirect(base_url('admin/login'));
        //}
    }

    public function index()
    {   $trans  = array(
        'trans' => $this->Form_order_model->lihat_form_order()->result_array());
        $data = array(
            'get_pelanggan' => $this->Pelanggan_model->lihat_pelanggan()->result_array());
        $this->load->view('Template/header', $trans);
        $this->load->view('Pelanggan/pelanggan_view', $data);
        $this->load->view('Template/footer');
    }

    public function pelanggan_create(){
        $id = '';
        $data = array(
            'id_pelanggan' => $id,
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'telp' => $this->input->post('telp')
            );
        $this->Pelanggan_model->create_pelanggan($data);
        redirect('pelanggan');
    }

    public function edit_pelanggan($id){
        $trans  = array(
        'trans' => $this->Form_order_model->lihat_form_order()->result_array());
        $data = array( 
            'get_edit'=>$this->Pelanggan_model->get_edit_pelanggan($id)->row_array());
        $this->load->view('Template/header',$trans);
        $this->load->view('Pelanggan/pelanggan_edit', $data);
        $this->load->view('Template/footer');
    }

    public function pelanggan_update(){
        $id_pelanggan = $this->input->post('id_pelanggan'); 
        $data = array(
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'telp' => $this->input->post('telp')
            );
        $this->Pelanggan_model->update_pelanggan($data,$id_pelanggan); 
    }
    public function pelanggan_delete($id){
        $this->Pelanggan_model->delete_pelanggan($id); 
        redirect('pelanggan');
    }


} 
   