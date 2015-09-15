<?php

	Route::set('default-admin', 'admin(/<controller>(/<action>(/<id>)))')
		 -> defaults(array(
			'directory'  => 'admin',
			'controller' => 'dashboard',
			'action'     => 'index',
		));

	Route::set('widget-menu', 'widget/<controller>/show(/<current>)', array('controller' => 'topmenu|leftmenu', 'current' => '[\d\w\-\_]+',))
		 -> defaults(array(
			'directory'  => 'widget',
			'controller' => 'TopMenu',
			'action'     => 'show',
		));


	Route::set('widget-default', 'widget(/<controller>(/<action>(/<id>)))')
		 -> defaults(array(
			'directory'  => 'widget',
			'controller' => 'LeftMenu',
			'action'     => 'show',
		));
		
	Route::set('default', '(<controller>(/<action>(/<id>)))') -> defaults(array('controller' => 'Pages', 'action' => 'index'));

	