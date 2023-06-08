<?php

use Core\Validator;
use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);

$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];

$errors = [];

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if($user){
    $errors['email-taken'] = "The email address you entered is already taken.";
}

if(!empty($errors)){
    return view('registration/create.view.php', [
        'errors' => $errors,
    ]);
}

$db->query('insert into users(email, first_name, last_name, password) values(:email, :first_name, :last_name, :password)', [
   'email' => $email,
   'first_name' => $first_name,
   'last_name' => $last_name,
   'password' => password_hash($password, PASSWORD_BCRYPT),
]);


login($user);

header('location: /');
exit();