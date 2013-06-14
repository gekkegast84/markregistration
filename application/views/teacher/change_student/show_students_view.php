<div class='center-wrapper'>
    <center><h1>markregistration</h1></center>
    <div class='offset3 span6'>
        <form method="POST" action="change_student_info/get_student">
            <select name='class' onchange='this.form.submit()' >
                <option disabled selected>choose student:</option>
            <?php
            foreach($username as $student)
            { 
                echo"<option value=" . $student->username . ">" . $student->username . "</option>";
            }
            ?>
            </select>
            <noscript><input type="submit" value="Submit"></noscript>
        </form>
    </div>
</div>
