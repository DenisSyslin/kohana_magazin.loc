<?php

	Route::set('default-admin', 'admin(/<controller>(/<action>(/<id>)))')
		 -> defaults(array(
			'directory'  => 'admin',
			'controller' => 'dashboard',
			'action'     => 'index',
		));

	Route::set('widget', 'widget(/<controller>(/<action>(/<id>)))')
		 -> defaults(array(
			'directory'  => 'widget',
			'controller' => 'LeftMenu',
			'action'     => 'show',
		));


	Route::set('default', '(<controller>(/<action>(/<id>)))') -> defaults(array('controller' => 'Indexs','action' => 'index'));

	