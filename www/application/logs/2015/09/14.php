<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-14 16:57:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: leftMenu ~ APPPATH\views\default\base\layout.php [ 64 ] in Z:\home\kohana_magazin.loc\www\application\views\default\base\layout.php:64
2015-09-14 16:57:26 --- DEBUG: #0 Z:\home\kohana_magazin.loc\www\application\views\default\base\layout.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana_...', 64, Array)
#1 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana_...')
#2 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana_...', Array)
#3 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#7 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana_magazin.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana_magazin.loc\www\application\views\default\base\layout.php:64
2015-09-14 17:01:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: template ~ APPPATH\classes\Controller\Admin\Auth.php [ 79 ] in Z:\home\kohana_magazin.loc\www\application\classes\Controller\Admin\Auth.php:79
2015-09-14 17:01:09 --- DEBUG: #0 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Admin\Auth.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana_...', 79, Array)
#1 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#4 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana_magazin.loc\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana_magazin.loc\www\application\classes\Controller\Admin\Auth.php:79
2015-09-14 17:48:17 --- CRITICAL: View_Exception [ 0 ]: The requested view default/pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php:145
2015-09-14 17:48:17 --- DEBUG: #0 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('default/pages/m...')
#1 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('default/pages/m...', Array)
#2 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Layout\Default.php(183): Kohana_View::factory('default/pages/m...', Array)
#3 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Pages.php(47): Controller_Layout_Default->showPage('pages/main', Array)
#4 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#7 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana_magazin.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php:145
2015-09-14 18:09:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: topmenu ~ APPPATH\classes\Controller\Layout\Default.php [ 197 ] in Z:\home\kohana_magazin.loc\www\application\classes\Controller\Layout\Default.php:197
2015-09-14 18:09:15 --- DEBUG: #0 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Layout\Default.php(197): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana_...', 197, Array)
#1 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Pages.php(47): Controller_Layout_Default->showPage('pages/main', Array)
#2 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#5 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana_magazin.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana_magazin.loc\www\application\classes\Controller\Layout\Default.php:197
2015-09-14 18:10:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: current ~ APPPATH\views\default\widget\TopMenu.php [ 5 ] in Z:\home\kohana_magazin.loc\www\application\views\default\widget\TopMenu.php:5
2015-09-14 18:10:14 --- DEBUG: #0 Z:\home\kohana_magazin.loc\www\application\views\default\widget\TopMenu.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana_...', 5, Array)
#1 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana_...')
#2 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana_...', Array)
#3 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widget_TopMenu))
#7 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Layout\Default.php(193): Kohana_Request->execute()
#10 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Pages.php(47): Controller_Layout_Default->showPage('pages/main', Array)
#11 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#14 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\kohana_magazin.loc\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\kohana_magazin.loc\www\application\views\default\widget\TopMenu.php:5
2015-09-14 18:16:48 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Widget_TopMenu::action_show(), called in Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Widget\TopMenu.php [ 19 ] in Z:\home\kohana_magazin.loc\www\application\classes\Controller\Widget\TopMenu.php:19
2015-09-14 18:16:48 --- DEBUG: #0 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Widget\TopMenu.php(19): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\\home\\kohana_...', 19, Array)
#1 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(84): Controller_Widget_TopMenu->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widget_TopMenu))
#4 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Layout\Default.php(193): Kohana_Request->execute()
#7 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Pages.php(47): Controller_Layout_Default->showPage('pages/main', Array)
#8 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(84): Controller_Pages->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#11 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana_magazin.loc\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana_magazin.loc\www\application\classes\Controller\Widget\TopMenu.php:19