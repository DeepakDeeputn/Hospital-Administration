<?php
session_start();
$host="localhost";
$username="root";
$password="";
$c=mysqli_connect($host,$username,$password);
mysqli_select_db($c,"Hospital");
$patient_id=$_POST['patient_id'];
$patient_name=$_POST['patient_name'];
$patient_email=$_POST['patient_email'];
$password=$_POST['password'];
$sql="INSERT INTO login (patient_id,patient_name,patient_email,password) VALUES ($patient_id,'$patient_name','$patient_email','$password') ";
$result=mysqli_query($c,$sql);
if($result==1){
    header("Location:login2.php");
}
mysqli_close($c);
?>