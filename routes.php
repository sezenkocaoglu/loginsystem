<?php

$router->get('/', 'controllers/index.php');

$router->get('/register', 'controllers/registration/create.php');
$router->post('/register', 'controllers/registration/store.php');

$router->get('/login', 'controllers/authentification/create.php');
$router->post('/authenticate', 'controllers/authentification/store.php');
$router->delete('/authenticate', 'controllers/authentification/destroy.php');