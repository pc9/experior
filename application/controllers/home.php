<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		$this->head = $this->load->view('/common/dashboard_head',array(),true);
	}
		
	public function index()
	{
		
		$this->load->view('home');
	}

	public function dashboard()
	{
		$data['head'] = $this->head;
		$this->load->view('dashboard',$data);
	}

	public function register()
	{
		
		$this->load->view('register');
	}

	public function contact()
	{
		
		$this->load->view('contact');
	}

	public function forget_password()
	{
		
		$this->load->view('forget_password');
	}

	public function about()
	{
		
		$this->load->view('about');
	}

	public function notifications()
	{
		
		$data['head'] = $this->head;
		$this->load->view('notifications',$data);
	}

	public function start_test()
	{
		
		$data['head'] = $this->head;
		$this->load->view('start_test',$data);
	}

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php *,/
