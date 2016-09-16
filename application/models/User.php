<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('id, username, password,fullName,role,avatar');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 function getUserLog($userid)
 {
   $this -> db -> where('userid', $userid);
   $query = $this -> db -> get('log');
   return $query->result();
 }

 function getEntDetail($entid)
 {
   $this -> db -> where('id', $entid);
   $this -> db -> limit(1);
   $query = $this -> db -> get('entity');
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 function getProfile($username)
 {
   $this -> db -> where('username', $username);
   $this -> db -> limit(1);
   $query = $this -> db -> get('users');

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 function getUserList()
 {
   $this -> db -> where('role !=', 'Admin');
   $query = $this -> db -> get('users');
   if ($query) {
       return $query->result();
   }

 }


function update_profile_id($id,$data){
$this -> db -> where('username', $id);
$this -> db -> update('users', $data);
//return $this->db->last_query();
}



}


?>
