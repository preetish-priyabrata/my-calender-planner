<?php

Class Adminmodel extends CI_Model {

    public function __construct(){
            // Call the CI_Model constructor
            parent::__construct();
    }
    function  update_table($tables,$data,$data1){
       $query=$this->db->update($tables,$data,$data1);
          
        if($query==1){
            return true;
        }else{
            return False;
        }
    }
    function insert_chat($tables,$data){
        $query=$this->db->insert($tables,$data);
          
        if($query==1){
            return true;
        }else{
            return False;
        }
    }
     function  insert_news($tables,$data){
        $this->db->insert($tables,$data);
        $query=$this->db->insert_id();
        $x="news00".$query;
        $data1=array('ne_code'=>$x);
                        $this->db->where('ne_id',$query);
        $query_update=$this->db->update($tables,$data1);
        if($query_update==1){
            return true;
        }else{
            return False;
        }
    }
      function  insert_pricenews($tables,$data){
        $this->db->insert($tables,$data);
        $query=$this->db->insert_id();
        $x="newadvt00".$query;
        $data1=array('adv_code'=>$x);
                        $this->db->where('pr_id',$query);
        $query_update=$this->db->update($tables,$data1);
        if($query_update==1){
            return true;
        }else{
            return False;
        }
    }
     function  insert_priceradio($tables,$data){
        $this->db->insert($tables,$data);
        $query=$this->db->insert_id();
        $x="radadvto00".$query;
        $data1=array('adv_codeid'=>$x);
                        $this->db->where('pr_id',$query);
        $query_update=$this->db->update($tables,$data1);
        if($query_update==1){
            return true;
        }else{
            return False;
        }
    }
     function  insert_radio($tables,$data){
        $this->db->insert($tables,$data);
        $query=$this->db->insert_id();
        $x="radio00".$query;
        $data1=array('ra_code'=>$x);
                        $this->db->where('ra_id',$query);
        $query_update=$this->db->update($tables,$data1);
        if($query_update==1){
            return true;
        }else{
            return False;
        }
    }
     function insert_advt($tables,$data){
        $this->db->insert($tables,$data);
        $query=$this->db->insert_id();
        $x="diradvt00".$query;
        $data1=array('adv_codeid'=>$x);
                        $this->db->where('adv_id',$query);
        $query_update=$this->db->update($tables,$data1);
        if($query_update==1){
            return true;
        }else{
            return False;
        }
    }

    function insert_advtbook($tables,$data){
        $this->db->insert($tables,$data);
        $query=$this->db->insert_id();
        $x="adbook00".$query;
        $data1=array('ca_code'=>$x);
                        $this->db->where('ca_id',$query);
        $query_update=$this->db->update($tables,$data1);
        if($query_update==1){
            return true;
        }else{
            return False;
        }
    }
    function check_data($tables,$data){
    	$query=$this->db->get_where($tables,$data);
    	if($query->num_rows()==0){
    		return False;
       	}else{
       		return True;
       	}
    }
    function getinfo_data($table,$data){
    	$query=$this->db->get_where($table,$data);
    	if($query->num_rows()==1){
    		return $query->result();
       	}
    }
}