<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
date_default_timezone_set('Asia/Colombo');

// load configuration and autoload functions
require_once(ROOT . DS . 'config' . DS . 'config.php');

//PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require(ROOT. DS . 'app' . DS . 'lib' . DS .'helpers' . DS . 'PHPMailer' . DS . 'src' . DS . 'Exception.php');
require(ROOT. DS . 'app' . DS . 'lib' . DS .'helpers' . DS . 'PHPMailer' . DS . 'src' . DS . 'PHPMailer.php');
require(ROOT. DS . 'app' . DS . 'lib' . DS .'helpers' . DS . 'PHPMailer' . DS . 'src' . DS . 'SMTP.php');

//Autoload classes
function autoload($className){
    if(file_exists(ROOT . DS . 'core' . DS . $className . '.php')) {
        require_once(ROOT . DS . 'core' . DS . $className . '.php');
    } elseif (file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php')) {
        require_once(ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php');
    } elseif (file_exists(ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php')) {
        require_once(ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php');
    }
}

spl_autoload_register('autoload');
session_start();

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

if(!Session::exists(CURRENT_USER_SESSION_NAME) && COOKIE::exsits(REMEMBER_ME_COOKIE_NAME)){
    User::loginUserFromCookie();
}

//Route the request
Router::route($url);