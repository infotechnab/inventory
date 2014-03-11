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
         $this->load->library("pagination");
         $this->load->library('session');
       
    }
	public function index()
	{
		$this->load->view('home');
                $this->load->model('dbmodel');
	}
        
        function test(){
             if ($this->session->userdata('logged_in')) {
            $this->load->view('test');
             }
             else{
                 redirect('defaultview/index');
             }
        }
        
        public function product_entry(){
             if ($this->session->userdata('logged_in')) {
                 $data['prdtype'] = $this->dbmodel->prdtype();
                 $data['suplierList'] = $this->dbmodel->suplierList();
            $this->load->view('proudct_entry', $data);
             }
             else{
                 redirect('defaultview/index');
             }
        }
        
        public function addproduct(){
            if($this->session->userdata('logged_in')){
                
                $pname= $_POST['productName'];
                $ptype = $_POST['productType'];
                $psuplier = $_POST['supplierName'];
                $pdiscription = $_POST['area2'];
                $tag = $_POST['tag'];
                $stock = $_POST['stock'];
                $sku = $_POST['sku'];
                $buyprice = $_POST['buyPrice'];
                $wholesaleprice = $_POST['wholeshalePrice'];
                $retailerprice = $_POST['retailPrice'];
                
                $this->dbmodel->addproduct($pname,$ptype,$psuplier,$pdiscription,$tag,$stock,$sku,$buyprice,$wholesaleprice,$retailerprice);
                redirect('defaultview/product_entry');
            }else{
                 redirect('defaultview/index');
             }
        }

        public function notifyme()
        {
            if(!empty($_POST)){
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
            else{
                $this->load->view('home');
            }
        }
        
        public function user_list(){
            
            $config = array();
            $config["base_url"] = base_url() . "index.php/defaultview/user_list";
            $config["total_rows"] = $this->dbmodel->record_count_user_list();
            $config["per_page"] = 15;
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data["links"] = $this->pagination->create_links();
            $data["query"] = $this->dbmodel->user_list($config["per_page"], $page);
            $this->load->view('user_list',$data);
        }
        
        public function add_user(){
  
                //=====if valid=======//
                
                 $email = $this->input->post('signup_email');
                $password = $this->input->post('signup_password');
                $fname = $this->input->post('signupFname');
                $lname = $this->input->post('signupLname');
                
                $this->dbmodel->add_user($email, $password, $fname, $lname);
                
                $this->load->view('test');
            
        }
        
        function validate() {
        $this->db->where('email', $this->input->post('login_email'));
        $this->db->where('password', md5($this->input->post('login_password')));
        $query = $this->db->get('user_info');

        if ($query->num_rows == 1) {
            return true;
        } else {
            return FALSE;
        }
    }
           
        function validate_credentials()
	{	$this->load->library('session');
                $this->load->library('form_validation');
               $this->form_validation->set_rules('login_email', 'Email', 'trim|required|xss_clean');
              $this->form_validation->set_rules('login_password', 'Password', 'trim|required|xss_clean|callback_check_database');
                if($this->form_validation->run() == FALSE)
                     {
                        $this->index();
                        
                     }
                else
                    {
		$this->load->model('dbmodel');
		$query = $this->validate();
		if($query) // if the user's credentials validated...
		{
			$data = array(
				'email' => $this->input->post('login_email'),
				'logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('defaultview/test');
		}
		else // incorrect username or password
                    {
                        $this->session->set_flashdata('message', 'Username or password incorrect');
                        redirect('defaultview/index');
                        
                    }
                    }
	}
        
        function logout() {
        $this->session->sess_destroy();
        $this->index();
        redirect('defaultview/index', 'refresh');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */