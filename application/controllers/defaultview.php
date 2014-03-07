<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Defaultview extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
     function __construct() {
        parent::__construct();
        $this->load->model('dbmodel');
       
    }
	public function index()
	{
		$this->load->view('home');
                $this->load->model('dbmodel');
	}
        
        public function notifyme()
        {
            $email = $_POST['subscription'];
            $ipaddress= $_POST['ip'];
            $location ="Location of visitor";
            $country = $_POST['country'];
            $city = $_POST['city'];
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];
            $device = "Device browsing";
            $OS= $_POST['os'];
            $browser = $_POST['browser'];
            
            $this->dbmodel->registerd_email($email,$ipaddress,$country,$city,$latitude,$longitude,$browser,$OS);
            
            
            $data['notifyMeMessage']= "Thank you for your interest.";
            $this->load->view('home',$data);
            
            
            
           
            
        }
        
        public function user_list(){
            $data['query']= $this->dbmodel->user_list();
            $this->load->view('user_list',$data);
            
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */