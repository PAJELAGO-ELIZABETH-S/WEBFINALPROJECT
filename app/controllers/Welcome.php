<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
	public function index() {
		$this->call->view('Home');
	}
	public function in() {
		$this->call->view('Home');
	}
}
?>