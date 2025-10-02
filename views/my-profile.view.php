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
        <a href="">
            <button class="btn-delete">Detele your profile</button>
        </a>
    </div>
</section>

