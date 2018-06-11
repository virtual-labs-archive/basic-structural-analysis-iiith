<?php
$total=0;
$q5 = $_POST['q5'];
$q6 = $_POST['fib1'];
$q7 = $_POST['q7'];
echo "You answered the following questions correctly : ";
if ($q5==1)
{
$total=$total+1;
echo "5 ";
}
if ((strcasecmp($q6,"longitudinal strain")==0)){
$total= $total+1;
echo " 6 ";
}
if ($q7==1)
{
$total=$total+1;
echo " 7 ";
}
echo "\n\n\n\n";
echo "<html>
<head></head>";
echo "<body class=\"page_bg\">";
echo "<br>Total number of correct answers : ".$total."/3";
echo '	<h2>Correct Answers</h2>
<br>
<b>Q5.</b>
                <b>Bending moment profile for a S.S. beam under U.D.L is parabolic.</b><br>
                True<br>
                <br>
<b>Q6.</b>      <b>The ratio of change in length to the  
                    original length is </b> <br>longitudinal strain <br>
                  <br>
<b>Q7.</b>                
                <b>Tension occurs at bottom of the cantilever beam when point load is applied at the center.</b><br>
                True<br>
                <br>
</ol>';
echo "</body></html>";
?>
