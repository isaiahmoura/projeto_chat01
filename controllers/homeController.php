<?php

class homeController extends controller {

	public function __construct() {
		$u = new usuarios();
		$u->não_logado();
	}

	public function index() {
		$data = array();
		$u = new usuarios();

		$uid = $_SESSION['chat'];

		$data['get_user_data'] = $u->get_user_data($uid);

		$this->loadTemplate('home', $data);
	}
}