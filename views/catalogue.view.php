<?php if (isset($_SESSION['error'])): ?>
    <div class="error-message">
        <?= $_SESSION['error']; ?>
    </div>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>

<section>
    <table>
        <tr>
            <th>Title</th>
            <th>Pages</th>
            <th>Year</th>
            <th>Genre</th>
            <th>Author</th>
            <th>Lend</th>
        </tr>
    
        <?php
    
            if(isset($_SESSION['catalogue'])) :
    
                foreach($_SESSION['catalogue'] as $catalogue) :
    
                    echo '<tr><td>' . $catalogue['book_title'] . '</td>';
                    echo '<td>' . $catalogue['book_pages'] . '</td>';
                    echo '<td>' . $catalogue['book_year'] . '</td>';
                    echo '<td>' . $catalogue['book_genre'] . '</td>';
                    echo '<td>' . $catalogue['book_author'] . '</td>';?>
                    <form id="user-delete" method="POST" action="/catalogue/save-lend">

                            <input type="hidden" name="book" value="<?= htmlspecialchars($catalogue['book_title'] ?? '')?>">
                            <td><button type="submit">Lend</button></td></tr>

                    </form>
                    
                <?php endforeach;
            
            else :
    
                echo '<tr><td>There are not any books registered in the catalogue';
    
            endif;
    
        ?>
    
    </table>
    <?php if($role == "admin") : ?>
    <div class="btn-insertb">
        <a href="/catalogue/insert">
            <button class="btn-signin">Insert books</button>
        </a>
    </div>
    <?php endif; ?>