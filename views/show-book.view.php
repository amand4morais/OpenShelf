<?php

$results = [];
$search = "";

    if(isset($_SESSION['catalogue'])) :

        if(isset($_POST['search_book_title'])) :

            $search = trim($_POST['search_book_title']);

            if($search !== "") :

                foreach($_SESSION['catalogue'] as $catalogue) :

                    if(stripos($catalogue['book_title'], $search) !== false) :

                        $results[] = $catalogue['book_title'];

                    endif;

                endforeach;

            endif;

        endif;

    endif;

if ($search): ?>
  <h3>Results for "<?= htmlspecialchars($search) ?>":</h3>
    <?php if ($results): ?>
    <ul>
        <?php foreach ($results as $r): ?>
            <form id="book-lend" method="POST" action="/catalogue/save-lend">     
                <li><?= htmlspecialchars($r)?>
                    <input type="hidden" name="book" value="<?= htmlspecialchars($r)?>">
                    <button type="submit">Lend</button></li>
            </form>
        <?php endforeach; ?>
    </ul>
    <?php else: ?>
        <p>The book "<?php echo $search ?>" was not found in the catalogue.</p>
    <?php endif; ?>
<?php endif; ?>