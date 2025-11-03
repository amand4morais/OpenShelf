<section class="insert-book">
    <div class="my-profile-title">
        <h1 class="book-home">My profile</h1>
    </div>

    <div class="account-data">
        <?php
            if (!empty($current_user_data)) :
                echo 'Name: ' . htmlspecialchars($current_user_data['username']) . '<br>';
                echo 'E-mail ' . htmlspecialchars($current_user_data['user_email']) . '<br>';
                echo 'CPF: ' . htmlspecialchars($current_user_data['user_cpf']) . '<br>';
            else :
                echo 'User data not found.';
            endif;
        ?>
    </div>

<div class="books-list">
        <div class="lend-title">
            <h3>My books</h3>
        </div>
        
        <div id="my-books">
            <ul>
                <?php
                    if(isset($my_books_data) && !empty($my_books_data)) :

                        foreach($my_books_data as $books) :?>

                            <form id="book-return" method="POST" action="/my-profile/return">

                                <li><?= htmlspecialchars($books['book_title']) ?>
                                    <input type="hidden" name="book" value="<?= htmlspecialchars($books['book_title'] ?? '')?>">
                                    <button type="submit">Return</button></li>

                            </form>

                        <?php endforeach;
            
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