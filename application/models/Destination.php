<?php

class Destination extends CI_Model
{

public function insertLog($data)
{
  $this->db->insert('log', $data);
}

  public function getEntityIdFromBranchId($id)
  {
    $this->db->select('entityId');
    $this->db->where('id',$id);
    $query = $this->db->get('bee_branch');

    if ($query->num_rows() == 1) {
        $result = $query->result();
        foreach ($result  as $r):
          $kirim = $r->entityId;
        endforeach;
        return $kirim;
    } else {
        return false;
    }
  }

  public function getPackages()
  {
    $query = $this->db->get('packages');
    $result = $query->result();
    return $result;
  }


  public function getEntityIdFromAgentId($id)
  {
    $this->db->select('entityId');
    $this->db->where('id',$id);
    $query = $this->db->get('bee_agent');

    if ($query->num_rows() == 1) {
        $result = $query->result();
        foreach ($result  as $r):
          $kirim = $r->entityId;
        endforeach;
        return $kirim;
    } else {
        return false;
    }
  }

  public function getBranchEntIdFromAgentId($id)
  {
    $this->db->select('branchId');
    $this->db->where('id',$id);
    $query = $this->db->get('bee_agent');

    if ($query->num_rows() == 1) {
        $result = $query->result();
        $branchid=$result[0]->branchId;

        $this->db->select('id');
        $this->db->where('type','Branch');
        $this->db->where('originID',$branchid);
        $queryx = $this->db->get('entity');

        if ($queryx->num_rows() == 1) {
            $resultx = $queryx->result();
            foreach ($resultx  as $r):
              $kirim = $r->id;
            endforeach;
            return $kirim;
        } else {
            return false;
        }

    } else {
        return false;
    }
  }

  public function getBranchIdFromAgentId($id)
  {
    $this->db->select('branchId');
    $this->db->where('id',$id);
    $query = $this->db->get('bee_agent');

    if ($query->num_rows() == 1) {
        $result = $query->result();
        foreach ($result  as $r):
          $kirim = $r->branchId;
        endforeach;
        return $kirim;
    } else {
        return false;
    }
  }


    public function getBranchFromEntID($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('entity');

        if ($query->num_rows() == 1) {
            $result = $query->result();
            foreach ($result  as $r) {
                $type = $r->type;
                $sid = $r->originID;

                switch ($type) {
  case 'Agent':
      $this->db->select('branchId');
      $this->db->where('id', $sid);
      $query = $this->db->get('bee_agent');
         if ($query->num_rows() > 0) {
             $result = $query->result();
             foreach ($result  as $r) {
                 return $r->branchId;
             }
         } else {
             return false;
         }
      break;
  case 'Branch':
            return $sid;
      break;
  case 'Gate':
      $this->db->select('locationCode');
      $this->db->where('id', $sid);
      $query = $this->db->get('bee_cargate');
         if ($query->num_rows() > 0) {
             $result = $query->result();
             foreach ($result  as $r) {
                 return $r->locationCode;
             }
         } else {
             return false;
         }
      break;
  default:
      echo 'Something Wrong with location';
    }
            }
        }
    }

    public function getInfoFromEntID($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('entity');

        if ($query->num_rows() == 1) {
            $result = $query->result();
            foreach ($result  as $r) {
                $type = $r->type;
                $sid = $r->originID;
                switch ($type) {
    case 'Agent':
        $this->db->where('id', $sid);
        $query = $this->db->get('bee_agent');
           if ($query->num_rows() > 0) {
               $result = $query->result();
               foreach ($result  as $r) {
                   $kirim = 'Point '.$sid.' '.$r->agent_name.' - '.$r->statediv;
               }
               return $kirim;
           } else {
               return false;
           }
        break;
    case 'Branch':
        $this->db->where('id', $sid);
        $query = $this->db->get('bee_branch');
           if ($query->num_rows() > 0) {
               $result = $query->result();
               foreach ($result  as $r) {
                   $kirim = 'Branch '.$sid.' '.$r->branchName;
               }
                return $kirim;
           } else {
               return false;
           }
        break;
    case 'Cargate':
        $this->db->where('id', $sid);
        $query = $this->db->get('bee_cargates');
           if ($query->num_rows() > 0) {
               $result = $query->result();
               foreach ($result  as $r) {
                   $kirim = 'Car Gate '.$sid.' '.$r->cargateName. ' - '.$r->city;
               }
                return $kirim;
           } else {
               return false;
           }
        break;
    default:
        echo 'Something Wrong with Destination->getInfoFromEntID()';
      }
            }
        } else {
            return false;
        }
    }


