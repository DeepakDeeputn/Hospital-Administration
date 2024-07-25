<html>
<head>
<style>
</style>
</head>
<body background="hsp3.jpg">
<?php
$my_array = array('01','02','03','04','05','06','07','08','09','10','Token');
shuffle($my_array);
$host="localhost";
$user="root";
$pwd="";
$con=mysqli_connect($host,$user,$pwd);
mysqli_select_db($con,"hospital");
$doc_id=$_POST['doc_id'];
$day=$_POST['day'];
$time=$_POST['time'];
$sql="SELECT * FROM appointment WHERE doctor_id='$doc_id' AND day='$day'AND time='$time' ";
$res=mysqli_query($con,$sql);
while($r=mysqli_fetch_assoc($res)){
    echo "<h1>Details.</h1>";
    echo "<hr>";
    shuffle($my_array);
    for($i=0;$i<=0;$i++){
        if($my_array[$i]!='Token'){
        echo "<h2>Token No: ".$my_array[$i]."</h2>";
    echo "<h2>Doctor: ".$r['doctor_name']."</h2>";
    echo "<h2>Doctor ID : ".$r['doctor_id']."</h2>";
    echo "<h2>Day: ".$r['day']."</h2>";
    echo "<h2>Time: ".$r['time']."</h2>";
    echo "<h2>Appointment accepted</h2>";
        }
        else{
            echo "<h3>Token Closed \n Cannot Take Further Appointment..!</h3>";
        }
    }
}
echo 
mysqli_close($con);
?>
</body>
</html>