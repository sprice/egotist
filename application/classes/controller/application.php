<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Application extends Controller_Template {

	public function before ()
	{
		parent::before();
		View::set_global('site_name', 'Egotist Beta');

		$this->template->content = '';
		$this->template->styles = array(
			'reset',
			'common'
		);
		$this->template->scripts = '';
	}
}
