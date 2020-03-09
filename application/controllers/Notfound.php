<?php 
	class Notfound extends CI_Controller
	{
		
		function index()
		{
			$this->load->view('addons');
			$this->load->view('404notfound');
		}
	}
?>