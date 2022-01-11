<?php

class Form extends CI_Controller {


var $API ="";

public function __construct() {
parent::__construct();

$this->API = "http://192.168.1.22/native/";
$this->load->library('session');
$this->load->library('curl');
$this->load->helper('form');
$this->load->helper('url');
}

// Load view page
public function index() {
$data['data'] = json_decode($this->curl->simple_get($this->API.'/read.php'));
$this->load->view('components/Header');
$this->load->view("view_form",$data);
}

// simpan data produk
    function simpan() {
        if (isset($_POST['submit'])) {
            $data = array(
                'id_pembeli' => $this->input->post('id_pembeli'),
                'nama_pembeli' => $this->input->post('nama_pembeli'),
                'no_telp' => $this->input->post('no_telp'),
                'alamat' => $this->input->post('alamat'));
            $insert = $this->curl->simple_post($this->API . '/insert.php', $data);
            if ($insert) {
                $this->session->set_flashdata('info', 'data berhasil disimpan.');
            } else {
                $this->session->set_flashdata('info', 'data gagal disimpan.');
            }
            redirect("form");
        } else {
            $this->load->view('produk/List');
        }
    }

// Fetch user data and convert data into json


}

?>