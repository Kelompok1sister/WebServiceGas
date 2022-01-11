<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Produk extends REST_Controller {
    
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $produk = $this->db->get('produk')->result();
        } else {
            $this->db->where('id', $id);
            $produk = $this->db->get('produk')->result();
        }
        $this->response($produk, 200);
    }

    function item_get() {
        $id = $this->get('id');
        if ($id == '') {
            $produk = $this->db->get('item')->result();
        } else {
            $this->db->where('id_produk', $id);
            $produk = $this->db->get('item')->result();
        }
        $this->response($produk, 200);
    }

    function index_post() {
        $data = array(
                    'nama_produk' => $this->post('nama_produk'));
        $insert = $this->db->insert('produk', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_put() {
        $id = $this->put('id');
        $data = array(
                    'nama_produk' => $this->put('nama_produk'));
        $this->db->where('id', $id);
        $update = $this->db->update('produk', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('produk');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
