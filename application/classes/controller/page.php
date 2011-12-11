<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Application {

	public function action_about ()
	{

		$content = View::factory('pages/about');
		$this->template->content = $content;

	}

	public function action_why_egotist ()
	{

		$content = View::factory('pages/why_egotist');
		$this->template->content = $content;

	}
}