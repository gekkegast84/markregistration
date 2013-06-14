<div class='center-wrapper'>
    <center><h1>markregistration</h1></center>
    <div class='offset3 span6'>
        <h3>Marks:</h3>
        <form action="report" method="POST">
        <table class="table tableborder">
            <?php
            foreach ($marking as $markjes) {
                echo"<tr>";
                echo "<td><b>lesson:</b></td>";
                echo "<td>" . $markjes->lesson . "</td>";
                echo"</tr>";
                echo"<tr>";
                echo "<td><b>grade:</b></td>";
                echo "<td>" . $markjes->grade . "</td>";
                echo "<td><b>weighing:</b></td>";
                echo "<td>" . $markjes->weighing . "</td>";
                echo "<td><b>period:</b></td>";
                echo "<td>" . $markjes->period . "</td>";
                echo "<td><input type='submit' name='change' value='change report' /></td>";
                echo"</tr>";
            }
            $cijfers = array();
            var_dump($marking);
            foreach ($marking as $markjes) {
                if (!key_exists($markjes->lesson, $cijfers)) {
                    array_push($cijfers, $markjes->lesson);
                }
            }
            var_dump($cijfers);
            ?>  
        </table>
        </form>
    </div>
</div>