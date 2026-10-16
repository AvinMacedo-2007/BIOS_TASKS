<?php
session_set_cookie_params([
    'lifetime' => 0,                       
    'path'     => '/',
    'httponly' => true,                    
    'secure'   => !empty($_SERVER['HTTPS']), 
    'samesite' => 'Strict'                 
]);
session_start();
