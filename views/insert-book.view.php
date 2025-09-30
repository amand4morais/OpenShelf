<div class="book-home">
    <h2>Insert new book</h2>
</div>

<form id="book-form" method="POST" action="/catalogue/save">
    <div class="book_title">
        <input type="text" name="book_title" placeholder="Insert the title of the book">
    </div>
    <div class="book_pages">
        <input type="text" name="book_pages" placeholder="Insert the number of pages">
    </div>
    <div class="book_year">
        <input type="text" name="book_year" placeholder="Insert the year of publishing">
    </div>
    <div class="book_genre">
        <input type="text" name="book_genre" placeholder="Insert the genre">
    </div>
    <div class="book_author">
        <input type="text" name="book_author" placeholder="Insert the author's name">
    </div>
    <div class="button_book">
        <button type="submit">Insert book</button>
    </div>
</form>