<h2 style="text-align: center;">student information </h2>
<table class="table table-striped">
    <?php
    foreach ($classes as $class_info) {
        echo"<tr>";
        echo "<td><b>classname:</b></td>";
        echo "<td>" . $class_info['classname'] . "</td>";
        echo"</tr>";
        echo"<tr>";
        echo "<td><b>study direction:</b></td>";
        echo "<td>" . $class_info['study_direction'] . "</td>";
        echo"</tr>";
        echo"<tr>";
        echo "<td><b>grade</b></td>";
        echo "<td>" . $class_info['grade'] . "</td>";
        echo"</tr>";        
        echo"<tr>";
        echo "<td><b>mentor:</b></td>";
        echo "<td>" . $class_info['mentor'] . "</td>";
        echo"</tr>";
        echo"<tr>";
        echo "<td><b>level:</b></td>";
        echo "<td>" . $class_info['level'] . "</td>";
        echo"</tr>";
    }
    ?>   
</table>
