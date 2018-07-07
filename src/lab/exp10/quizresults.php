<?php


$total=0;

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];

echo "You answered the following questions correctly : ";
if ($q1==2)
{
$total=$total+1;
echo "1 ";
}
if ($q2==3)
{
$total=$total+1;
echo "2 ";
}
if ($q3==4)
{
$total=$total+1;
echo "3 ";
}
if ($q4==4)
{
$total=$total+1;
echo "4 ";
}


echo "\n\n\n\n";
echo "<html>
<head></head>";
echo "<body class=\"page_bg\">";

echo "<br>Total number of correct answers : ".$total."/4";

echo '	<h2>Correct Answers</h2>
<br>
<ol>
                <li><b> What is plastic hinge?</b></li>
                 zone of yielding due to flexure in a structural member<br>
                <br>
                <li><b> Hinged length depends upon </b></li>
                Type of loading<br>
                <br>


                <li><b>What is the hinged length for simply supported rectangular beam of span L with central concentrated load? </b> </li>
                L/3<br>
                <br>
                <li><b> What is the hinged length for simply supported rectangular beam of span L with uniform distributed load?</b></li>
                 L/3<br>
                <br><br><br>



</ol>';
echo "</body></html>";
?>
