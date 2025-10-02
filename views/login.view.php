<section class="register-login-user">
    <h2 class="book-home">Login on OpenShelf</h2>

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