<h2 style="text-align: center;">my grades</h2>
<table class="table tableborder">
    <?php
    foreach ($periodes as $markjes) {
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
        echo"</tr>";
    }
    ?>   
</table>

<style>
    .table td
    {
        border:1px solid #333;
    }

</style>