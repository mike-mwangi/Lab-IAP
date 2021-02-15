<?php
session_start();
require_once '../models/user.php';

$user = new User();

// Register
if (isset($_POST['action']) && $_POST['action'] == 'register') {
    // print_r($_POST);
    $name = $user->check_input($_POST['full_name']);
    $email = $user->check_input($_POST['email']);
    $city = $user->check_input($_POST['city']);
    $password = $user->check_input($_POST['password']);

    $hashPassword = password_hash($password, PASSWORD_DEFAULT);


    if ($user->user_exists($email)) {
        echo $user->displayAlert('warning', 'Email is already registered');
    } else{
        if($user->register($name, $email, $city, $hashPassword)){
            echo 'Register';
            $_SESSION['user'] = $email;
        }
        else{
            echo $user->displayAlert('danger', 'Something went wrong');
        }
    }

}

// Login Ajax

if (isset($_POST['action']) && $_POST['action'] == 'login') {
    // print_r($_POST);

    $email = $user->check_input($_POST['email']);
    $password = $user->check_input($_POST['password']);

    $loggedInUser = $user->login($email);

    if ($loggedInUser != null) {
        if (password_verify($password, $loggedInUser['password'])) {
            if (!empty($_POST['remember'])) {
                setcookie("email", $email, time()+(30*24*60*60), '/');
                setcookie("password", $password, time()+(30*24*60*60), '/');
            } else {
                setcookie("email", "", 1, '/');
                setcookie("password", "", 1, '/');
            }

            echo 'login';
            $_SESSION['user'] = $email;

        } else {
                echo $user->displayAlert('danger', 'Incorrect Password');
            }
    }
    else {
        echo $user->displayAlert('danger', 'User is not registered');
    }

}



?>