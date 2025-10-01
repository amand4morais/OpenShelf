<div class="author-header">
    <h1>Author Portal</h1>
    <p>Welcome! This space is dedicated to independent authors who want to publish their books!</p>
</div>

<div class="button_add_book">
    <a href="/author/register-book"> 
        <button>Register a New Book</button>
    </a>      
</div>

<h2>Your Registered Books</h2>
<table>
    <tr>
        <th>Title</th>
        <th>Pages</th>
        <th>Year</th>
        <th>Genre</th>
    </tr>

    <?php

    if(isset($_SESSION['catalogue']) && !empty($_SESSION['catalogue'])) :

        foreach ($_SESSION['catalogue'] as $book) :
    ?>
            <tr>
                <td><:php echo htmlspecialchars($book['book_title]); ?></td>
                <td><:php echo htmlspecialchars($book['book_pages]); ?></td>
                <td><:php echo htmlspecialchars($book['book_year]); ?></td>
                <td><:php echo htmlspecialchars($book['book_genre]); ?></td>
            </tr>
    <?php
        endforeach;       
    else :
    ?>

        <tr>
            <td colspan="4">You have not registered any books yet.</td>
        </tr>
    <?php
    endif;
    ?>
    
</table>