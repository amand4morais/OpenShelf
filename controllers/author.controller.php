<?php

if ($action == 'list') :
     
    $action = 'author';

elseif ($action == 'register-book') :

    $action = 'author-register-book';

elseif ($action == 'save') :

    if($_SERVER['REQUEST_METHOD'] === 'POST') :

        $action_name = $_POST['author_name'];

        $book_title = $_POST['book_title'];
        $book_pages = $_POST['book_pages'];
        $book_year = $_POST['book_year'];
        $book_genre = $_POST['book_genre'];

        if (!empty($author_name) && !empty($book_title) && !empty($book_pages) && !empty($book_year) && !empty($book_genre)) :

            $_SESSION['catalogue'][] = [
                'book_title' => $book_title,
                'book_pages'=> $book_pages,
                'book_year'=> $book_year,
                'book_genre'=> $book_genre,
                'book_author' => $author_name
            ];

        endif;

    endif;

    header('Location: /catalogue');

endif;

require_once("views.php");