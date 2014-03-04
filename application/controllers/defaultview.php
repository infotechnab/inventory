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
	public function index()
	{
		$this->load->view('home');
	}
        
        public function notifyme()
        {
            $emailAddress = $_POST['subscription'];
            $data['notifyMeMessage']= "Thank you for your interest.";
            $this->load->view('home',$data);
            
            $ipaddress= "Address of visitor ";
            $location ="Location of visitor";
            $country = "Country of Visitor";
            $device = "Device browsing";
            $OS= "OS of using software";
            $browser = "Browser that is using";
            
           
            
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */