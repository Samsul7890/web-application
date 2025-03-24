<?php if(! defined('BASEPATH'))exit('No direct script access allowed');

class Form_order extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $model = array('Form_order_model','Bahan_model');
        $helper = array('tgl_indo');
        $this->load->helper($helper);
        $this->load->model($model);
        date_default_timezone_set('Asia/jakarta');
        //if (!$this->session->has_userdata('session_id')) {
         //   $this->session->set_flashdata('alert', 'belum_login');
         //   redirect(base_url('admin/login'));
        //}
    }
 
    public function index()
    {   $trans  = array(
        'trans' => $this->Form_order_model->lihat_form_order()->result_array());

        $data = array(
            'get_order' => $this->Form_order_model->lihat_form_order()->result_array());
        $this->load->view('Template/header',$trans);
        $this->load->view('Form_order/form_order_view', $data);
        $this->load->view('Template/footer');
    }

    public function buat_form(){
        $trans  = array(
        'trans' => $this->Form_order_model->lihat_form_order()->result_array());
        $id_form ='FO-' . substr(time(), 5);
        $tanggal = date("y-m-d h:i:s");
        $data = array(
            'id_form' => $id_form,
            'tanggal' => $tanggal,
            'option' => $this->Form_order_model->get_option()->result_array(),
            'bahan' => $this->Bahan_model->lihat_bahan()->result_array(),
            'deskprint' => $this->session->userdata('username')
            );

        $this->load->view('Template/header', $trans);
        $this->load->view('Form_order/buat_form', $data);
        $this->load->view('Template/footer');
    }
    public function add_form(){
        $nama_pelanggan = $this->input->post('nama_pelanggan');
        $id = $this->Form_order_model->auto_pelanggan($nama_pelanggan)->row(); 

        
        $nama_file = $_POST['nama_file'];


        $data = array(
            'deskprint' => $this->input->post('deskprint'),
            'id_form' => $this->input->post('id_form'),
            'tanggal' => $this->input->post('tanggal'),
            'id_pelanggan' => $id->id_pelanggan,
            'status' => 'Belum Pembayaran');
        $this->Form_order_model->add_form($data); 



        $index = 0; // Set index array awal dengan 0
        foreach($nama_file as $datanama){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                
                $id_form_pesan = $this->input->post('id_form');
                $nama_file = $datanama;
                $nama_bahan = $_POST['nama_bahan'][$index];
                $id_bahan = $this->Form_order_model->get_id_bahan($nama_bahan)->row()->id_bahan;
                $panjang = $_POST['panjang'][$index];
                $tinggi = $_POST['tinggi'][$index];
                $qty = $_POST['qty'][$index];
                $finishing = $_POST['finishing'][$index];
                $total = $_POST['total'][$index];

            $this->Form_order_model->add_pesanan($id_form_pesan, $id_bahan, $nama_file, $panjang, $tinggi, $qty, $finishing, $total); 
            $index++;
        }
        redirect('Form_order/buat_form');
    }


    public function auto_pelanggan()
    {
        if($this->input->is_ajax_request())
        {
            $nama_pelanggan = $this->input->post('nama_pelanggan');
            

            $data = $this->Form_order_model->auto_pelanggan($nama_pelanggan)->row();
            $json['id_pelanggan']           = ( ! empty($data->id_pelanggan)) ? $data->id_pelanggan : "<i>Pelanggan Baru! Silahkan Tambah Pelanggan<i>";
            $json['telp']           = ( ! empty($data->telp)) ? $data->telp : "<i>Tidak ada</i>";
            
            echo json_encode($json);
        }
    }

    public function edit_fo($id)
    {   $trans  = array(
        'trans' => $this->Form_order_model->lihat_form_order()->result_array());
        $get = $this->Form_order_model->get_edit_fo($id)->row_array();
        //$option = $this->Form_order_model->get_option()->result_array();

        $data = array (
            'data'=> $get,  
            'option' => $this->Form_order_model->get_option()->result_array()       
            );
        //$title = $this->title;
        $this->load->view('Template/header', $trans);
        $this->load->view('Form_order/form_order_edit', $data);
        $this->load->view('Template/footer');
    }

    public function update(){ 
        $id_form = $this->input->post('id_form'); 
        $data = array(
        'id_pelanggan' => $this->input->post('id_pelanggan'),
        'tanggal' => date("y-m-d h:i:s"),
        'status' => $this->input->post('status'),
        'deskprint' => $this->input->post('deskprint')
            );
        $this->Form_order_model->update_form($data,$id_form); 
        redirect('Form_order');
    }

    public function delete_form($id){
        $this->Form_order_model->delete_form_detail($id);
        $this->Form_order_model->delete_form($id);
        redirect('');
    }

    public function lihat($id){
        $trans  = array(
        'trans' => $this->Form_order_model->lihat_form_order()->result_array());
    $transaksi = $this->Form_order_model->get_detail_pemesan($id)->row_array();
//      echo '<pre>';
//      var_dump($konfirmasi);die;
    $data = array(
        'transaksi' => $transaksi,
        'pesanan' => $this->Form_order_model->get_detail_pesanan($transaksi['id_form'])->result_array(),
        'total' => $this->Form_order_model->get_detail_total($transaksi['id_form'])->result_array(),
//        'stiker' => $this->BayarModel->lihat_keranjang_stiker($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
//        'kartu' => $this->BayarModel->lihat_keranjang_kartu($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
//        'brosur' => $this->BayarModel->lihat_keranjang_brosur($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
    );
    $this->load->view('Template/header', $trans);
    $this->load->view('Detail_order/detail_view',$data);
    $this->load->view('Template/footer');
    }

    public function edit_detail($id)
    {   $trans  = array(
        'trans' => $this->Form_order_model->lihat_form_order()->result_array());
        $detail = $this->Form_order_model->get_edit_detail($id)->row_array();
        //$option = $this->Form_order_model->get_option()->result_array();

        $data = array (
            'data'=> $detail, 
            'bahan' =>  $this->Bahan_model->lihat_bahan()->result_array()
   
            );
        //$title = $this->title;
        $this->load->view('Template/header', $trans);
        $this->load->view('Detail_order/detail_edit', $data);
        $this->load->view('Template/footer');
    }
    public function add_pesanan($id){
        $nama_file = $_POST['nama_file'];
        
        $index = 0; // Set index array awal dengan 0
        foreach($nama_file as $datanama){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                
                $id_form_pesan = $this->input->post('id_form');
                $nama_file = $datanama;
                $nama_bahan = $_POST['nama_bahan'][$index];
                $id_bahan = $this->Form_order_model->get_id_bahan($nama_bahan)->row()->id_bahan;
                $panjang = $_POST['panjang'][$index];
                $tinggi = $_POST['tinggi'][$index];
                $qty = $_POST['qty'][$index];
                $finishing = $_POST['finishing'][$index];
                $total = $_POST['total'][$index];

            $this->Form_order_model->add_pesanan($id_form_pesan, $id_bahan, $nama_file, $panjang, $tinggi, $qty, $finishing, $total); 
            $index++;
        }
        redirect('Form_order/lihat/'.$id);
    }
    public function update_detail($id){
        $back=$this->Form_order_model->return_detail($id)->row_array();
        $id_form = $this->input->post('id_form'); 
        $data = array(
        'nama_file' => $this->input->post('nama_file'),
        'id_bahan' => $this->input->post('id_bahan'),
        'panjang' => $this->input->post('panjang'),
        'tinggi' => $this->input->post('tinggi'),
        'qty' => $this->input->post('qty'),
        'finishing' => $this->input->post('finishing'),
        'total' => $this->input->post('total'),
        'status_cetak' => $this->input->post('status_cetak'),
            );
        $this->Form_order_model->update_detail($data,$id); 
        redirect('Form_order/lihat/'.$back['id_form_pesan']);
    }

    public function delete_detail($id){
        $back=$this->Form_order_model->return_detail($id)->row_array();
        $this->Form_order_model->delete_detail($id);
        redirect('Form_order/lihat/'.$back['id_form_pesan']);
    }
   
}
   