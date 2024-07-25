<?php
SESSION_start();
$server = "localhost";
$username = "root";
$password ="";
$conn=mysqli_connect($server,$username,$password);
mysqli_select_db($conn,"hospital");
if (isset($_POST['submit'])) {
  $email=$_POST['patient_email'];
  $password=$_POST['password'];
   $query="SELECT * FROM login WHERE patient_email='$email' AND password='$password'";
  $result=mysqli_query($conn,$query);
  if (mysqli_num_rows($result) == 1) {
      header("location: home.php");
  } else {
      echo "Invalid email or password";
  }
}
mysqli_close($conn);
?>