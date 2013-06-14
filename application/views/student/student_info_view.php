<h2 style="text-align: center;">student information</h2>
<table class="table table-striped">
    <?php
        foreach($student_info_view as $student_test_info)
        {
        echo"<tr>";
            echo "<td><b>username:</b></td>";
            echo "<td>" . $student_test_info['username'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo "<td><b>surname:</b></td>";
            echo "<td>" . $student_test_info['surname'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo "<td><b>initials:</b></td>";
            echo "<td>" . $student_test_info['initials'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo "<td><b>nickname:</b></td>";
            echo "<td>" . $student_test_info['nickname'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo "<td><b>prefix:</b></td>";
            echo "<td>" . $student_test_info['prefix'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo "<td><b>date of birth:</b></td>";
            echo "<td>" . $student_test_info['dob'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo "<td><b>picture:</b></td>";
            echo "<td>" . $student_test_info['picture'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo "<td><b>classname:</b></td>";
            echo "<td>" . $student_test_info['classname'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo "<td><b>cohort:</b></td>";
            echo "<td>" . $student_test_info['cohort'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo "<td><b>city:</b></td>";
            echo "<td>" . $student_test_info['city'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo "<td><b>postcode:</b></td>";
            echo "<td>" . $student_test_info['postcode'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo "<td><b>street:</b></td>";
            echo "<td>" . $student_test_info['street'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo "<td><b>phone:</b></td>";
            echo "<td>" . $student_test_info['phone'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td><b>mobilephone:</b></td>";
            echo "<td>" . $student_test_info['mobilephone'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td><b>gender:</b></td>";
            echo "<td>" . $student_test_info['sex'] . "</td>";
        echo"</tr>";
        echo"<tr>";
            echo"<td><b>nationality:</b></td>";
            echo "<td>" . $student_test_info['nationaliteit'] . "</td>";
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