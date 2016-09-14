<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Update_profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
    }

    public function index()
    {
        $id = $this->input->post('Username');
        $data = array(
        'password' => md5($this->input->post('Password')),
        'fullName' => $this->input->post('FullName'),
        'location' => $this->input->post('Location'),
        'email' => $this->input->post('Email'),
        'mobile' => $this->input->post('Mobile'),
        );
        var_dump($data);
        echo $this->update_model->update_profile_id($id, $data);
        //redirect('profile','refresh');
    }
}
