<div class="admin-page">
    <h2 class="admin-home">Admin Dashboard</h2>
</div>

<div>
    <h4 class="title-user">Current Users</h4>
</div>
<section id="current-users">
    <table>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>CPF</th>
            <th>Password</th>
            <th>Delete User</th>
            <th>Edit User</th>
        </tr>

        <?php

            if(isset($_SESSION['user'])) :       
                
                foreach($_SESSION['user'] as $users) :?> 
                    
                        echo '<tr><td>' . $users['username'] . '</td>';
                        echo '<td>' . $users['user_email'] . '</td>';
                        echo '<td>' . $users['user_cpf'] . '</td>';
                        echo '<td>' . $users['user_password'] . '</td>';?>
                        
                        <form id="user-delete" method="POST" action="/admin/delete-user">

                            <input type="hidden" name="user" value="<?= htmlspecialchars($users['user_email'])?>">
                            <td><button type="submit">Delete</button></td>

                        </form>
                        <form id="user-update" method="POST" action="/admin/update-user">

                            <input type="hidden" name="user" value="<?= htmlspecialchars($users['user_email'])?>">
                            <td><button type="submit">Edit</button></td>

                        </form>

                <?php

                endforeach;

            endif;
        ?>
    </table>
</section>