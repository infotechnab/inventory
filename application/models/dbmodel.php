<?php

class Dbmodel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
    public function registerd_email($email,$ipaddress,$country,$city,$latitude,$longitude,$browser){
        
        $data = array(
           'email'=> $email,
            'ip'=> $ipaddress,
            'country'=> $country,
            'city'=> $city,
            'latitude'=>$latitude,
            'longitude'=>$longitude,
            'browser'=>$browser
            );
         $this->db->insert('registerd_email', $data);
    }
}
?>
