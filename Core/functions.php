<?php

function view($path, $attributes = [])
{
    extract($attributes);

    require BASE_PATH . 'views/' . $path;
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/error/$code.php");

    die();
}

function login($user){
    $_SESSION['user'] = [
        'email' => $user['email'],
        'first_name' => $user['first_name'],
        'last_name' => $user['last_name'],
        'password' => $user['password']
    ];

    session_regenerate_id(true);
}

function logout(){
    session_unset();
    session_destroy();

    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}
