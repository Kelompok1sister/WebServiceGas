<?php
Class Home extends CI_Controller{
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('components/Header');
        $this->load->view('VHome');
    }
}