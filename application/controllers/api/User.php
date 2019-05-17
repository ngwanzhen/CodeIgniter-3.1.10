<?php

require APPPATH . 'libraries/REST_Controller.php';
header("Access-Control-Allow-Origin: *");

class User extends REST_Controller
{

    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function index_get($id = 0)
    {
        if (!empty($id)) {
            $data = $this->db->get_where("store_user", ['id' => $id])->row_array();
        } else {
            $data = $this->db->get("store_user")->result();
        }

        $this->response($data, REST_Controller::HTTP_OK);
    }

    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function index_post()
    {
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

        $this->response('Item created successfully.', REST_Controller::HTTP_OK);
    }
}
