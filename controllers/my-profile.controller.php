<?php

if($action == 'list') :

    $action = 'my-profile';

elseif($action == 'return') :

    $book_return = $_POST['book'];

    foreach($_SESSION['my-books'] as $index => $books) :

        if($book_return == $books['book_lended']) :

            unset($_SESSION['my-books'][$index]);
            $_SESSION['my-books'] = array_values($_SESSION['my-books']);

            break;

        endif;

    endforeach;

    header("Location: /my-profile");

endif;

require_once('views.php');
    