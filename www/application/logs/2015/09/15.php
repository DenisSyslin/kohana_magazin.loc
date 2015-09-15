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