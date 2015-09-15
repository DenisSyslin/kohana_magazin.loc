<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-15 11:09:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\default\pages\catalog.php [ 5 ] in Z:\home\kohana_magazin.loc\www\application\views\default\pages\catalog.php:5
2015-09-15 11:09:27 --- DEBUG: #0 Z:\home\kohana_magazin.loc\www\application\views\default\pages\catalog.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\kohana_...', 5, Array)
#1 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana_...')
#2 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana_...', Array)
#3 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana_magazin.loc\www\application\views\default\base\layout.php(69): Kohana_View->__toString()
#5 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana_...')
#6 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana_...', Array)
#7 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#11 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana_magazin.loc\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana_magazin.loc\www\application\views\default\pages\catalog.php:5
2015-09-15 12:57:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Layout\Default.php [ 197 ] in file:line
2015-09-15 12:57:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 13:55:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::execute() ~ APPPATH\classes\Controller\Layout\Default.php [ 98 ] in file:line
2015-09-15 13:55:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 16:06:26 --- CRITICAL: View_Exception [ 0 ]: The requested view default/logins/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php:145
2015-09-15 16:06:26 --- DEBUG: #0 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('default/logins/...')
#1 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/logins/...', Array)
#2 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Layout\Default.php(207): Kohana_View::factory('default/logins/...', Array)
#3 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Login.php(46): Controller_Layout_Default->showPage('logins/login', Array)
#4 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(84): Controller_Login->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana_magazin.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php:145
2015-09-15 16:07:58 --- CRITICAL: View_Exception [ 0 ]: The requested view default/basket/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php:145
2015-09-15 16:07:58 --- DEBUG: #0 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('default/basket/...')
#1 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/basket/...', Array)
#2 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Layout\Default.php(207): Kohana_View::factory('default/basket/...', Array)
#3 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Basket.php(46): Controller_Layout_Default->showPage('basket/main', Array)
#4 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(84): Controller_Basket->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Basket))
#7 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana_magazin.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php:145
2015-09-15 16:27:31 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'id' in 'field list' [ SELECT COUNT(id) AS `count` FROM `products` ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in Z:\home\kohana_magazin.loc\www\modules\database\classes\Kohana\Database\Query.php:251
2015-09-15 16:27:31 --- DEBUG: #0 Z:\home\kohana_magazin.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT COUNT(id...', false, Array)
#1 Z:\home\kohana_magazin.loc\www\application\classes\Model\Layout\CRUD.php(98): Kohana_Database_Query->execute()
#2 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(47): Model_Layout_CRUD->getCount()
#3 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Admin\Products.php(36): Controller_Admin_Layout_ExtentionGRUD->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD1\x81...')
#4 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Products->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#7 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana_magazin.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana_magazin.loc\www\modules\database\classes\Kohana\Database\Query.php:251
2015-09-15 16:27:39 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'id' in 'field list' [ SELECT COUNT(id) AS `count` FROM `products` ] ~ MODPATH\database\classes\Database\MySQLi.php [ 174 ] in Z:\home\kohana_magazin.loc\www\modules\database\classes\Kohana\Database\Query.php:251
2015-09-15 16:27:39 --- DEBUG: #0 Z:\home\kohana_magazin.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT COUNT(id...', false, Array)
#1 Z:\home\kohana_magazin.loc\www\application\classes\Model\Layout\CRUD.php(98): Kohana_Database_Query->execute()
#2 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Admin\Layout\ExtentionGRUD.php(47): Model_Layout_CRUD->getCount()
#3 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Admin\Products.php(36): Controller_Admin_Layout_ExtentionGRUD->grudIndex('\xD0\xA1\xD0\xBF\xD0\xB8\xD1\x81\xD0\xBE\xD0\xBA \xD1\x81...')
#4 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Products->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#7 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana_magazin.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana_magazin.loc\www\modules\database\classes\Kohana\Database\Query.php:251