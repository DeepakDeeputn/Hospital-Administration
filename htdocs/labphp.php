<?php
$a=17;
$b=25;
$opr= '*';
switch($opr)
 {
case '+': echo "<br> The Operator is $opr";
 echo "<br>Addition of $a and $b is".($a+$b);
 break;
case '-': echo "<br> The Operator is$opr";
echo " <br>Substraction of $a and $b is".($a-$b);
 break;
case '*' : echo "<br> The Operator is $opr";
 echo" <br>Product of $a and $b is " .($a*$b);
 break;
case '/' : echo "<br> The Operator is $opr";
 echo " <br>Quotient of $a and $b is " .($a/$b);
 break;
case '%' :
echo "<br> The Operator is $opr"; 
 echo " <br>Reminder of $a and $b is ".($a%$b);break;
 default : echo " <br>Inavalid operator or No Operator is selected";
 }
 ?>
