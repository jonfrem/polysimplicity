<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-08 12:18:55 --- CRITICAL: ErrorException [ 2 ]: include_once(analyticstracking.php): failed to open stream: No such file or directory ~ APPPATH\views\containers\default.php [ 27 ] in C:\wamp\www\polysimplicity\application\views\containers\default.php:27
2013-11-08 12:18:55 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\containers\default.php(27): Kohana_Core::error_handler(2, 'include_once(an...', 'C:\wamp\www\pol...', 27, Array)
#1 C:\wamp\www\polysimplicity\application\views\containers\default.php(27): include_once()
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php(98): Kohana_Controller_Template->after()
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Web_Containers_Default->after()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\polysimplicity\application\views\containers\default.php:27
2013-11-08 12:19:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH\views\containers\default.php [ 40 ] in C:\wamp\www\polysimplicity\application\views\containers\default.php:40
2013-11-08 12:19:07 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\containers\default.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 40, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php(98): Kohana_Controller_Template->after()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Web_Containers_Default->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\polysimplicity\application\views\containers\default.php:40
2013-11-08 12:26:59 --- CRITICAL: ErrorException [ 2 ]: include_once(analyticstracking.php): failed to open stream: No such file or directory ~ APPPATH\views\controllers\web\home\header.php [ 11 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\home\header.php:11
2013-11-08 12:26:59 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\home\header.php(11): Kohana_Core::error_handler(2, 'include_once(an...', 'C:\wamp\www\pol...', 11, Array)
#1 C:\wamp\www\polysimplicity\application\views\controllers\web\home\header.php(11): include_once()
#2 C:\wamp\www\polysimplicity\application\views\controllers\web\home\index.php(15): require('C:\wamp\www\pol...')
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\wamp\www\polysimplicity\application\views\containers\default.php(38): Kohana_View->__toString()
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php(98): Kohana_Controller_Template->after()
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Web_Containers_Default->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#14 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#17 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\home\header.php:11
2013-11-08 12:44:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: css_file ~ APPPATH\classes\Controller\Web\Containers\Default.php [ 64 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php:64
2013-11-08 12:44:32 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 64, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Web_Containers_Default->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php:64
2013-11-08 15:14:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index: FirstName ~ APPPATH\classes\Controller\Web\Home.php [ 15 ] in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-08 15:14:05 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\pol...', 15, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(84): Controller_Web_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#4 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\polysimplicity\application\classes\Controller\Web\Home.php:15
2013-11-08 15:39:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH\views\containers\default.php [ 36 ] in C:\wamp\www\polysimplicity\application\views\containers\default.php:36
2013-11-08 15:39:41 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\containers\default.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\pol...', 36, Array)
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php(96): Kohana_Controller_Template->after()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Web_Containers_Default->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#8 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\polysimplicity\application\views\containers\default.php:36
2013-11-08 16:32:17 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: home ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\home\index.php:6
2013-11-08 16:32:17 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\home\index.php(6): Kohana_Route::get('home')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\views\containers\default.php(56): Kohana_View->__toString()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php(97): Kohana_Controller_Template->after()
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Web_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\home\index.php:6
2013-11-08 16:32:30 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: home ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\home\index.php:6
2013-11-08 16:32:30 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\home\index.php(6): Kohana_Route::get('home')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\views\containers\default.php(56): Kohana_View->__toString()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php(97): Kohana_Controller_Template->after()
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Web_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\home\index.php:6
2013-11-08 16:32:32 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: home ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in C:\wamp\www\polysimplicity\application\views\controllers\web\home\index.php:6
2013-11-08 16:32:32 --- DEBUG: #0 C:\wamp\www\polysimplicity\application\views\controllers\web\home\index.php(6): Kohana_Route::get('home')
#1 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#2 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#3 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\polysimplicity\application\views\containers\default.php(56): Kohana_View->__toString()
#5 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(61): include('C:\wamp\www\pol...')
#6 C:\wamp\www\polysimplicity\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\pol...', Array)
#7 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\polysimplicity\application\classes\Controller\Web\Containers\Default.php(97): Kohana_Controller_Template->after()
#9 C:\wamp\www\polysimplicity\system\classes\Kohana\Controller.php(87): Controller_Web_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Web_Home))
#12 C:\wamp\www\polysimplicity\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\polysimplicity\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\polysimplicity\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\polysimplicity\application\views\controllers\web\home\index.php:6
2013-11-08 16:52:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '' ?> ~ APPPATH\views\controllers\web\home\index.php [ 6 ] in file:line
2013-11-08 16:52:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line