<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Masterdata extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('roler');
        $this->load->model('user');
        $this->load->model('masterdatax');
    }

    public function asset()
    {

     //Pretty much standard...
     $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $roler = getMenu($session_data['role']);
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view($roler, $session_data);

     //Let's load the body
     $hasil['hasil'] = $this->user->getUserList();
        $this->load->view('master_asset', $hasil);
    }


    public function user()
    {

     //Pretty much standard...
     $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $roler = getMenu($session_data['role']);
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view($roler, $session_data);

     //Let's load the body
     $hasil['hasil'] = $this->user->getUserList();
        $this->load->view('master_user', $hasil);
    }

    public function user_add()
    {

     //Pretty much standard...
     $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $roler = getMenu($session_data['role']);
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view($roler, $session_data);

     //Let's load the body
     $data['role'] = $this->masterdatax->getRole();
        $this->load->library('form_validation');
        $this->load->view('master_user_add', $data);
    }

    public function user_insert()
    {
        $this->load->helper(array('form', 'url'));
                //load validation library
                $this->load->library('form_validation');

                //set validation rules
                $this->form_validation->set_rules(
                        'username', 'Username',
                        'required|min_length[3]|max_length[12]|is_unique[users.username]',
                        array(
                                'required' => 'You have not provided %s.',
                                'is_unique' => 'This %s already exists.',
                        )
                );
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

        if ($this->form_validation->run() == false) {
            //Pretty much standard...
             $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $roler = getMenu($session_data['role']);
            $this->load->view('header', $data);
            $this->load->view('topbar', $session_data);
            $this->load->view($roler, $session_data);

            $this->load->view('master_user_add');
        } else {
            echo 'asjib';
        }
    }


}
