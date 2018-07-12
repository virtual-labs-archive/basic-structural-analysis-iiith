<?php


$total=0;

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];

echo "You answered the following questions correctly : ";
if ($q1==4)
{
$total=$total+1;
echo "1 ";
}
if ($q2==4)
{
$total=$total+1;
echo "2 ";
}
if ($q3==3)
{
$total=$total+1;
echo "3 ";
}
if ($q4==2)
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
                <li><b> The flat, segmental, semicircular, horse-shoe and Stilted arches are _____</b></li>
                 One centered arch<br>
                <br>
                <li><b> The pointed Arch of the Tudor period is an example of ______ arch. </b></li>
                Four centered arch<br>
                <br>


                <li><b>Vault is an architectural term for: </b> </li>
                Arch<br>
                <br>
                <li><b> _______ type of arch is constructed from bricks which are finely cut by means of wire saw.</b></li>
                 Gauged arch<br>
                <br><br><br>



</ol>';
echo "</body></html>";
?>
