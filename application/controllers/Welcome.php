<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
			EXPLANATION :
			Addons => Load front-end expansions, such as : Bootstrap, Jquery, Popper.js, FontAwesome, etc.

*/
class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('addons');
		$this->load->view('welcome_message');
	}
}
