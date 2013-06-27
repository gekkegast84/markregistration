<div class='center-wrapper'>
    <center><h1>markregistration</h1></center>
    <div class='offset3 span6'>
        <?php
        foreach ($classinfo as $class_information) {
            echo"<table class='table'>";
                echo"<tr>";
                echo "<td><b>classname:</b></td>";
                echo "<td>" . $class_information->classname . "</td>";
                echo"</tr>";
                echo"<tr>";
                echo "<td><b>study direction:</b></td>";
                echo "<td>" . $class_information->study_direction . "</td>";
                echo"</tr>";
                echo"<tr>";
                echo "<td><b>grade:</b></td>";
                echo "<td>" . $class_information->grade . "</td>";
                echo"</tr>";
                echo"<tr>";
                echo "<td><b>mentor:</b></td>";
                echo "<td>" . $class_information->mentor . "</td>";
                echo"</tr>";
                echo"<tr>";
                echo "<td><b>level:</b></td>";
                echo "<td>" . $class_information->level . "</td>";
                echo"</tr>";
            echo"</table>";
        }
        ?>
    </div>
</div>
