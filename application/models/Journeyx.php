<?php

class Journeyx extends CI_Model
{
    public function getOriginPoint($branchId)
    {
      $sql = "SELECT coba.*,bee_agent.agent_name as namedest, bee_agent.stateDiv as citydest
   FROM (SELECT entry_order.*,bee_agent.agent_name as nameorigin, bee_agent.stateDiv as cityorigin
   FROM entry_order
   LEFT JOIN bee_agent
   ON entry_order.codefrom=bee_agent.id) as coba
   LEFT JOIN bee_agent
   ON coba.codeto=bee_agent.id
   WHERE processStatus='confirmed' AND
    deliveryStatus='Agent Origin' AND
    branchOriginId = $branchId";
      $query = $this->db->query($sql);
      return $query->result();
    }

    public function getBranchOrigin($branchId)
    {
      $sql = "SELECT coba.*,bee_agent.agent_name as namedest, bee_agent.stateDiv as citydest
   FROM (SELECT entry_order.*,bee_agent.agent_name as nameorigin, bee_agent.stateDiv as cityorigin
   FROM entry_order
   LEFT JOIN bee_agent
   ON entry_order.codefrom=bee_agent.id) as coba
   LEFT JOIN bee_agent
   ON coba.codeto=bee_agent.id
   WHERE processStatus='confirmed' AND
    deliveryStatus='Branch Origin' AND
    branchOriginId = $branchId";
      $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function getDriverOrigin($branchId)
    {
      $sql = "SELECT coba.*,bee_agent.agent_name as namedest, bee_agent.stateDiv as citydest
   FROM (SELECT entry_order.*,bee_agent.agent_name as nameorigin, bee_agent.stateDiv as cityorigin
   FROM entry_order
   LEFT JOIN bee_agent
   ON entry_order.codefrom=bee_agent.id) as coba
   LEFT JOIN bee_agent
   ON coba.codeto=bee_agent.id
   WHERE processStatus='confirmed' AND
    (deliveryStatus='Driver Origin' or deliveryStatus='Driver Destination')
      AND
    branchOriginId = $branchId";
      $query = $this->db->query($sql);
        // $this->db->where('processStatus', 'confirmed');
        // $this->db->where('deliveryStatus', 'Agent Origin');
        // $this->db->where('branchOriginId', $branchId);
        // $query = $this->db->get('entry_order');
            return $query->result();
    }

    public function get_agent_history_inbound($entid)
    {
      $this->db->where('entityId', $entid);
      $this->db->where('processStatus !=', 'cancelled');
      $query = $this->db->get('entry_order');
          return $query->result();
    }

    public function get_agent_history_outbound($entid)
    {

      $this->db->where('entityId', $entid);
      $query = $this->db->get('entry_order');
          return $query->result();

    }

    public function updateDriverOrigin($awb,$data)
    {
        $this -> db -> where('awb', $awb);
        $try=$this -> db -> update('entry_order', $data);
        return $try;
    }

    public function getOriginBranch($branchId)
    {
        $this->db->where('processStatus', 'Confirmed');
        $this->db->where('deliveryStatus', 'Branch Origin');
        $this->db->where('branchOriginId', $branchId);
        $this->db->join('users', 'users.id = entry_order.currentHandler');
        $query = $this->db->get('entry_order');
            return $query->result();
    }

    public function get_instock($entityid)
    {
      return 1;
      $sql="SELECT Count(id) as jumlah FROM entry_order WHERE currentEntityOwner = 5 AND processStatus!='cancelled'";
      $query = $this->db->query($sql);
      return $query->result();
    }

    public function getAgentByBranch($id)
    {
        $this->db->where('branchId', $id);
        $query = $this->db->get('bee_agent');

            return $query->result();
    }
/*

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
   $this -> db -> where('role !=', 'Super Admin');
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

*/
}
