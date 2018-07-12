<?php
$total=0;
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
echo "You answered the following questions correctly : ";
if ($q5==1)
{
$total=$total+1;
echo "1 ";
}
if ($q6==1)
{
$total=$total+1;
echo "2 ";
}
if($q7==1){
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
                <b>If a truss is in equilibrium, then each of its joints must also be in equilibrium.</b><br>
                True<br>
                <br>
<b>Q2.</b>                
                <b>Truss members are all straight two-force members lying in the same plane. .</b><br>
                True<br>
                <br>
<b>Q3.</b>                
                <b>The flexibility matrix method is used to analyze statically indeterminate planar trusses.</b><br>
                True<br>
                <br>

</ol>';
echo "</body></html>";
?>
