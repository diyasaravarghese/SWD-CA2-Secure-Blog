<?php
$secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');

session_set_cookie_params([
    'lifetime' => 0,       // session cookie
    'path' => '/',
    'domain' => '',
    'secure' => $secure,   // false on localhost (HTTP), true on HTTPS
    'httponly' => true,    // prevents JS access to session cookie
    'samesite' => 'Lax'    // protects against CSRF
]);

ini_set('session.use_strict_mode', 1);
ini_set('session.use_only_cookies', 1);

session_start();

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

require_once "config/config.php";
require_once "helpers/Request.php";
require_once "helpers/Validator.php";
require_once "helpers/FileHandler.php";
require_once "helpers/Flasher.php";
require_once "core/App.php";
require_once "core/Controller.php";
require_once "core/Model.php";
require_once "helpers/Auth.php";
require_once "helpers/Cookie.php";
require_once "helpers/Pagination.php";
require_once "helpers/Slug.php";

$app = new App();
