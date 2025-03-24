<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class Bahan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $model = array('Bahan_model','Form_order_model');
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
            'get_bahan' => $this->Bahan_model->lihat_bahan()->result_array());
        $this->load->view('Template/header', $trans);
        $this->load->view('bahan/bahan_view', $data);
        $this->load->view('Template/footer');
    }

    public function bahan_create(){
        $data = array(
            'id_bahan' => $this->input->post('id_bahan'),
            'nama_bahan' => $this->input->post('nama_bahan'),
            'mesin_cetak' => $this->input->post('mesin_cetak')
            );
        $this->Bahan_model->create_bahan($data);
        redirect('bahan');
    }

    public function edit_bahan($id){
        $trans  = array(
        'trans' => $this->Form_order_model->lihat_form_order()->result_array());
        $data = array( 
            'get_edit'=>$this->Bahan_model->get_edit_bahan($id)->row_array());
        $this->load->view('Template/header', $trans);
        $this->load->view('bahan/bahan_edit', $data);
        $this->load->view('Template/footer');
    }

    public function bahan_update(){
        $id = $this->input->post('id');
        $data = array(
            'id_bahan' => $this->input->post('id_bahan'),
            'nama_bahan' => $this->input->post('nama_bahan'),
            'mesin_cetak' => $this->input->post('mesin_cetak')
            );
        $this->Bahan_model->update_bahan($data,$id); 
        redirect('Bahan');
    }
    
    public function bahan_delete($id){
        $this->Bahan_model->delete_bahan($id); 
        redirect('Bahan');
    }
} 
   