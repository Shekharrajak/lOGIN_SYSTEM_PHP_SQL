<? php
$mysql_hostname = "hostname";
$mysql_user ="username";
$mysql_password ="password";
$mysql_database="database";
$bd =mysql_connect($mysql_hostname,$mysql_user,$mysql_password)
or die("OOps some thing went wrong yar!");
mysql_select_db($mysql_database,$bd) or die("OOP something wrong !")
?>
