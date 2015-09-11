<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-09 09:22:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: current_page ~ APPPATH\classes\Controller\Layout\Default.php [ 186 ] in Z:\home\kohana_magazin.loc\www\application\classes\Controller\Layout\Default.php:186
2015-09-09 09:22:53 --- DEBUG: #0 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Layout\Default.php(186): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\kohana_...', 186, Array)
#1 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Indexs.php(46): Controller_Layout_Default->showPage('indexs/main', Array)
#2 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(84): Controller_Indexs->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indexs))
#5 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana_magazin.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana_magazin.loc\www\application\classes\Controller\Layout\Default.php:186
2015-09-09 09:23:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: current_page ~ APPPATH\classes\Controller\Layout\Default.php [ 186 ] in Z:\home\kohana_magazin.loc\www\application\classes\Controller\Layout\Default.php:186
2015-09-09 09:23:26 --- DEBUG: #0 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Layout\Default.php(186): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\kohana_...', 186, Array)
#1 Z:\home\kohana_magazin.loc\www\application\classes\Controller\Indexs.php(47): Controller_Layout_Default->showPage('indexs/main', Array)
#2 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(84): Controller_Indexs->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indexs))
#5 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana_magazin.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana_magazin.loc\www\application\classes\Controller\Layout\Default.php:186