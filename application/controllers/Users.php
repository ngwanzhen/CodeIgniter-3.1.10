<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('User_model');
    }

    public function index()
    {
        $this->load->view('form');
    }

    public function read()
    {
        $data['users'] = $this->User_model->get_users();
        $this->load->view('users/index', $data);
    }

    public function create()
    {
        $data = $this->User_model->set_user();
        // $this->User_model->set_user();
        $this->load->view('users/success', $data);
    }
}
