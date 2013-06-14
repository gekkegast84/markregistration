<h2>edit user:</h2> 
<?php echo form_open('show_users/do_edit'); ?>
<table>
    <tr>
        <td><b>Username:</b></td>
        <td><input type='text' name='username'/></td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' name='submit' value='edit' /></td>
    </tr>
</table>
<?php echo form_close(); ?>