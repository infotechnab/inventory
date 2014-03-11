<?php

class Dbmodel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    //================= for user registration =====================//
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
    
    //=========================== for user listing ==================//
     public function record_count_user_list() {
        return $this->db->count_all("registerd_email");
    }
    public function user_list($limit, $start){
         $this->db->limit($limit, $start); 
        $query = $this->db->get('registerd_email');
        return $query->result();
    }
    
    //============================= for user information ===============//
    
    public function add_user($email, $password, $fname, $lname)
    {
        $data = array(
           'email'=> $email,
            'password'=> md5($password),
            'fname'=> $fname,
            'lname'=> $lname
            
            );
         $this->db->insert('user_info', $data);
    }
    
    function prdtype(){
        $prdtype = $this->db->get('produty_type');
        return $prdtype->result();
    }
    
    function suplierList(){
        $suplierList = $this->db->get('supplier');
        return $suplierList->result();
    }
    
    function addproduct($pname,$ptype,$psuplier,$pdiscription,$tag,$stock,$sku,$buyprice,$wholesaleprice,$retailerprice)
                {
        $data = array(
            'p_name'=>$pname,
            'p_type'=>$ptype,
            'supplier'=>$psuplier,
            'description' => $pdiscription,
            'tag'=>$tag,
            'stock'=>$stock,
            'sku'=>$sku,
            'by_price'=>$buyprice,
            'wholesel_price'=>$wholesaleprice,
            'retail_price'=>$retailerprice
        );
        
        $this->db->insert('product',$data);
    }
    
    
}
?>
