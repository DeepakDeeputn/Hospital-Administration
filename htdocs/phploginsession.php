<?php
session_start();
$l=mysqli_connect("localhost","root","");
mysqli_select_db($l,'register');
$username=$_POST['username'];
$password=$_POST['password'];
$res=mysqli_query($l,"select * from 'useregister' where
'username'='".$username."' and 'password'='".$password."'");
if(mysqli_num_rows($res)>0)
{
header("location:homelogin.php");
 exit();
}
else{
    ?>
    {
<script>alert("Enter Valid User Credential"); window.location="login.php";
</script>
<?
}
?>