<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Profile extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', true);
        $this->load->helper('roler');
    }

    public function index()
    {
        $session_data = $this->session->userdata('logged_in');
        $roler = getMenu($session_data['role']);
        $this->load->library('form_validation');
        $session_data = $this->session->userdata('logged_in');
        $this->load->view('header', $session_data);
        $this->load->view('topbar', $session_data);
        $this->load->view($roler, $session_data);

        $username = $session_data['username'];
        $userid = $session_data['id'];
        $result = $this->user->getProfile($username);
        if ($result) {
            $profileData = array();
            foreach ($result as $row) {
                $profileData = array(
         'id' => $row->id,
         'username' => $row->username,
         'fullname' => $row->fullName,
         'role' => $row->role,
         'avatar' => $row->avatar,
         'location' => $row->location,
         'email' => $row->email,
         'mobile' => $row->mobile,
         'aboutme' => $row->aboutMe,
       );
            }
            $profileData['logs']=$this->user->getUserLog($userid);
            $profileData['agentinfo']=$this->user->getUserLog($userid);
            $this->load->view('profile_view', $profileData);

        } else {
            echo 'something wrong';
        }
    }

    public function update_profile()
    {
        $id = $this->input->post('idname');

        //if empty dont put in array

        if ($this->input->post('Password') == '') {
            $data = array(
        'fullName' => $this->input->post('FullName'),
        'location' => $this->input->post('Location'),
        'email' => $this->input->post('Email'),
        'mobile' => $this->input->post('Mobile'),
        'aboutMe' => $this->input->post('aboutme'),
        );
        } else {
            $data = array(
        'password' => $this->input->post('Password'),
        'fullName' => $this->input->post('FullName'),
        'location' => $this->input->post('Location'),
        'email' => $this->input->post('Email'),
        'mobile' => $this->input->post('Mobile'),
        'aboutMe' => $this->input->post('aboutme'),
        );
        }
        $this->user->update_profile_id($id, $data);
        redirect('profile', 'refresh');
    }
}
