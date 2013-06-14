<div class='center-wrapper'>
    <center><h1>markregistration</h1></center>
    <div class='offset3 span6'>
        <form method="POST" action="give_marks/get_class">
            <select name='vak' onchange='this.form.submit()' >
                <option disabled selected>choose lesson:</option>
            <?php
            foreach($lesson as $vak)
            {
                echo"<option value=" . $vak->lesson . ">" .$vak->lesson. "</option>";
            }?>
            </select>
            <noscript><input type="submit" value="Submit"></noscript>
        </form>
     </div>
</div>