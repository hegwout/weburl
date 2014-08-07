<?php
class MY_Controller extends CI_Controller
{
	var $data = array();
	function __construct()
	{
		parent::__construct();
	}
	
	function view($template)
	{
		$this -> load -> view($template,$this -> data);
	}
}