    public function getLocFromEntID($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('entity');

        if ($query->num_rows() == 1) {
            $result = $query->result();
            foreach ($result  as $r) {
                $type = $r->type;
                $sid = $r->originID;
                switch ($type) {
    case 'Agent':
        $this->db->select('locationCode');
        $this->db->where('id', $sid);
        $query = $this->db->get('bee_agent');
           if ($query->num_rows() > 0) {
               $result = $query->result();
               foreach ($result  as $r) {
                   return $r->locationCode;
               }
           } else {
               return false;
           }
        break;
    case 'Branch':
        $this->db->select('locationCode');
        $this->db->where('id', $sid);
        $query = $this->db->get('bee_branch');
           if ($query->num_rows() > 0) {
               $result = $query->result();
               foreach ($result  as $r) {
                   return $r->locationCode;
               }
           } else {
               return false;
           }
        break;
    case 'Gate':
        $this->db->select('locationCode');
        $this->db->where('id', $sid);
        $query = $this->db->get('bee_cargate');
           if ($query->num_rows() > 0) {
               $result = $query->result();
               foreach ($result  as $r) {
                   return $r->locationCode;
               }
           } else {
               return false;
           }
        break;
    default:
        echo 'Something Wrong with Destination->getLocFromEntID()';
      }
            }
        } else {
            return false;
        }
    }

    public function getState()
    {
        $this->db->distinct();
        $this->db->select('StateDiv');
        $query = $this->db->get('placecode');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


        public function getAgentIdFromEntId($id)
        {
            $this->db->select('id');
            $this->db->where('entityId',$id);
            $query = $this->db->get('bee_agent');

            if ($query->num_rows() > 0) {
                $result = $query->result();
                foreach ($result  as $r):
                  $kirim = $r->id;
                endforeach;
                return $kirim;
            } else {
                return false;
            }
        }



            public function getLogs($awb)
            {
                $this->db->where('awb', $awb);
                $query = $this->db->get('log');
                return $query->result();

            }

    public function getTownship($div)
    {
        $this->db->where('StateDiv', $div);
        $query = $this->db->get('placecode');

        if ($query->num_rows() > 0) {
            $result = $query->result();

            $kirim = '';
            foreach ($result  as $r):
          $kirim .= '<option value="'.$r->PlaceID.'">'.$r->Township.'</option>';
            endforeach;

            return stripslashes($kirim);
        } else {
            return false;
        }
    }

    public function getPriceSelect($agentid, $citydes, $weight)
    {
    //  $kirim = $agentid.' - '.$citydes.' edit model/destination/getpriceoption';
    //  return $kirim;
  //       //CAUTION: it might failed if the locationCode is session is empty. Use this info as troubleshooting.
   $sql = "
   SELECT pricematrix.*,bee_agent.agent_name
   FROM pricematrix
   left join bee_agent
   ON pricematrix.pointto = bee_agent.id
   WHERE pointfrom=$agentid and cityDest='$citydes';
   ";
        $query = $this->db->query($sql);
   if ($query->num_rows() > 0) {
       $result = $query->result();
       $kirim = '';
       foreach ($result  as $r):
          $kirim .= '<option value="'.$r->id.'"> B '.$r->pointto.' - '.$r->agent_name.'.  Total Price '.($r->price * $weight).' Ky</option>';
       endforeach;
       return stripslashes($kirim);
       //return '<option>coba</option>';
   } else {
       return '<option>No price from your location</option>';
   }
    }

    public function getPriceOption($agentid, $citydes, $weight)
    {
    //  $kirim = $agentid.' - '.$citydes.' edit model/destination/getpriceoption';
    //  return $kirim;
  //       //CAUTION: it might failed if the locationCode is session is empty. Use this info as troubleshooting.
   $sql = "
   SELECT pricematrix.*,bee_agent.agent_name
   FROM pricematrix
   left join bee_agent
   ON pricematrix.pointto = bee_agent.id
   WHERE pointfrom=$agentid and cityDest='$citydes';
   ";
        $query = $this->db->query($sql);
   if ($query->num_rows() > 0) {
       $result = $query->result();
       $kirim = '<table class="table">';
       $kirim .= '<tr><th></th><th>Point ID</th><th>Point Name </th><th>City</th><th>Price</th><th>Total</th></tr>';
       foreach ($result  as $r):
          $kirim .= '<tr><td><input type="radio" name="option" class="required radio-primary" value="'.$r->id.'"></td><td>'.$r->pointto.'</td><td>'.$r->agent_name.'</td><td>'.$r->cityDest.'</td><td>'.$r->price.'</td><td>'.($r->price * $weight).'</td></tr>';
       endforeach;
       $kirim .= '</table>';

       return stripslashes($kirim);
   } else {
       return $sql;
   }
    }

    public function getPriceDetail($id)
    {
      if (!isset($id)){return false;}
      $sql = "
      SELECT pricematrix.*,bee_agent.agent_name, bee_agent.agent_address
      FROM pricematrix
      left join bee_agent
      ON pricematrix.pointto = bee_agent.id
      WHERE pricematrix.id=$id;
      ";
           $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result();

            return $result;
        } else {
            return false;
        }
    }

