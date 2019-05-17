<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_users($user = false)
    {
        if ($user === false) {
            $query = $this->db->get('store_user');
            return $query->result_array();
        }

        $query = $this->db->get_where('Users', array('username' => $user));
        return $query->row_array();
    }

    public function set_user()
    {
        $this->load->helper('url');

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if (!$username || !$password) {
            throw new Exception('BAD INPUT.');
        }

        $data = array(
            'username' => $username,
            'password' => $password,
        );

        return $this->db->insert('store_user', $data);

    }

}
