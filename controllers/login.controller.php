<?php

    if($action == 'list') :

        $action = 'login';
    
    elseif($action == 'logoff') :
        
        if($_SESSION['logged'] == "true") :

            $_SESSION['logged'] = "false";

            header('Location: /main-page');

        endif;

    elseif($action == 'save') :

        if($_SERVER['REQUEST_METHOD'] === 'POST') :

            $user_email = $_POST['user-email'] ?? null;
            $user_password = $_POST['user-password'] ?? null;
            
            foreach($_SESSION['user'] as $users) :

                if($users['user_email'] == $user_email && $users['user_password'] == $user_password) :

                    $_SESSION['logged'] = "true";
                    $_SESSION['username'] = $users['username'];
 
                    header('Location: /main-page');

                endif;

            endforeach;
            
            echo 'E-mail or password are incorrect. Try again later.';

        endif;

    endif;

    require_once('views.php');