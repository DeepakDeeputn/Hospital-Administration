<!DOCTYPE html>
<html lang="en">
<head>
<style>
.aa
{
  border: 3px outset #FFF5EE;
  height:300px;
   width:450px;
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
</head>
<body background="hsp3.jpg">
<div class="hs">
<div class="tt"><a href="home.php"><h2>HOME</h2></div></a>
</div>    
<br><br><br>
<div class="aa"><center>
    <form action="takeapp.php" method="post">
        <label>Enter Doctor ID:</label>
        <input type="number" name="doc_id"><br><br><br>
        <label>Day:</label>
    <input type="radio" name="day" value="mon">Monday
    <input type="radio" name="day" value="tue">Tuesday
    <input type="radio" name="day" value="wed">Wednesday
    <input type="radio" name="day" value="thr">Thursday
    <input type="radio" name="day" value="fri">Friday
    <input type="radio" name="day" value="sat">Saturday
    <br><br><br>
    <label>Time:</label>
    <input type="radio" name="time" value="10am">10 AM
    
    <input type="radio" name="time" value="3pm">3 PM
    <input type="radio" name="time" value="7pm">7 PM
    <br><br><br>
    <input type="submit" value="submit">
  </form>
  </div>
</body>
</html>