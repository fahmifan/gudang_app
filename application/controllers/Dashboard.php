<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('gudang_model');
    }   

    public function index()
    {
        $data['stock'] = $this->gudang_model->get_data();
        $this->load->view('templates/header');
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }

    public function input()
    {
        $data['barang'] = null;
        $this->load->view('templates/header');
        $this->load->view('input', $data);        
        $this->load->view('templates/footer');
    }

    public function input_data()
    {
        $data_input = array( 
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('jumlah')
        );
        $result = $this->gudang_model->input_data($data_input);
        if(!$result) {
            echo "Sorry there is Error";
            return;
        }
        redirect(base_url('index.php/dashboard/'));
    }

    public function delete_data()
    {
        $id = $this->input->get('id');
        $result = $this->gudang_model->delete($id);
        if(!$result) {
            echo "There is an error";
            return;
        }
        redirect(base_url('index.php/dashboard/'));
    }

    public function edit() 
    {
        $id = $this->uri->segment(3);
        $result = $this->gudang_model->get_data_id($id);
        $data['barang'] = $result->row();
        $data['id'] = $id;
        $this->load->view('templates/header');
        $this->load->view('edit', $data);        
        $this->load->view('templates/footer');
    }

    public function edit_data()
    {
        $id = $this->uri->segment(3);        
        $data_input = array( 
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('jumlah')
        );
        $result = $this->gudang_model->edit_data($data_input, $id);
        // var_dump($result); die();
        if(!$result) {
            echo "There is an error";
        }
        redirect(base_url('index.php/dashboard/'));
    }
}