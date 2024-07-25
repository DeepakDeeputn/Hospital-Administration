<!DOCTYPE html>
<head>
<style>
 .aa{
  border: 3px outset #FFF5EE;
  height:180px;
   width:300px;
   float:center;
  margin:auto;
  border-radius:  20px 20px;
  background-color: #FFF5EE;
}
</style>
</head>
<div class="aa">
<body> 
<center>
<?php
session_start();
$a="localhost";
$b="root";
$c="";
$conn=mysqli_connect($a,$b,$c);
mysqli_select_db($conn,"Hospital");
$patient_id=$_POST['patient_id'];
$sql="SELECT patient_name,patient_email,password  FROM login WHERE patient_id='$patient_id'";
$r=mysqli_query($conn,$sql);
while($d=mysqli_fetch_assoc($r)){
echo $patient_id;
echo "\t"."<br>";
echo $d['patient_name'];
echo "\t"."<br>";
echo $d['patient_email'];
echo "\t"."<br>";
echo $d['password'];
}
mysqli_close($conn);
?>
 <a href="home.php" ><h1>HOME</h1></a>
 </center>
</body>
</div>
</html>