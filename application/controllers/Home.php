<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
//session_start(); //we need to call PHP's session object to access it through CI
class Home extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('roler');
        $this->load->model('journeyx');
    }

    public function index()
    {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $roler = getMenu($session_data['role']); //call getmenu(role) 'sidebar_agent'
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view($roler, $session_data);

     //load body
    $data['instock']=$this->journeyx ;//->get_instock($session_data['logged_in']);
    $this->load->view('home_view',$data);
    }

    public function getFullName()
    {
        return $this->session->userdata('fullname');
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login', 'refresh');
    }
}
