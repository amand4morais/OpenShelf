<div class="button_add_user">
    <a href="/user/register">
        <button>Register a New User</button>
    </a>
</div>


<h2>Users Registered</h2>

<ul class="user-list">

    <?php

    if (isset($_SESSION['user']) && !empty($_SESSION['user'])) :

        foreach ($_SESSION['user'] as $user) :
    ?>

            <li class="user-card">
                <div class="username">
                    <strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?>
                </div>
                <div class="user-email">
                    <strong>Email:</strong> <?php echo htmlspecialchars($user['email_user']);  ?>
                </div>
                <div class="user-cpf">
                    <strong>CPF>:</strong> <?php echo htmlspecialchars($user['cpf']);  ?>
                </div>
            </li>
    
    <?php
        endforeach;

    else :
    ?>
        <li class="no-users">
            <p>There are no users registered in the system yet</p>
        </li>
    <?php
    endif;
    ?>
</ul>