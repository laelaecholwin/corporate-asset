<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Lockscreen extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $session[] = $this->session->userdata('logged_in');
            $data = array(
              'username' => $session[0]['username'],
              'fullname' => $session[0]['fullname']);
            $this->session->set_userdata('locked', $data);
            $this->session->unset_userdata('logged_in');
        } else {
            $session[] = $this->session->userdata('locked');
            $data = array(
              'username' => $session[0]['username'],
              'fullname' => $session[0]['fullname']);
        }
        $this->load->helper(array('form'));
        $this->load->view('lockscreen_view', $data);
    }
}
