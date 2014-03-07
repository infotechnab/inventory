<?php

class Dbmodel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
    public function registerd_email($email,$ipaddress,$country,$city,$latitude,$longitude,$browser,$OS){
        
        $data = array(
           'email'=> $email,
            'ip'=> $ipaddress,
            'country'=> $country,
            'city'=> $city,
            'latitude'=>$latitude,
            'longitude'=>$longitude,
            'browser'=>$browser,
            'operating_system'=>$OS
            );
         $this->db->insert('registerd_email', $data);
    }
     public function record_count_user_list() {
        return $this->db->count_all("registerd_email");
    }
    public function user_list($limit, $start){
         $this->db->limit($limit, $start); 
        $query = $this->db->get('registerd_email');
        return $query->result();
    }
}
?>
