<?php

if($action == 'list') :

    $action == 'user';

elseif ($action == 'register'):

    $action == 'insert_user';

elseif ($action == 'save'):

    if($_SERVER['REQUEST_METHOD'] === 'POST') :

        $name_user = $_POST['name_user'];
        $email_user = $_POST['email_user'];
        $cpf = $_POST['cpf'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if(!empty($name_user) && !empty($email_user) && !empty($cpf) && !empty($username) && !empty($password)) :

            $_SESSION['user'][] =[
               'name_user' => $name_user,
               'email_user' => $email_user,
               'cpf' => $cpf,
               'username' => $username,
               'password' => $password
            ];

        endif;

    endif;

    header('Location: /user');

endif;

require_once("views.php");