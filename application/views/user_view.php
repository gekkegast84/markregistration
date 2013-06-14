<div class='center-wrapper'>
    <div class='well offset2 span8'>
        <h2>Show Users</h2>

        <table class="table table-striped">

            <?php
            echo "<tr>";
            echo "<td><b>id</b></td>";
            echo "<td><b>username</b></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo"</tr>";
            foreach ($user_info as $user) {
                echo "<tr>";
                echo "<td>" . $user['id'] . "</td>";
                echo "<td>" . $user['username'] . "</td>";
                echo "<td><a href='show_users/do_edit/".$user['id']."' class='icon-pencil'></a></td>";
                echo "<td><a id='del' href='show_users/do_remove/".$user['id']."' class='icon-trash'></a></td>";
                echo "</tr>";
            }
            ?>            
        </table>
        <br/><br/>

        <h2>create user:</h2>    
<?php echo form_open('show_users/do_create'); ?>
        <table>
            <tr>
                <td><b>Username:</b></td>
                <td><input type='text' name='username' /></td>
            </tr>
            <tr>
                <td><b>Password:</b></td>
                <td><input type='password' name='password' /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type='submit' name='submit' value="insert" /></td>
            </tr>
        </table>
<?php echo form_close(); ?>
    </div>
</div>