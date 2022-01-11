<?php
Class Produk extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/ci-restserver/index.php/api";
    }
    
    function index(){
        $data['data'] = json_decode($this->curl->simple_get($this->API.'/produk'));
        $this->load->view('components/Header');
        $this->load->view('produk/List',$data);
    }
    
    function detail(){
        $params = array('id'=>  $this->uri->segment(3));
        $data['data'] = json_decode($this->curl->simple_get($this->API.'/produk',$params));
        $data['dataItem'] = json_decode($this->curl->simple_get($this->API.'/produk/item',$params));
        $this->load->view('components/Header');
        $this->load->view('produk/Detail',$data);
    }
}