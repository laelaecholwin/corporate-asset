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
        $data['role'] = $this->masterdatax;//->getRole();
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
    function user_detail($slug = NULL)
    {
              //Pretty much standard...
         $session_data = $this->session->userdata('logged_in');
         $data['username'] = $session_data['username'];
         $roler = getMenu($session_data['role']);
         $this->load->view('header', $data);
         $this->load->view('topbar',$session_data);
         $this->load->view($roler,$session_data);  

         //Let's load the body
         $hasilx=$this->masterdatax->getUserDetail($slug);
         if ($hasilx) {
            foreach($hasilx as $row)
                 {
                   $hasil = array(
                     'id' => $row->id,
                     'fullname' => $row->fullName,
                     'username' => $row->userName,
                     'password' => $row->userPassword,
                     'email' => $row->userEmail,
                     'role' => $row->userRole,
                     'avatar' => $row->userAvatar                   
                   );
                     }
    }
    $this->load->view('master_user_detail',$hasil);
    }

    function edit_user($slug = NULL)
    {
              //Pretty much standard...
         $session_data = $this->session->userdata('logged_in');
         $data['username'] = $session_data['username'];
         $roler = getMenu($session_data['role']);
         $this->load->view('header', $data);
         $this->load->view('topbar',$session_data);
         $this->load->view($roler,$session_data);  
         
         //Let's load the body
         $hasilx=$this->masterdatax->getUserDetail($slug);
         if ($hasilx) {
            foreach($hasilx as $row)
                 {
                   $hasil = array(
                     'id' => $row->id,
                     'fullname' => $row->fullName,
                     'username' => $row->userName,
                     'password' => $row->userPassword,
                     'email' => $row->userEmail,
                     'role' => $row->userRole,
                     'avatar' => $row->userAvatar
                   );
                     }
    }
    $this->load->view('master_user_edit',$hasil);
    }

    function update_user() 
    {
        $id=$_POST['id'];
        $data = array(
        'fullName' => $_POST['fullname'],
        'userName' => $_POST['username'],
        'userPassword' => $_POST['password'],
        'userEmail' => $_POST['email']
        );
        //var_dump($data);
        $this->masterdatax->updateUser($id,$data);
        redirect('masterdata/user','refresh');
}    

    public function brand()
    {

     //Pretty much standard...
     $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $roler = getMenu($session_data['role']);
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view($roler, $session_data);

     //Let's load the body
     $hasil['hasil'] = $this->masterdatax->getBrandList();
        $this->load->view('master_brand', $hasil);
    }
    public function brand_add()
    {

     //Pretty much standard...
     $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $roler = getMenu($session_data['role']);
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view($roler, $session_data);

     //Let's load the body
        $data['role'] = $this->masterdatax;//->getRole();
        $this->load->library('form_validation');
        $this->load->view('master_brand_add', $data);
    }
    public function brand_insert()
    {
        $data = array(
        'id' => $_POST['id'],
        'brandName' => $_POST['brandname'],
        'brandDescription' => $_POST['description']);

        
    }
    function brand_detail($slug = NULL)
    {
              //Pretty much standard...
         $session_data = $this->session->userdata('logged_in');
         $data['username'] = $session_data['username'];
         $roler = getMenu($session_data['role']);
         $this->load->view('header', $data);
         $this->load->view('topbar',$session_data);
         $this->load->view($roler,$session_data);  

         //Let's load the body
         $hasilx=$this->masterdatax->getBrandDetail($slug);
         if ($hasilx) {
            foreach($hasilx as $row)
                 {
                   $hasil = array(
                     'id' => $row->id,
                     'brandname' => $row->brandName,
                     'description' => $row->brandDescription                                      
                   );
                     }
    }
    $this->load->view('master_brand_detail',$hasil);
    }

    function edit_brand($slug = NULL)
    {
              //Pretty much standard...
         $session_data = $this->session->userdata('logged_in');
         $data['username'] = $session_data['username'];
         $roler = getMenu($session_data['role']);
         $this->load->view('header', $data);
         $this->load->view('topbar',$session_data);
         $this->load->view($roler,$session_data);  
         
         //Let's load the body
         $hasilx=$this->masterdatax->getBrandDetail($slug);
         if ($hasilx) {
            foreach($hasilx as $row)
                 {
                   $hasil = array(
                     'id' => $row->id,
                     'brandname' => $row->brandName,
                     'description' => $row->brandDescription
                   );
                     }
    }
    $this->load->view('master_brand_edit',$hasil);
    }

    function update_brand() 
    {
        $id=$_POST['id'];
        $data = array(
        'brandName' => $_POST['brandname'],
        'brandDescription' => $_POST['description'],
        
        );
        //var_dump($data);
        $this->masterdatax->updateBrand($id,$data);
        redirect('masterdata/brand','refresh');
}    

    public function business_unit()
    {

     //Pretty much standard...
     $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $roler = getMenu($session_data['role']);
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view($roler, $session_data);

     //Let's load the body
        $hasil['hasil'] = $this->masterdatax->getBusinessunitList();
        $this->load->view('master_business_unit', $hasil);
    }
    public function business_unit_add()
    {

     //Pretty much standard...
     $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $roler = getMenu($session_data['role']);
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view($roler, $session_data);

     //Let's load the body
        $data['role'] = $this->masterdatax;//->getRole();
        $this->load->library('form_validation');
        $this->load->view('master_business_unit_add', $data);
    }
    public function business_unit_insert()
    {
        $data = array(
        'id' => $_POST['id'],
        'businessunitName' => $_POST['business_unit'],
        'businessunitLocation' => $_POST['location'],
        'businessunitCountry' => $_POST['country']);        
        
    }
    function business_unit_detail($slug = NULL)
    {
              //Pretty much standard...
         $session_data = $this->session->userdata('logged_in');
         $data['username'] = $session_data['username'];
         $roler = getMenu($session_data['role']);
         $this->load->view('header', $data);
         $this->load->view('topbar',$session_data);
         $this->load->view($roler,$session_data);  

         //Let's load the body
         $hasilx=$this->masterdatax->getBusinessunitDetail($slug);
         if ($hasilx) {
            foreach($hasilx as $row)
                 {
                   $hasil = array(
                     'id' => $row->id,
                     'business_unit' => $row->businessunitName,
                     'location' => $row->businessunitLocation,
                     'country' => $row->businessunitCountry                                      
                   );
                     }
    }
    $this->load->view('master_business_unit_detail',$hasil);
    }

    function edit_business_unit($slug = NULL)
    {
              //Pretty much standard...
         $session_data = $this->session->userdata('logged_in');
         $data['username'] = $session_data['username'];
         $roler = getMenu($session_data['role']);
         $this->load->view('header', $data);
         $this->load->view('topbar',$session_data);
         $this->load->view($roler,$session_data);  
         
         //Let's load the body
         $hasilx=$this->masterdatax->getBusinessunitDetail($slug);
         if ($hasilx) {
            foreach($hasilx as $row)
                 {
                   $hasil = array(
                     'id' => $row->id,
                     'business_unit' => $row->businessunitName,
                     'location' => $row->businessunitLocation,
                     'country' => $row->businessunitCountry
                   );
                     }
    }
    $this->load->view('master_business_unit_edit',$hasil);
    }

    function update_business_unit() 
    {
        $id=$_POST['id'];
        $data = array(
        'businessunitName' => $_POST['business_unit'],
        'businessunitLocation' => $_POST['location'],
        'businessunitCountry' => $_POST['country']
        
        );
        //var_dump($data);
        $this->masterdatax->updateAgent($id,$data);
        redirect('masterdata/business_unit','refresh');
} 
    public function category()
    {

     //Pretty much standard...
     $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $roler = getMenu($session_data['role']);
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view($roler, $session_data);

     //Let's load the body
     $hasil['hasil'] = $this->masterdatax->getCategoryList();
        $this->load->view('master_category', $hasil);
    }
    public function category_add()
    {

     //Pretty much standard...
     $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $roler = getMenu($session_data['role']);
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view($roler, $session_data);

     //Let's load the body
        $data['role'] = $this->masterdatax;//->getRole();
        $this->load->library('form_validation');
        $this->load->view('master_category_add', $data);
    }
     public function category_insert()
    {
        $data = array(
        'id' => $_POST['id'],
        'categoryName' => $_POST['category_name'],
        'categoryDescription' => $_POST['description']
              );  
        
    }
    function category_detail($slug = NULL)
    {
              //Pretty much standard...
         $session_data = $this->session->userdata('logged_in');
         $data['username'] = $session_data['username'];
         $roler = getMenu($session_data['role']);
         $this->load->view('header', $data);
         $this->load->view('topbar',$session_data);
         $this->load->view($roler,$session_data);  

         //Let's load the body
         $hasilx=$this->masterdatax->getCategoryDetail($slug);
         if ($hasilx) {
            foreach($hasilx as $row)
                 {
                   $hasil = array(
                     'id' => $row->id,
                     'category_name' => $row->categoryName,
                     'description' => $row->categoryDescription
                                                           
                   );
                     }
    }
    $this->load->view('master_category_detail',$hasil);
    }

    function edit_category($slug = NULL)
    {
              //Pretty much standard...
         $session_data = $this->session->userdata('logged_in');
         $data['username'] = $session_data['username'];
         $roler = getMenu($session_data['role']);
         $this->load->view('header', $data);
         $this->load->view('topbar',$session_data);
         $this->load->view($roler,$session_data);  
         
         //Let's load the body
         $hasilx=$this->masterdatax->getCategoryDetail($slug);
         if ($hasilx) {
            foreach($hasilx as $row)
                 {
                   $hasil = array(
                     'id' => $row->id,
                     'category_name' => $row->categoryName,
                     'description' => $row->categoryDescription
                   );
                     }
    }
    $this->load->view('master_category_edit',$hasil);
    }

    function update_category() 
    {
        $id=$_POST['id'];
        $data = array(
        'categoryName' => $_POST['category_name'],
        'categoryDescription' => $_POST['description']
        
        );
        //var_dump($data);
        $this->masterdatax->updateCategory($id,$data);
        redirect('masterdata/category','refresh');
} 
    public function type()
    {

     //Pretty much standard...
     $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $roler = getMenu($session_data['role']);
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view($roler, $session_data);

     //Let's load the body
     $hasil['hasil'] = $this->masterdatax->getTypeList();
        $this->load->view('master_type', $hasil);
    }  
    
    
    
     public function type_add()
    {

     //Pretty much standard...
     $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $roler = getMenu($session_data['role']);
        $this->load->view('header', $data);
        $this->load->view('topbar', $session_data);
        $this->load->view($roler, $session_data);

     //Let's load the body
        $data['role'] = $this->masterdatax;//->getRole();
        $this->load->library('form_validation');
        $this->load->view('master_type_add', $data);
    }
    public function type_insert()
    {
        $data = array(
        'id' => $_POST['id'],
        'typeName' => $_POST['type_name'],
        'typeDescription' => $_POST['description']
        );
                
        
    }
    function type_detail($slug = NULL)
    {
              //Pretty much standard...
         $session_data = $this->session->userdata('logged_in');
         $data['username'] = $session_data['username'];
         $roler = getMenu($session_data['role']);
         $this->load->view('header', $data);
         $this->load->view('topbar',$session_data);
         $this->load->view($roler,$session_data);  

         //Let's load the body
         $hasilx=$this->masterdatax->getTypeDetail($slug);
         if ($hasilx) {
            foreach($hasilx as $row)
                 {
                   $hasil = array(
                     'id' => $row->id,
                     'type_name' => $row->typeName,
                     'description' => $row->typeDescription
                                                           
                   );
                     }
    }
    $this->load->view('master_type_detail',$hasil);
    }

    function edit_type($slug = NULL)
    {
              //Pretty much standard...
         $session_data = $this->session->userdata('logged_in');
         $data['username'] = $session_data['username'];
         $roler = getMenu($session_data['role']);
         $this->load->view('header', $data);
         $this->load->view('topbar',$session_data);
         $this->load->view($roler,$session_data);  
         
         //Let's load the body
         $hasilx=$this->masterdatax->getTypeDetail($slug);
         if ($hasilx) {
            foreach($hasilx as $row)
                 {
                   $hasil = array(
                     'id' => $row->id,
                     'type_name' => $row->typeName,
                     'description' => $row->typeDescription
                   );
                     }
    }
    $this->load->view('master_type_edit',$hasil);
    }

    function update_type() 
    {
        $id=$_POST['id'];
        $data = array(
        'typeName' => $_POST['type_name'],
        'typeDescription' => $_POST['description']
        
        );
        //var_dump($data);
        $this->masterdatax->updateType($id,$data);
        redirect('masterdata/type','refresh');
} 

}