    public function order_insert($data)
    {
        $this->db->insert('entry_order', $data);

        return $this->db->insert_id();
    }

    public function update_profile_id($id, $data)
    {
        $this->db->where('username', $id);
        $this->db->update('users', $data);
//return $this->db->last_query();
    }

    public function update_awb($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('entry_order', $data);
    }

    public function update_by_awb($awb, $data)
    {
        $this->db->where('awb', $awb);
        $this->db->update('entry_order', $data);
    }

    public function get_eo_detail($id)
    {
      $sql = "
      SELECT semua.*,packages.name
      FROM (SELECT entry_order.*,bee_agent.agent_name, bee_agent.agent_address
      FROM entry_order
      left join bee_agent
      ON entry_order.codeto = bee_agent.id
      WHERE entry_order.id=$id) as semua
      left join packages
      on semua.packageId = packages.id;
      ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result();

            return $result;
        } else {
            return false;
        }
    }

    public function get_tbp($entityId)
    {

  //get list of AWB with following criteria: current owner is the entity id, delivery status is 'Agent Origin', process status is confirmed.
        $this->db->where('currentEntityOwner', $entityId);
        $this->db->where('deliveryStatus', 'Agent Origin');
        $this->db->where('processStatus', 'confirmed');
        $query = $this->db->get('entry_order');
        if ($query->num_rows() > 0) {
            $result = $query->result();

            return $result;
        } else {
            $result = array();

            return $result;
        }
    }

    public function get_incoming($agentid)
    {

  //get list of AWB with following criteria: current owner is the entity id, delivery status is 'Agent Origin', process status is confirmed.
        $this->db->where('codeto', $agentid);
        $this->db->where('processStatus !=', 'unconfirmed');
        $this->db->where('deliveryStatus !=', 'Point Destination');
        $query = $this->db->get('entry_order');
            $result = $query->result();
            return $result;
    }

    public function getDetailFromAWB($awb)
    {

      $sql = "
      SELECT semua.*,packages.name
      FROM (SELECT entry_order.*,bee_agent.agent_name, bee_agent.agent_address
      FROM entry_order
      left join bee_agent
      ON entry_order.codeto = bee_agent.id
      WHERE entry_order.awb='$awb') as semua
      left join packages
      on semua.packageId = packages.id;
      ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result();

            return $result;
        } else {
            $result = array();

            return $result;
        }
    }


    public function get_tbd($entityId)
    {

  //get list of AWB with following criteria: current owner is the entity id, delivery status is 'Agent Origin', process status is confirmed.
  $this->db->where('currentEntityOwner', $entityId);
        $this->db->where('deliveryStatus', 'Point Destination');
        $this->db->where('processStatus', 'confirmed');
        $query = $this->db->get('entry_order');
        if ($query->num_rows() > 0) {
            $result = $query->result();

            return $result;
        } else {
            $result = array();

            return $result;
        }
    }

//end of class
}
