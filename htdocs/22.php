<?php
$host="localhost";
$name="root";
$pwd="";
$con=mysqli_connect($host,$name,$pwd);
mysqli_select_db($con,"Hospital");

$sql="SELECT * FROM login ";
$dis=mysqli_query($con,$sql);
while($r=mysqli_fetch_assoc($dis))
{
    echo "\n";
    echo $r['patient_id'];
    echo $r['patient_email'];   
}
mysqli_close($con);
?>