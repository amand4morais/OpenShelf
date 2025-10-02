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

            if($user_email == 'admin@admin.com' && $user_password == 'adminpassword123') :

                $_SESSION['logged'] = "true";
                $_SESSION['role'] = "admin";
                $_SESSION['username'] = "admin";

                header('Location: /main-page');

            endif;

            if(isset($_SESSION['user'])) :    
            
                foreach($_SESSION['user'] as $users) :
                    
                    if($users['user_email'] == $user_email && $users['user_password'] == $user_password) :

                        $_SESSION['logged'] = "true";
                        $_SESSION['role'] = "user";                        
                        $_SESSION['username'] = $users['username'];
    
                        header('Location: /main-page');

                    endif;

                endforeach;

            else :
                
                $_SESSION['error'] = 'E-mail or password incorrect. Try again later.';

                header("Location: /login");

            endif;

        endif;

    endif;

    require_once('views.php');