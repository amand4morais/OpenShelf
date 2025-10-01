<div class="my-profile-title">
    <h1>My profile</h1>
</div>

<div class="lend-title">
    <h3>My books</h3>
</div>

<div id="my-books">
    <ul>
        <?php

            if(isset($_SESSION['my-books'])) :

                foreach($_SESSION['my-books'] as $books) :

                    echo '<li>' . $books['book_lended'] . '</li>';

                endforeach;
            
            else :
                
                echo 'You have not lend any books yet';

            endif;

        ?>
    </ul>
</div>
