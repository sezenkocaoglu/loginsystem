<?php

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if(!$user){
    $errors['wrong-email'] = 'There is no account associated to the email address you entered.';
}

if(!empty($errors)){
    return view('authentification/create.view.php', [
        'errors' => $errors,
    ]);
}

if($user) {
    if(password_verify($password, $user['password'])){
        login($user);

        header('location: /');
        exit();
    }
}



