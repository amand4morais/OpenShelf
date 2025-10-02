<?php

    $logged = $_SESSION["logged"] ?? "false";
    $user = $_SESSION["username"] ?? null;
    $role = $_SESSION["role"] ?? "user";

    if($logged == "true") :
?>

    <h3>You are already logged.</h3>
    <p>Click <a href="/main-page">here</a> to get back to the home page</Strong></p>

<?php else : ?>

<section class="register-login-user">
    <h2 class="book-home">Login on OpenShelf</h2>

<?php if (isset($_SESSION['error'])): ?>
    <div class="error-message">
        <?= $_SESSION['error']; ?>
    </div>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>


    <form id="register-login-form" method="POST" action="/login/save">
        <div class="user-email">
            <p class="question">E-mail</p>
            <input type="email" name="user-email" placeholder="E-mail">
        </div>
        <div class="user-password">
            <p class="question">Password</p>
            <input type="text" name="user-password" placeholder="Password">
        </div>
        <div>
            <button class="btn-login" type="submit">Login</button>
        </div>
    </form>
</section>
<?php endif; ?>