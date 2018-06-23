<?php
$total=0;
$Q1 = $_POST['Q1'];
$Q2 = $_POST['Q2'];
$Q3 = $_POST['Q3'];

echo "You answered the following questions correctly : ";
if ($Q1==4)
{
$total=$total+1;
echo "1 ";
}
if ($Q2==1)
{
$total=$total+1;
echo "2 ";
}
if ($Q3==3)
{
$total=$total+1;
echo "3 ";
}

echo "\n\n\n\n";
echo "<html>
<head></head>";
echo "<body class=\"page_bg\">";
echo "<br>Total number of correct answers : ".$total."/3";
echo '	<h2>Correct Answers</h2>
<br>
<b>Q1.</b>
                <b>Continuous beams are used when the span of the beam is</b><br>
                Large<br>
                <br>
<b>Q2.</b>
                <b> In Continuous beams deflection under each rigid support will be equal to</b><br>
                Zero<br>
                <br>
<b>Q3.</b>
                <b> If the end supports are simple supports then </b><br>
                MA=MC=0<br>
                <br>
                

</ol>';
echo "</body></html>";
?>
