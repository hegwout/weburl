<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Home extends MY_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * http://example.com/index.php/welcome
	 * - or -
	 * http://example.com/index.php/welcome/index
	 * - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * 
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load -> model ('url_model');
		$url = "glype-1.4.9/includes/process.php?action=update";
		
		$this -> data['links'] 	= $this -> url_model -> get_top_links(18);
		$this -> data['tools']	= $this -> url_model -> get_top_tools(18);
		
		$this -> data['url']	= $url;
	
		self::view('index');
	}
	
	public function test() {
		$this->load->view ( 'ui-and-interface' );
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */