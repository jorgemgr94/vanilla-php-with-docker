<?php

function validate_session()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!$_SESSION['username']) {
        header("Location: /app/modules/auth/login.php");
        die();
    }
}

function http_accepted_request($accepted_methods)
{
    if (!in_array($_SERVER['REQUEST_METHOD'], $accepted_methods)) {
        http_response_code(403);
        exit();
    }
}

function print_errors()
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
