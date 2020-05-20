<?php
// Set The Session
session_cache_limiter(false);
session_start();

// Set Error Messages
ini_set('display_errors', 'On');

// SET Includes Root ('app')
define('INC_ROOT', dirname(__DIR__));

// SET Public Root ('public')
define('PUB_ROOT', '/public');

// Gmail Login Credentials
define('GUSER', 'resonance.designs.com@gmail.com'); // GMail username
define('GPWD', '(Mungching1!)'); // GMail password

// DB PDO Connection
$GLOBALS['config'] = array (
    'mysql' => array (
        'host' => '127.0.0.1',
        'username' => 'resonancedesigns',
        'password' => '(Mungching1!)',
        'db' => 'resonancedesigns'
    ),
    'remember' => array (
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' => array (
        'session_name' => 'user',
        'token_name' => 'token'
    )
);

// Load App Classes
spl_autoload_register(function($class) {
    require_once INC_ROOT . '/classes/' . $class . '.php';
});

// Load security functions
require_once INC_ROOT . '/functions/sanitize.php';

// Load PHPMailer classes and email sending function
require_once INC_ROOT . '/functions/PHPMailerAutoload.php';
require_once INC_ROOT . '/functions/sendmail.php';

// Load composer packages
require_once '../../../vendor/autoload.php';
// Elasticsearch
/*
$es = new Elasticsearch\Client([
    'hosts' => ['127.0.0.1:9200']
]);
*/

// Set Cookies
if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))) {
    $hash = Cookie::get(Config::get('remember/cookie_name'));
    $hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));
    if($hashCheck->count()) {
        $user = new User($hashCheck->first()->user_id);
        $user->login();
    }
}

// DB MySQLi Connection
$dbHost = '127.0.0.1';
$dbUsername = 'resonancedesigns'; 
$dbPassword = '(Mungching1!)'; 
$dbDatabase = 'resonancedesigns';
$connectMe = mysqli_connect("$dbHost","$dbUsername","$dbPassword", "$dbDatabase") or die ("could not connect to mysql");