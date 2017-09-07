<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->load->model('home_model');
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}

	public function index()
	{

		$this->load->model('cmsdata');
		
		$this->data['category']		= $this->cmsdata->getallcategory();
		$this->data['subcategory']	= $this->cmsdata->subcatdetail();
		$this->data['products'] 	= $this->cmsdata->getallproducts();

		$this->data['pagename'] = 'main';
		$this->load->view('main',$this->data); //  View main main
	}


	public function subcat()
	{
		$this->data['pagename'] = 'subcat';
		$this->load->view('subcat'); //  View subcat page

	}
/*
	public function subcatpro()
	{
		$this->data['pagename'] = 'subcat';
		$this->load->view('subcatpro'); //  View subcat product page
	}
*/

	public function products($form = '')
	{


		if ($form == 'add-order') {

			$data = array(
			'p_id' 		=> 1,
			'o_name' 	=> $this->input->post('name'),
			'o_email' 	=> $this->input->post('email'),
			'o_qty' 	=> $this->input->post('quantity'),
			'o_phone' 	=> $this->input->post('phone'),
			'o_city' 	=> $this->input->post('city'),
			'o_address' => $this->input->post('address'),
			'o_method' 	=> $this->input->post('payment'),
			'o_date' 	=> date('Y-m-d'));
			
			$this->home_model->insertorder($data);
		}


		$this->data['pagename'] = 'products';
		$this->load->view('products',$this->data); //  View Product page
	}

	public function askaquestion(){
		

		$data = array(
			'p_id' 			=> $this->input->post('p_id'),
			'q_name' 		=> $this->input->post('name'),
			'q_email' 		=> $this->input->post('email'),
			'q_phone' 		=> $this->input->post('contactno'),
			'q_question' 	=> $this->input->post('question'),
			'q_pagename'	=> $this->input->post('pagename'),
			'q_date' 		=> date('Y-m-d'));

		$this->home_model->insertquestion($data);
		redirect($_SERVER['HTTP_REFERER']);
	}


	}





?>