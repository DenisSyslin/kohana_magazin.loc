<?php

	Route::set('default-admin', 'admin(/<controller>(/<action>(/<id>)))')
		 -> defaults(array(
			'directory'  => 'admin',
			'controller' => 'dashboard',
			'action'     => 'index',
		));

	Route::set('widget-topmenu', 'widget/topmenu/show(/<current>)', array('current' => '[\d\w\-\_]+',))
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

	