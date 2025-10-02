<section class="insert-book">
    <h2 class="book-home">Edit My Profile</h2>
<?php
    $current_user_data = [];
    $username_session = $_SESSION["username"] ?? null;

    if ($username_session && isset($_SESSION['user'])) :
        foreach ($_SESSION['user'] as $user) :
            if ($user['username'] === $username_session) :
                $current_user_data = $user;
                break;
            endif;
        endforeach;
    endif;

    if (empty($current_user_data)) :
        echo '<p>Could not retrieve user data.</p>';
    else :
?>

<form id="edit-profile-form" method="POST" action="/my-profile/update">
        <div class="user-email">
            <p class="question">Your new email</p>
            <input type="email" name="user-email" placeholder="E-mail" value="<?= htmlspecialchars($current_user_data['user_email']) ?>" required>
        </div>
        <div class="user-password">
            <p class="question">Your new password</p>
            <input type="text" name="user-password" placeholder="Password" value="<?= htmlspecialchars($current_user_data['user_password']) ?>" required>
        </div>
        <div>
            <button class="btn-signin" type="submit">Save Changes</button>
        </div>
    </form>
    <?php endif; ?>
</section>
