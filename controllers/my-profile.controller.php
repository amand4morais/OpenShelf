<?php

if($action == 'list') :

    $action = 'my-profile';

elseif ($action == 'edit') :

    $action = 'edit-profile';

    elseif ($action == 'update') :

        if($_SERVER['REQUEST_METHOD'] === 'POST') :

            $new_user_email = $_POST['user_email'] ?? null;
            $new_user_password = $_POST['user_password'] ?? null;
            $current_session_password = $_SESSION['password'] ?? null;

            if (!empty($new_user_email) && !empty($new_user_password) && isset($_SESSION['user'])) :

                foreach ($_SESSION['user'] as $index => $user) :
                    
                    if($user['password'] === $current_session_password) :

                        $_SESSION['user'][$index]['user_email'] = $new_user_email;
                        $_SESSION['user'][$index]['user_password'] = $new_user_password;

                    endif;

                endforeach;

            endif;

        endif;

        header('Location: /my-profile');
    
endif;

require_once('views.php');

?>