<?php
$total=0;
$q4 = $_POST['q4'];

echo "You answered the following questions correctly : ";
if ($q4==1)
{
$total=$total+1;
echo "1 ";
}

echo "\n\n\n\n";
echo "<html>
<head></head>";
echo "<body class=\"page_bg\">";
echo "<br>Total number of correct answers : ".$total."/1";
echo '	<h2>Correct Answers</h2>
<br>
<b>Q8.</b>
                <b>Lateral Earth Pressure is the pressure that soil exerts in the horizontal plane</b><br>
                True<br>
                <br>

</ol>';
echo "</body></html>";
?>
