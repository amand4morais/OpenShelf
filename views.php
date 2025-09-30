<?php
    include('layout/header.php');

    if(file_exists("views/$action.view.php")) :
        
        include("views/$action.view.php");

    else :

        include("layout/404.php");
    
    endif;

    include("layout/footer.php");