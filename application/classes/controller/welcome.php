<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$data = array();
		$data['site_name'] = 'Egotist';
		$data['random'] = rand(1, 10);
		$this->response->body(View::factory('welcome', $data));
	}

} // End Welcome
