<?php

    if($action == 'list') :

        $action = 'catalogue';
    
    elseif($action == 'insert') :
        
        $action = 'insert-book';

    elseif($action == 'save') :

        if($_SERVER['REQUEST_METHOD'] === 'POST') :

            $book_title = $_POST['book_title'];
            $book_pages = $_POST['book_pages'];
            $book_year = $_POST['book_year'];
            $book_genre = $_POST['book_genre'];
            $book_author = $_POST['book_author'];

            if(!empty($book_title) && !empty($book_pages) && !empty($book_year) && !empty($book_genre) && !empty($book_author)) : 

                $_SESSION['catalogue'][] = [

                    'book_title' => $book_title,
                    'book_pages' => $book_pages,
                    'book_year' => $book_year,
                    'book_genre' => $book_genre,
                    'book_author' => $book_author
                ];
                
            endif;

        endif;

        header('Location: /catalogue');

    endif;

    require_once("views.php");



