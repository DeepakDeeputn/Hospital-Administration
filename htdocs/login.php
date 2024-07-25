<!DOCTYPE html>
<html lang="en">
<head>
 <title>Document</title></head>
 <style>
.aa
{
  border: 3px outset #FFF5EE;
  height:480px;
   width:250px;
   float:center;
  margin:auto;
  border-radius:  20px 20px;
  background-color: #FFF5EE;
  
  }
  .tt:hover
{
background-color:#BC8F8F;
}
.hs
{
  height:50px;
  background-color:#AFEEEE;
  border-radius:  10px 10px;
}
.tt
{
  
  border: 3px outset #FFF5EE;
  float:right;
  height:48px;
   width:150px;
   padding-top:0rem;
   padding-left:1rem;
   border-radius:  10px 10px;
   
} 
</style>
<body  background="hsp3.jpg" >
<div class="aa">
    <h1>Register</h1>
    <form action="conn.php" method="post">
        <h2>Patient Id</h2>
        <input type="number" name="patient_id">
        <br>
        <h2>Name </h2>
        <input type="text" name="patient_name">
        <br>
        <h2>Email </h2>
        <input type="email" name="patient_email">
        <br>
        <h2>password</h2>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" name="submit">
        </form>
</div>      
</body>
</html>