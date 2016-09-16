<?php
Class Masterdatax extends CI_Model
{
  /****start inventory***/

function getAssetList()
 {
    $query = $this->db->get('assets');
     return $query->result();
 }
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
function getAssetDetail($id)
 {
    $this -> db -> where('id',$id);
    $query = $this -> db -> get('master_asset');
   if ($query) {
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

function insert_cargate($data)
{
  //1. insert to cargate
   $blah = $this->db->insert('bee_cargates', $data);
   if ($blah) {
    $gateid = $this->db->insert_id();
   }

   //2.insert to entityID
      $data = array(
        'type' => 'Cargate',
        'originID' => $gateid
    );
     $xcute = $this->db->insert('entity', $data);
    $belawle = $this->db->insert_id();

    //3. update cargate again
          $baru = array(
        'entityId' => $belawle
    );
    $this -> db -> where('id', $gateid);
    $this -> db -> update('bee_cargates', $baru);
    return $gateid;
}

function getCargate()
{
   $query = $this->db->get('bee_cargates');
   return $query->result();
}

/*
 function getRole()
 {
    $this->db->select('name');
    $query = $this->db->get('role');

   if($query -> num_rows() > 0)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
*/

function setPriceBatchc2c($cityfrom,$cityto,$price)
{
  $this->db->select('PlaceID');
  $this->db->where('StateDiv', $cityfrom);
  $query = $this->db->get('placecode');
  $result = $query->result();
  foreach($result  as $r)
  {
    $codefrom = $r->PlaceID;
    $this->db->select('PlaceID');
    $this->db->where('StateDiv', $cityto);
    $queryx = $this->db->get('placecode');
    $resultx = $queryx->result();
    foreach($resultx  as $rx)
    {
      $codeto = $rx->PlaceID;
      $data = array(
        'codefrom' => $codefrom,
        'codeto' => $codeto,
        'toStateDiv' =>$cityto,
        'type'=>'to Address',
        'locName'=>'To Designated Address',
        'locAddress' => 'TBA',
        'price' =>$price
    );
     $xcute = $this->db->insert('pricing', $data);
    }

  }

}

function get_entity_from_role($role)
 {

  switch ($role) {
    case "Agent":
        //------------------------------------------------------------------
         $query = $this -> db -> get('bee_agent');
         $result = $query->result();
         $kirim='';
         foreach($result  as $r)
         {$kirim .= '<option value="'.$r->id.'">'.$r->agent_name.'</option>';}
         return $kirim;
         //------------------------------------------------------------------
        break;
    case "Branch Admin":
        //------------------------------------------------------------------
         $query = $this -> db -> get('bee_branch');
         $result = $query->result();
         $kirim='';
         foreach($result  as $r)
         {$kirim .= '<option value="'.$r->id.'">'.$r->branchName.'</option>';}
         return $kirim;
         //------------------------------------------------------------------
        break;
    default:
        echo "<option>Error! Unknown ROLE, CALL IT</option>";
}
}


function get_point_from_city($statediv)
 {
   $this -> db -> where('statediv', $statediv);
   $query = $this -> db -> get('bee_agent');

   if($query -> num_rows() > 0)
   {
     $result = $query->result();

     $kirim='<option value="">Select Agent</option>';
      foreach($result  as $r):
          //$kirim .= '<option value="'.$r->id.'">'.$r->agent_name.'</option>';
          $kirim .=  '<option value="'.$r->id.'">('.$r->id.') '.$r->agent_name.' - '.$r->statediv.'</option>';
      endforeach;
return stripslashes($kirim);

   }
   else
   {
     return false;
   }

}


 function getPricelist()
 {

   $sql = "SELECT coba.*,bee_agent.agent_name as namedest, bee_agent.stateDiv as citydest
FROM (SELECT pricematrix.*,bee_agent.agent_name as nameorigin, bee_agent.stateDiv as cityorigin
FROM pricematrix
LEFT JOIN bee_agent
ON pricematrix.pointfrom=bee_agent.id) as coba
LEFT JOIN bee_agent
ON coba.pointto=bee_agent.id;";
   $query = $this->db->query($sql);
   if ($query) {
       return $query->result();
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

 function setBranch($data)
 {
  //1. insert to branch
   $blah = $this->db->insert('bee_branch', $data);
   if ($blah) {
    $branchid = $this->db->insert_id();
   }

   //2.insert to entityID
      $data = array(
        'type' => 'Branch',
        'originID' => $branchid
    );
     $xcute = $this->db->insert('entity', $data);
    $belawle = $this->db->insert_id();

    //3. update branch again
          $baru = array(
        'entityId' => $belawle
    );
    $this -> db -> where('id', $branchid);
    $this -> db -> update('bee_branch', $baru);



    return $branchid;
 }

 function setAgent($data)
 {
  //1. insert to branch
   $blah = $this->db->insert('bee_agent', $data);
   if ($blah) {
    $agentid = $this->db->insert_id();
   }

   //2.insert to entityID
      $data = array(
        'type' => 'Agent',
        'originID' => $agentid
    );
     $xcute = $this->db->insert('entity', $data);
    $belawle = $this->db->insert_id();

    //3. update branch again
          $baru = array(
        'entityId' => $belawle
    );
    $this -> db -> where('id', $agentid);
    $this -> db -> update('bee_agent', $baru);

    return $agentid;
 }

 function checkSameCombo($a, $b)
 {
   $this -> db -> select('id');
   $this -> db -> where('pointfrom', $b);
   $this -> db -> where('pointto', $a);
   $query = $this -> db -> get('pricematrix');

   if($query -> num_rows() > 0)
   {
     return false;
   }
   else
   {
     return true;
   }
 }

 function setDriver($data)
 {
   $blah = $this->db->insert('bee_drivers', $data);
   if ($blah!=true) {
    return false;
   }
 }

 function setPriceTA($data)
 {
   $blah = $this->db->insert('pricematrix', $data);
   if ($blah!=true) {
    return false;
   }
 }

 function updateBranch($id,$data){
$this -> db -> where('id', $id);
$this -> db -> update('bee_branch', $data);
}

 function updateAgent($id,$data){
$this -> db -> where('id', $id);
$this -> db -> update('bee_agent', $data);
}
 function getPlaceCode()
 {
    $query = $this->db->get('placecode');
     return $query->result();
 }

 function getOwnDriver($id)
 //Get driver for particular branch
 {
    $this->db->where('branchId',$id);
    $query = $this->db->get('bee_drivers');

     return $query->result();
 }

 function getAllDriver()
  //Get driver for all branch
 {
   $sql = "SELECT bee_drivers.*, bee_branch.branchName as branchname
FROM bee_drivers
LEFT JOIN bee_branch
ON bee_drivers.branchId=bee_branch.id";
   $query = $this->db->query($sql);
     return $query->result();
 }


 function getBranchList()
 {
    $query = $this->db->get('bee_branch');
     return $query->result();
 }

 function getAgentList()
 {
    $query = $this->db->get('bee_agent');
     return $query->result();
 }
//...........New...............
 
  }


?>
