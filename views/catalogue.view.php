<section>
    <table>
        <tr>
            <th>Title</th>
            <th>Pages</th>
            <th>Year</th>
            <th>Genre</th>
            <th>Author</th>
        </tr>
    
        <?php
    
            if(isset($_SESSION['catalogue'])) :
    
                foreach($_SESSION['catalogue'] as $catalogue) :
    
                    echo '<tr><td>' . $catalogue['book_title'] . '</td>';
                    echo '<td>' . $catalogue['book_pages'] . '</td>';
                    echo '<td>' . $catalogue['book_year'] . '</td>';
                    echo '<td>' . $catalogue['book_genre'] . '</td>';
                    echo '<td>' . $catalogue['book_author'] . '</td></tr>';
    
                endforeach;
            
            else :
    
                echo '<tr><td>There are not any books registered in the catalogue';
    
            endif;
    
        ?>
    
    </table>
    
    <div class="btn-insertb">
        <a href="/catalogue/insert">
            <button class="btn-signin">Insert books</button>
        </a>
    </div>
    <div class="button_lend">
        <a href="/catalogue/search-to-lend">
            <button class="btn-signin">Lend books</button>
        </a>
    </div>
</section>