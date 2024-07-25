<!DOCTYPE html>
<head>
<style>
.aa
{
  border: 3px outset #FFF5EE;
  height:180px;
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
</head>
<body background="hsp3.jpg">
<div class="hs">
<div class="tt"><a href="home.php"><h2>HOME</h2></div></a>
</div>
</div>
    <br><br><br><br><br><br>
     <div class="aa"><center>
    <form action="patient-details.php"  method="post">
    <h2>Enter patient id</h2>
    <input type="number" name="patient_id"><BR><br>
    <input type="submit" name="submit">
    </form>  </center>  
    </div>
    
</body>