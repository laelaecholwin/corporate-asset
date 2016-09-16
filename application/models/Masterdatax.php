<?php
Class Masterdatax extends CI_Model
{
  /****start inventory***/

function getBrandList()
 {
    $query = $this->db->get('brand');
     return $query->result();
 }

 function getBusinessunitList()
 {
    $query = $this->db->get('business_unit');
     return $query->result();
 }

 function getCategoryList()
 {
    $query = $this->db->get('category');
     return $query->result();
 }

 function getTypeList()
 {
    $query = $this->db->get('type');
     return $query->result();
 }

}

function getBrandDetail($id)
 {
    $this -> db -> where('id',$id);
    $query = $this -> db -> get('master_brand');
   if ($query) {
       return $query->result();
   }

  }

  function getBusinessunitDetail($id)
 {
    $this -> db -> where('id',$id);
    $query = $this -> db -> get('master_business_unit');
   if ($query) {
       return $query->result();
   }

  }

  function getCategoryDetail($id)
 {
    $this -> db -> where('id',$id);
    $query = $this -> db -> get('master_category');
   if ($query) {
       return $query->result();
   }

  }

   function getTypeDetail($id)
 {
    $this -> db -> where('id',$id);
    $query = $this -> db -> get('master_type');
   if ($query) {
       return $query->result();
   }



  /***end inventory***/

 function getState()
 {
    $this->db->distinct();
    $this->db->select('StateDiv');
    $query = $this->db->get('placecode');

   if($query -> num_rows() > 0)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

  function getStateFromCode($code)
  {
    $this -> db -> where('placeID',$code);
    $query = $this -> db -> get('placecode');
   if ($query) {
       $result = $query->result();
       foreach ($result as $r) {
         return $r->StateDiv;
       }
   }
  }

 function getBranchDetail($id)
 {
    $this -> db -> where('id',$id);
    $query = $this -> db -> get('bee_branch');
   if ($query) {
       return $query->result();
   }

  }

 function getAgentDetail($id)
 {
    $this -> db -> where('id',$id);
    $query = $this -> db -> get('bee_agent');
   if ($query) {
       return $query->result();
   }

  }

 /*
 function getStateByCode($code)
 {
    $this -> db -> select('stateDiv');
    $this -> db -> from('bee_agent');
    $this -> db -> where('id',$id);
    $query = $this -> db -> get('bee_agent');
   if ($query) {
       return $query->result();
   }

  }
*/
function setDriver($data)
 {
   $blah = $this->db->insert('bee_drivers', $data);
   if ($blah!=true) {
    return false;
   }
 }

 
 function getPlaceCode()
 {
    $query = $this->db->get('placecode');
     return $query->result();
 }

 

 
//...........New...............
 
 }


?>
