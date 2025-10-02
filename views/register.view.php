<section class="register-login-user">
    <h2 class="book-home">Register on OpenShelf</h2>

    <form id="register-login-form" method="POST" action="/register/save">
        <div class="username">
            <p class="question">Complete name</p>
            <input type="text" name="username" placeholder="Complete Name">
        </div>
        <div class="user-email">
            <p class="question">E-mail</p>
            <input type="email" name="user-email" placeholder="E-mail">
        </div>
        <div class="user-cpf">
            <p class="question">CPF</p>
            <input type="text" name="user-cpf" placeholder="123.456.789-12">
        </div>
        <div class="user-password">
            <p class="question">Password</p>
            <input type="text" name="user-password" placeholder="Password">
        </div>
        <div>
            <button class="btn-signin" type="submit">Sign in</button>
        </div>
    </form>
</section>

