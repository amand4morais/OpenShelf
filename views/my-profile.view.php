<section class="insert-book">
    <div class="my-profile-title">
        <h1 class="book-home">My profile</h1>
    </div>

<div class="books-list">
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
    </div>
    <div class="btns-profile">
        <a href="/login/logoff">
            <button class="btn-logoff">Logoff</button>
        </a>
        <a href="/my-profile/edit">
            <button class="btn-update">Edit Profile</button>
        </a>
        <a href="/my-profile/delete" onclick="return confirm('Você tem certeza que deseja deletar sua conta? Esta ação é permanente.');">
            <button class="btn-delete">Delete profile</button>
        </a>
    </div>
</section>
<div class="lend-title">
    <h3>My books</h3>
</div>

<div id="my-books">
    <ul>
        <?php

            if(isset($_SESSION['my-books'])) :

                foreach($_SESSION['my-books'] as $books) :?>

                    <form id="book-return" method="POST" action="/my-profile/return">

                        <li><?=$books['book_lended']?>
                            <input type="hidden" name="book" value="<?= htmlspecialchars($books['book_lended'] ?? '')?>">
                            <button type="submit">Return</button></li>

                    </form>

                <?php endforeach;
            
            else :
                
                echo 'You have not lend any books yet';

            endif;

        ?>
    </ul>
</div>
<a href="/login/logoff">
    <button class="btn-logoff">Logoff</button>
</a>

