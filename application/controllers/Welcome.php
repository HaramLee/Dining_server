<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu');
		$this->data['pagetitle'] = 'Harandrew 101 (Server)';
	}
	/**
	 * Sets up the form and renders it.
	 */
	function index()
	{
		$this->load->helper('formfields');
		$this->data['title'] = 'Harandrew 101 (Server)';
		$this->data['pagebody'] = 'welcome_message';
		$this->render();
	}
}
