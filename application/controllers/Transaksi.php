<?php
Class Transaksi extends CI_Controller{



    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://192.168.1.22/native/";
    }
    
    
    
    function index(){
        $data['data'] = json_decode($this->curl->simple_get($this->API.'/read.php'));
        $this->load->view('components/Header');
        $this->load->view('transaksi/tambah',$data);
    }

    function simpan() {
        if (isset($_POST['submit'])) {
            $data = array(
                'nama_produk' => $this->input->post('nama_produk'),
                'tipe_produk' => $this->input->post('tipe_produk'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok'));
            $insert = $this->curl->simple_post($this->api . '/produk', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                $this->session->set_flashdata('info', 'data berhasil disimpan.');
            } else {
                $this->session->set_flashdata('info', 'data gagal disimpan.');
            }
            redirect('produk');
        } else {
            $this->load->view('produk/v_form');
        }
    }

    
    
    
}