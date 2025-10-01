<section class="insert-book">
    <h2 class="book-home">Insert new book</h2>

    <form id="book-form" method="POST" action="/catalogue/save-book">
        <div class="book_title">
            <p class="question">Insert the title of the book</p>
            <input type="text" name="book_title" placeholder="Title">
        </div>
        <div class="book_pages">
            <p class="question">Insert the number of pages</p>
            <input type="text" name="book_pages" placeholder="123">
        </div>
        <div class="book_year">
            <p class="question">Insert the year of publishing</p>
            <input type="text" name="book_year" placeholder="01/01/2001">
        </div>
        <div class="book_genre">
            <p class="question">Insert the genre</p>
            <input type="text" name="book_genre" placeholder="Genre">
        </div>
        <div class="book_author">
            <p class="question">Insert the author's name</p>
            <input type="text" name="book_author" placeholder="Author's name">
        </div>
        <div>
            <button class="btn-signin" type="submit">Insert book</button>
        </div>
    </form>
</section>