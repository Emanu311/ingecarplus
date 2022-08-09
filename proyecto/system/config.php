<?php
 
define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);

define('FOLDER_PATH', '/proyecto');
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
define('PATH_VIEWS',FOLDER_PATH . '/app/wiews');
define('PATH_CONTROLLER',FOLDER_PATH . '/app/controller');
define('PATH_MODELS',FOLDER_PATH . '/app/models');


define('DEFAULT_CONTROLLER', 'Login');

define('CORE','system/core/');

define('DATABASE_SERVER','mysql');
define('HOST','localhost');
define('CHARSET','utf8');
define('DATABASE_NAME','sena');
define('USER','root');
define('PASS','');