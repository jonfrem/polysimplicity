<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Home extends Controller_Admin_Containers_Default {

	public function action_index()
	{       $this->title='Inicio';
		$this->view=view::factory('controllers/admin/home/index');
	}
        

} 
