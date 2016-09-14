<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class VerifyLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', true);
        $this->load->model('destination', '', true);
    }

    public function index()
    {
        //This method will have the credentials validation
   		$this->load->helper('security');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if ($this->form_validation->run() == false) {
            //Field validation failed.  User redirected to login page
     $this->load->view('login_view');
        } else {
            //Go to private area
     redirect('home', 'refresh');
     //var_dump($this->session->userdata('logged_in'));
        }
    }

    public function check_database($password)
    {
        //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
      'id' => $row->id,
      'username' => $row->username,
      'fullname' => $row->fullName,
      'role' => $row->role,
      'avatar' => $row->avatar,
      'entityId' => $row->entityId,
       );

                $entityid = $row->entityId;
                //check if agent then add entitytype and typeid

                $this->session->set_userdata('logged_in', $sess_array);
            }

            return true;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');

            return false;
        }
    }
}
