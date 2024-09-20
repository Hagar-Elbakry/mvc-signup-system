<?php


define('DBHOST','localhost');
define('DBNAME','my_db');
define('DBUSER','root');
define('DBPASS','');


ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => "localhost",
    'path' => '/',
    'secure' => true,
    'httponly' =>true
]);

session_start();

function regenerate_session_id() {
    session_regenerate_id();
    $_SESSION['Last_regeneration'] = time();
}
if(!isset($_SESSION['Last_regeneration'])) {
    regenerate_session_id();
} else {
    $interval = 60*30;
    if(time() - $_SESSION['Last_regeneration'] >= $interval) {
        regenerate_session_id();
    }
}

if($_SERVER['SERVER_NAME']=='localhost') {
    
    define('ROOT','http://localhost/Projects/signup-with-MVC/public');
    
} else {
    
    define('ROOT', 'https://www.yourwebsite.com');
}

define('APP_NAME', 'My Website');
define('APP_DESC', 'Best website on the planet');

//true means show errors 
define('DEBUG', true);
