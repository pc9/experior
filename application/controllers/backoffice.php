<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backoffice extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->head = $this->load->view('/backoffice/common/head',array(),true);
		$this->side = $this->load->view('/backoffice/common/side',array(),true);
		$this->footer = $this->load->view('/backoffice/common/footer',array(),true);
	}
	
	public function index()
	{
		$data['head'] = $this->head;
		$data['side'] = $this->side;
		$data['footer'] = $this->footer;
		$this->load->view('backoffice/question_bank', $data);
	}

	public function active_tests()
	{
		$data['head'] = $this->head;
		$data['side'] = $this->side;
		$data['footer'] = $this->footer;
		$this->load->view('backoffice/active_tests', $data);
	}

	public function add_test()
	{
		$data['head'] = $this->head;
		$data['side'] = $this->side;
		$data['footer'] = $this->footer;
		$this->load->view('backoffice/add_test', $data);
	}

	public function add_question()
	{
		$data['head'] = $this->head;
		$data['side'] = $this->side;
		$data['footer'] = $this->footer;
		$this->load->view('backoffice/add_question', $data);
	}

	public function manage()
	{
		$data['head'] = $this->head;
		$data['side'] = $this->side;
		$data['footer'] = $this->footer;
		$this->load->view('backoffice/manage', $data);
	}
	
	public function users()
	{
		$data['head'] = $this->head;
		$data['side'] = $this->side;
		$data['footer'] = $this->footer;
		$this->load->view('backoffice/users', $data);
	}
	public function results()
	{
		$data['head'] = $this->head;
		$data['side'] = $this->side;
		$data['footer'] = $this->footer;
		$this->load->view('backoffice/results', $data);
	}

	public function question_bank()
	{
		$data['head'] = $this->head;
		$data['side'] = $this->side;
		$data['footer'] = $this->footer;
		$this->load->view('backoffice/question_bank', $data);
	}

}