<?php

    if($action == 'list') :

        $action = 'admin';
    
    elseif($action == 'edit') :
        
        $action = 'edit-profile';

    elseif ($action == 'update') :

        if($_SERVER['REQUEST_METHOD'] === 'POST') :

            $new_user_email = $_POST['user_email'] ?? null;
            $new_user_password = $_POST['user_password'] ?? null;
            $current_session_email = $_SESSION['email'] ?? null;

            if (!empty($new_user_email) && !empty($new_user_password) && isset($_SESSION['user'])) :

                foreach ($_SESSION['user'] as $index => $user) :
                    
                    if($user['email'] === $current_session_email) :

                        $_SESSION['user'][$index]['user_email'] = $new_user_email;
                        $_SESSION['user'][$index]['user_password'] = $new_user_password;

                    endif;

                    break;
                endforeach;

            endif;

        endif;

        header('Location: /my-profile');    

    elseif($action == 'delete') :

        $username_to_delete = $_POST['user'] ?? null;

        if ($username_to_delete && isset($_SESSION['user'])) :
            foreach ($_SESSION['user'] as $index => $user) :
                if ($user['username'] === $username_to_delete) :
                    unset($_SESSION['user'][$index]);
                break;
                endif;
            endforeach;

    unset($_SESSION['username']);

    header('Location: /admin');
    exit();
        endif;    

    endif;

    require_once('views.php');    