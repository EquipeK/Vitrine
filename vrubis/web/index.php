<?php
define('WEBROOT',dirname(__FILE__));
define('ROOT',dirname(WEBROOT));
define('DS','/');
define('BASE_URL','http://localhost/vrubis/web/index.php');
define('IMAGE','http://localhost/vrubis/web/img');
define('NAME',"Rubis");
define('PREFIX',"admin");
require ROOT . '/app/App.php';
App::load();
new Core\Dispatcher();