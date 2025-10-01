<?php

    if($action == 'list') :

        $action = 'catalogue';
    
    elseif($action == 'insert') :
        
        $action = 'insert-book';

    elseif($action == 'search-to-lend') :

        $action = 'search-book-to-lend';

    elseif($action == 'show-book-lend') :

        $action = 'show-book';

    elseif($action == 'save-lend') :
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') :

            $book_lended = $_POST['book'];
            
            if(!empty($book_lended)) :

                $_SESSION['my-books'][] = [

                    'book_lended' => $book_lended
                ];
            
            endif;

        endif;

        header('Location: /catalogue');

    elseif($action == 'save-book') :

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


//pensando como fazer
//teremos que ter um método de pesquisar um livro -> search bar
//iterar pela session com os livros cadastrados e mostrar conforme o que for pesquisado
//só é possível emprestar um livro se tiver logado, mas antes faremos sem a feature do login
//fazer um botão "LEND" no catalogue



