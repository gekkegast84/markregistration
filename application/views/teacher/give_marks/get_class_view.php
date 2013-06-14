<div class='center-wrapper'>
    <center><h1>markregistration</h1></center>
    <div class='offset3 span6'>
        <form method="POST" action="get_student">
            <select name='class' onchange='this.form.submit()' >
                <option disabled selected>choose class:</option>
            <?php
            foreach($classes as $vak_info)
            { 
                echo"<option value=" . $vak_info->classroom . ">" .$vak_info->classroom. "</option>";
            }
            ?>
            </select>
            <noscript><input type="submit" value="Submit"></noscript>
        </form>
    </div>
</div>