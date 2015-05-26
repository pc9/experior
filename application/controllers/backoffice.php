<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backoffice extends CI_Controller {

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
		$data['head'] = $this->load->view('/backoffice/common/head',array(),true);
		$data['side'] = $this->load->view('/backoffice/common/side',array(),true);
		$data['footer'] = $this->load->view('/backoffice/common/footer',array(),true);
		$this->load->view('backoffice/question_bank', $data);
	}

	public function active_tests()
	{
		$data['head'] = $this->load->view('/backoffice/common/head',array(),true);
		$data['side'] = $this->load->view('/backoffice/common/side',array(),true);
		$data['footer'] = $this->load->view('/backoffice/common/footer',array(),true);
		$this->load->view('backoffice/active_tests', $data);
	}

	public function add_test()
	{
		$data['head'] = $this->load->view('/backoffice/common/head',array(),true);
		$data['side'] = $this->load->view('/backoffice/common/side',array(),true);
		$data['footer'] = $this->load->view('/backoffice/common/footer',array(),true);
		$this->load->view('backoffice/add_test', $data);
	}

public function add_question()
	{
		$data['head'] = $this->load->view('/backoffice/common/head',array(),true);
		$data['side'] = $this->load->view('/backoffice/common/side',array(),true);
		$data['footer'] = $this->load->view('/backoffice/common/footer',array(),true);
		$this->load->view('backoffice/add_question', $data);
	}

	public function manage()
	{
		$data['head'] = $this->load->view('/backoffice/common/head',array(),true);
		$data['side'] = $this->load->view('/backoffice/common/side',array(),true);
		$data['footer'] = $this->load->view('/backoffice/common/footer',array(),true);
		$this->load->view('backoffice/manage', $data);
	}
	
	public function users()
	{
		$data['head'] = $this->load->view('/backoffice/common/head',array(),true);
		$data['side'] = $this->load->view('/backoffice/common/side',array(),true);
		$data['footer'] = $this->load->view('/backoffice/common/footer',array(),true);
		$this->load->view('backoffice/users', $data);
	}
		public function results()
	{
		$data['head'] = $this->load->view('/backoffice/common/head',array(),true);
		$data['side'] = $this->load->view('/backoffice/common/side',array(),true);
		$data['footer'] = $this->load->view('/backoffice/common/footer',array(),true);
		$this->load->view('backoffice/results', $data);
	}

public function question_bank()
	{
		$data['head'] = $this->load->view('/backoffice/common/head',array(),true);
		$data['side'] = $this->load->view('/backoffice/common/side',array(),true);
		$data['footer'] = $this->load->view('/backoffice/common/footer',array(),true);
		$this->load->view('backoffice/question_bank', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php *,/
