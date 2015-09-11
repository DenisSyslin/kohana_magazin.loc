<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-10 09:32:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: products ~ APPPATH\views\default\indexs\main.php [ 3 ] in Z:\home\kohana_magazin.loc\www\application\views\default\indexs\main.php:3
2015-09-10 09:32:38 --- DEBUG: #0 Z:\home\kohana_magazin.loc\www\application\views\default\indexs\main.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana_...', 3, Array)
#1 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana_...')
#2 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana_...', Array)
#3 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana_magazin.loc\www\application\views\default\base\layout.php(64): Kohana_View->__toString()
#5 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana_...')
#6 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana_...', Array)
#7 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indexs))
#11 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana_magazin.loc\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana_magazin.loc\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana_magazin.loc\www\application\views\default\indexs\main.php:3