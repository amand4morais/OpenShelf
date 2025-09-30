<div class="button_books">
    <a href="/catalogue/insert">
        <button>Insert books</button>
    </a>
</div>
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