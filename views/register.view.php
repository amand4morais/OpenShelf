<?php

    $logged = $_SESSION["logged"] ?? "false";
    $user = $_SESSION["username"] ?? null;
    $role = $_SESSION["role"] ?? "user";

    if($logged == "true") :
?>

    <h3>You are already logged.</h3>
    <p>Click <a href="/main-page">here</a> to get back to the home page</Strong></p>

<?php else : ?>

<section class="register-user">
    <h2 class="register-home">Register on OpenShelf</h2>

    <form id="register-form" method="POST" action="/register/save">
        <div class="username">
            <input type="text" name="username" placeholder="Complete Name">
        </div>
        <div class="user-email">
            <input type="email" name="user-email" placeholder="E-mail">
        </div>
        <div class="user-cpf">
            <input type="text" name="user-cpf" placeholder="CPF">
        </div>
        <div class="user-password">
            <input type="text" name="user-password" placeholder="Password">
        </div>
        <div>
            <button class="btn-signin" type="submit">Sign in</button>
        </div>
    </form>
</section>
<?php endif; ?>
