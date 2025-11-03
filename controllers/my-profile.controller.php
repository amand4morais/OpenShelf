<?php

$userRepository = new UserRepository($db);
$lendingRepository = new LendingRepository($db);

$username_session = $_SESSION['username'] ?? null;
$current_user_data = [];
$my_books_data = [];

if($action == 'list') :

    $action = 'my-profile';

    if ($username_session) :
        $current_user_data = $userRepository->findByUsername($username_session);
        $my_books_data = $lendingRepository->getBooksByUsername($username_session);
    endif;

elseif ($action == 'edit') :

    $action = 'edit-profile';

    if ($username_session) :
        $current_user_data = $userRepository->findByUsername($username_session);
    endif;

    elseif ($action == 'update') :

        if($_SERVER['REQUEST_METHOD'] === 'POST') :

            $new_user_email = $_POST['user_email'] ?? null;
            $new_user_password = $_POST['user_password'] ?? null;

            if (!empty($new_user_email) && !empty($new_user_password) && $username_session) :

                $userRepository->updateUser($username_session, $new_user_email, $new_user_password);

            endif;

        endif;

        header('Location: /my-profile');
        exit();
    
    elseif ($action == 'delete') :

        if ($username_session) :
            $userRepository->deleteUser($username_session);
        endif;

        $_SESSION['logged'] = "false";
        unset($_SESSION['username']);
        unset($_SESSION['role']);

        header('Location: /main-page');
    exit();
    
elseif($action == 'return') :

    $book_return = $_POST['book'] ?? null;

    if($book_return && $username_session) :
        $lendingRepository->returnBook($username_session, $book_return);
    endif;

    header("Location: /my-profile");
    exit();
endif;

require_once('views.php');

?>