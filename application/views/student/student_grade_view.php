<h2 style="text-align: center;">my grades</h2>
<a style='line-height:10px;'HREF="javascript:window.print()">
    <i class='icon-print' style='margin:10px;' BORDER="0"></i>print this page.</a>
<table class="table tableborder">
    <?php
    foreach ($periodes as $markjes) {
        if($markjes->public == 1) {
            echo"<tr>";
            echo "<td><b>lesson:</b></td>";
            echo "<td>" . $markjes->lesson . "</td>";
            echo"</tr>";
            echo"<tr>";
            echo "<td><b>grade:</b></td>";
            if ($markjes->grade <= 5.5) {
                echo "<td style='color:red;'>" . $markjes->grade . "</td>";
            } else if ($markjes->grade > 5.5 AND $markjes->grade < 8) {
                echo "<td style='color:greenyellow;'>" . $markjes->grade . "</td>";
            } else if ($markjes->grade >= 8) {
                echo "<td style='color:green;'>" . $markjes->grade . "</td>";
            }
            echo "<td><b>weighing:</b></td>";
            echo "<td>" . $markjes->weighing . "</td>";
            echo "<td><b>test date:</b></td>";
            echo "<td>" . $markjes->test_date . "</td>";
            echo "<td><b>input date:</b></td>";
            echo "<td>" . $markjes->input_date . "</td>";
            echo"</tr>";
        }
        else
        {
            echo'report not official';
        }
    }
    ?>   
</table>